<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TagController extends Controller
{
    /**
     * @param  Tag  $tag
     * @return Factory|\Illuminate\Foundation\Application|View|Application
     * @author Chisumo
     */
    public function __invoke(Tag $tag): Factory|\Illuminate\Foundation\Application|View|Application
    {
        // jobs for this tag

        return view('search', ['jobs' => $tag->jobs]);
    }
}
