<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController1;

// use App\Http\Middleware\FirstMiddleware;

// Route::post("/", [TestController::class, "post"]);


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







// Route::get('/{text}', function ($text) {
//     return $text . "が表示されます";
// });

// Route::get('/test', function(){
//     return 'test';
// });


// 問1
// Route::get('/test/{room}/{id}', function ($room, $id){
//     return "roomが" . $room . "でidは" . $id . "です";
// });

// 問２
// Route::get('/test/{greeting?}', function($greeting = "Goodmorning"){
//     return $greeting . "=おはようございます";
// });








// 問1：リクエストURLを「/test/{room}/{id}」として2つのパラメータを取得し、「roomが200でidは3です」と表示させてください。
// 問2：リクエストURLを「/test」とした時に「Goodmorning=おはようございます」が表示され、リクエストURLを「/test/Bonjour」とした時に「Bonjour=おはようございます」が表示されるようにルーティングを設定してください。







// Laravelを利用して以下の問題に答えてください。
// URLの切り替えを行うアプリケーションを作成してください。
// 条件としては以下の4つが挙げられます。

// ルーティングとコントローラーは必ず使用する。
// /buildingにアクセスした時は「建物です」と出力する。
// /building/{room}にアクセスした時は「部屋番号は{room}です」と出力する。
// ここで{room}はパラメータを表す。

// Route::get("/buliding", function(){
//   return "建物です";
// });

Route::get("/buliding", [TestController::class, "index"]);

Route::get("/buliding/{room}", [TestController1::class, "index"]);
