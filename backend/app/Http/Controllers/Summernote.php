<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Summernote extends Controller
{
    //エディタ表示
    public function create()
    {
        return view('/create');
    }

    //画像保存用
    public function image (Request $request){
        $result=$request->file('file')->isValid();
        //ファイルの拡張子取得
       // $ext = $result->guessExtension();
        //ファイル名生成
        $file_name = Str::random(32).'.'.$ext;
        if($result){
            //public/tempフォルダ生成
            $target_path = public_path('/temp/');
            $filename = $request->file->getClientOriginalName();
            $file=$request->file('file')->move($target_path, $file_name);
            echo '/temp/'.$filename;
        }
    }
}
