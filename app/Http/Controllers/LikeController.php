<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    // いいね登録
    public function store(Request $request)
    {
        Auth::user()->likedItems()->attach($request->item_id);
        return back()->with('message', 'いいね登録しました');
    }

    // いいね解除
    public function destroy(Request $request)
    {
        Auth::user()->likedItems()->detach($request->item_id);
        return back()->with('message', 'いいね解除しました');
    }
}
