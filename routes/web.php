<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 商品一覧と商品詳細（ログインなしで作成）
Route::get('/', [ItemController::class, 'index'])
    ->name('items.index');
Route::get('/items/{item}', [ItemController::class, 'index'])
    ->name('items.show');

// 商品一覧と詳細以外
Route::middleware('auth')
    ->group(function () {
        // 商品購入フォーム表示
        Route::get('items/{item}/buy', [ItemController::class, 'showBuyForm'])
            ->name('show.buy.form');

        // 商品購入
        Route::post('items/{item}/buy', [ItemController::class, 'buyItem'])
            ->name('item.buy');

        // 商品出品フォーム表示
        Route::get('items/sell', [ItemController::class, 'showSellForm'])
            ->name('item.sell');

        // 商品出品
        Route::post('items/sell', [ItemController::class, 'sellItem'])
            ->name('item.sell');

        // 出品した商品削除
        Route::post('items/{item}', [ItemController::class, 'destroy'])
            ->name('item.destroy');

        // 出品した商品編集フォーム表示
        Route::get('items/{item}/edit', [ItemController::class, 'edit'])
            ->name('item.edit');

        // 出品した商品更新
        Route::post('items/{item}/edit', [ItemController::class, 'update'])
            ->name('item.edit');
    });

// マイページ
Route::prefix('mypage')
    ->middleware('auth')
    ->group(function () {
        // マイページトップ
        Route::get('/', [ProfileController::class, 'index'])
            ->name('mypage.index');

        // いいねした商品一覧
        Route::get('liked-items', [ProfileController::class, 'getLikedItems'])
            ->name('mypage.liked-items');

        // 購入した商品一覧
        Route::get('bought-items', [ProfileController::class, 'getBoughtItems'])
            ->name('mypage.bought-items');

        // 出品した商品一覧
        Route::get('sold-items', [ProfileController::class, 'getSoldItems'])
            ->name('mypage.sold-items');

        // プロフィール編集フォーム表示
        Route::get('edit-profile', [ProfileController::class, 'edit'])
            ->name('mypage.edit');

        // プロフィール更新
        Route::post('edit-profile', [ProfileController::class, 'update'])
            ->name('mypage.edit');

        // 退会
        Route::post('delete', [ProfileController::class, 'destroy'])
            ->name('mypage.destroy');
    });

// いいね
// いいねする
Route::post('likes/', [LikeController::class, 'store'])
    ->name('likes.store');

// いいね削除
Route::post('likes/', [LikeController::class, 'destroy'])
    ->name('likes.destroy');
