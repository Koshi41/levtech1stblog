<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/**
* Post⼀覧を表⽰する
*
* @param Post Postモデル
* @return array Postモデルリスト
*/

class PostController extends Controller
{
  public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使⽤。
    {
      return $post->get();//$postの中⾝を戻り値にする。
    }
}
