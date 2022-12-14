<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function show(User $user): Factory|View|Application
    {
        return view(view: "site.profile.show", data: [
            'user' => $user,
        ]);
    }

    public function account(User $user)
    {
        return view('site.profile.pages.account', [
            'user' => $user
        ]);
    }

    public function password(User $user)
    {
        return view('site.profile.pages.password', [
            'user' => $user
        ]);
    }

    public function notifications(User $user)
    {
        return view('site.profile.pages.notifications', [
            'user' => $user
        ]);
    }

    public function posts(User $user)
    {
        return view('site.profile.pages.posts', [
            'user' => $user
        ]);
    }
}
