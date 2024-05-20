<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        // query 生成
        $query = Item::query();

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword . '%');
        }

        // Item 取得
        $items = $query->get();

        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.store');
    }

    public function store(Request $request, User $user)
    {
        // validate
        $this->validate($request,
            [
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|min:1',
            ]
        );

        // fillable分かんないので一旦これで。
        $item = new Item;
        $item->seller_id = $user->id;
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->img_src = $request->img_src;
        $item->description = $request->description;
        $item->price = $request->price;

        $item->save();
        return redirect(route('items.index'));
    }

    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item)
    {
        $this->authorize($item);
        // varidate(storeと同じにしてます)
        $this->validate($request,
            [
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|min:1',
            ]
        );

        $item->update($request->all());
        return redirect(route('items.show', ['item' => $item]));

    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect(route('items.index'));

    }
}
