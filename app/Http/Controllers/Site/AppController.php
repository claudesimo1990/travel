<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(): Factory|View|Application
    {
        $posts = Post::with(['user'])->latest()->whereStatus('ACCEPTED')->limit(3)->get();

        return view('site.app', [
            'posts' => $posts
        ]);

    }
}
