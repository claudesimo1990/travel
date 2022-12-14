<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostsController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('site.posts.index', [
            'posts' => Post::with(['user'])->latest()->whereStatus('ACCEPTED')->paginate(6)
        ]);

    }

    public function travels(): Factory|View|Application
    {
        return view('site.posts.travel.create', [
            'post' => new Post()
        ]);

    }

    public function coli(): Factory|View|Application
    {
        return view('site.posts.coli.create', [
            'post' => new Post()
        ]);

    }
}
