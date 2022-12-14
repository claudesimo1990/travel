<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function travel(Post $post, Request $request): RedirectResponse
    {
        // validate request
        $validator = Validator::make($request->request->all(), [
            'kilo' => [
                'required',
                'numeric',
                'min:1',
                function ($attribute, $value, $fail) use($post) {
                    if ($value > $post->kilo) {
                        $fail(trans('validation.kilo_too_much'));
                    }
                },
            ],
        ]);

        $data = $validator->validate();

        return redirect()->back();
    }

    public function show(Post $post): Factory|View|Application
    {
        $template = $post->type == 'TRAVEL' ? 'site.booking.posts.travel' : 'site.booking.posts.coli';

        return view($template, [
            'post' => $post
        ]);
    }
}
