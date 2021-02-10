<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()//ControllerのAritcleController@indexの＠以下に該当する==即ちこれがindexアクションメソッド
    {
        //ダミーデータ　本来はarticlesテーブルから読み込む
        $articles = [
            (object) [
                'id' =>1,
                'title' =>'タイトル1',
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object)[
                'id' => 2,
                'title' => 'タイトル2',
                'body' => '本文2',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 2,
                    'name' => 'ユーザー名2',
                ],
            ],
            (object) [
                'id' => 3,
                'title' => 'タイトル3',
                'body' => '本文3',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 3,
                    'name' => 'ユーザー名3',
                ],
            ],     
        ];
        return view('articles.index', ['articles' => $articles]);
        //第一引数には、ビューファイル名 
        //第二引数には、ビューファイルに渡す変数の名称と、その変数の値を連想配列形式で指定
        //'articles'というキーを定義することで、ビューファイル側で$articlesという変数が使用できるようになります
    }
}
