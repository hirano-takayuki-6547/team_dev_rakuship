<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;


class ItemController extends Controller
{

    public function showSellForm()
    {
        $categories = Category::orderBy('id')->get();
        return view('items.create', compact('categories'));
    }
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
        $items = $query->paginate(6);

        $categories = Category::orderBy('id')->get();
        return view('items.index', ['items' => $items, 'categories' => $categories]);
    }

    public function create()
    {
        return view('items.store');
    }

    public function sellItem(Request $request)
    {
        $user = Auth::user();

        $img_src = $this->saveItemImg($request->file('img_src'));

        $this->validate(
            $request,
            [
                'category' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'img_src' => 'required|image|file'
            ]
        );

        // 商品画像取得

        $item = new Item;
        $item->seller_id = $user->id;
        $item->category_id = $request->category;
        $item->name = $request->name;
        $item->img_src = $img_src;
        $item->description = $request->description;
        $item->price = $request->price;

        $item->save();
        return redirect()->back()->with('status', '商品を出品しました');
    }



    // 商品購入
    public function buyItem()
    {
    }

    public function show(Item $item)
    {
        return view('items.show', ['item' => $item]);
    }

    public function edit(Item $item)
    {
        $categories = Category::all();

        return view(
            'items.edit',
            [
                'item' => $item,
                'categories' => $categories,
            ]
        );
    }

    public function update(Request $request, Item $item)
    {
        $this->authorize($item);
        // varidate(storeと同じにしてます)
        $this->validate(
            $request,
            [
                'category_id' => 'required',
                'name' => 'required|max:255',
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

    // 一時ファイルの作成
    private function makeTempPath()
    {
        $tmp_fp = tmpfile();
        $meta = stream_get_meta_data($tmp_fp);
        return $meta['uri'];
    }

    // プロフィール画像をstorage/public/app/profile_images以下に保存し、ファイル名を返す
    private function saveItemImg(UploadedFile $file)
    {
        $tempPath = $this->makeTempPath();

        ImageManager::imagick()->read($file)->cover(200, 200)->save($tempPath);

        $filePath = Storage::disk('public')
            ->putFile('item_images', new File($tempPath));

        return basename($filePath);
    }
}
