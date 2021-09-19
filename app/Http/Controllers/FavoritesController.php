<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り追加するアクション。
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り追加する
        \Auth::user()->favor($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿をお気に入り解除するアクション。
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り解除する
        \Auth::user()->unfavor($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
