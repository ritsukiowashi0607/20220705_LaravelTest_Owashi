<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "建物です";
    }
}









//         return view('index', ['txt' => 'フォームを入力']);
//     }
//     public function post(Request $request)
//     {
//         $validate_rule = [
//             'name' => 'required',
//             'role' => 'required',
//             'email' => 'required|email',
//             'age' => 'numeric',
//             'registered_at' => 'date|nullable',
//         ];
//         $this->validate($request, $validate_rule);
//         return view('index', ['txt' => '正しい入力です']);
//     }
// }
//     public function index()
//     {
//         $item = [
//             "content" => "自由に入力してください",
//         ];
//         return view("index", $item);
//     }
//     public function post(Request $request)
//     {
//         $content = $request->content;
//         $item = [
//             "content" => $content . "と入力しましたね"
//         ];
//         return view("index", $item);
//     }
// }
