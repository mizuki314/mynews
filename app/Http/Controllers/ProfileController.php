<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // ユーザーモデルをインポート
use Illuminate\Support\Facades\Auth; // 認証ファサードをインポート
use App\Models\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        // ログイン中のユーザー情報を取得
        $posts = Profile::all()->sortByDesc('updated_at');

        // profile/index.blade.phpビューにユーザー情報を渡す
        return view('profile.index', [
            'posts' => $posts
        ]);
    }
}