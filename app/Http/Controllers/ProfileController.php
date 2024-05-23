<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // プロフィールトップページ
    public function index()
    {
        $user = Auth::user();

        return view('mypage.index', compact('user'));
    }


    // いいねした商品一覧表示
    public function getLikedItems()
    {
        $user = Auth::user();

        $items = $user->likedItems()->orderBy('id', 'desc')->get();

        return view('mypage.liked-items', compact('items'));
    }

    // 購入した商品一覧表示
    public function getBoughtItems()
    {
        $user = Auth::user();

        $items = $user->boughtItems()->orderBy('id', 'desc')->get();

        return view('mypage.bought-items', compact('items'));
    }

    // 出品した商品一覧の表示
    public function getSoldItems()
    {
        $user = Auth::user();

        $items = $user->soldItems()->orderBy('id', 'desc')->get();

        return view('mypage.sold-items', compact('items'));
    }

    // 退会処理
    public function destroy()
    {
        $user = Auth::user();

        $user->delete();
        redirect(route('items.index'))->with('status', '退会しました。');
    }

    // 一時ファイルの作成
    private function makeTempPath()
    {
        $tmp_fp = tmpfile();
        $meta = stream_get_meta_data($tmp_fp);
        return $meta['uri'];
    }

    // プロフィール画像をstorage/public/app/profile_images以下に保存し、ファイル名を返す
    private function saveProfileImg(UploadedFile $file)
    {
        $tempPath = $this->makeTempPath();
        ImageManager::imagick()->read($file)->cover(200, 200)->save($tempPath);

        $filePath = Storage::disk('public')
            ->putFile('profile_images', new File($tempPath));

        return basename($filePath);
    }


    // プロフィール更新
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');

        if ($request->has('profile_img')) {
            $filename = $this->saveProfileImg($request->file('profile_img'));
            $user->profile_img = $filename;
        }

        $user->email = $request->input('email');
        $user->description = $request->input('description');

        $user->save();

        return redirect()->back()->with('status', 'プロフィールを更新しました');
    }
}
