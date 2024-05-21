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
        return back();
    }

    // いいね解除
    public function destroy(Request $request)
    {
        Auth::user()->likedItems()->detach($request->item_id);
        return back();
    }
}
