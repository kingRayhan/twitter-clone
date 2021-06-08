<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tweet\TweetCollection;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimelineController extends Controller
{
    public function index()
    {
        $resource =  new TweetCollection(\request()->user()->tweetsFromFollowing()->paginate(6));

        // return request()->user();
        return Inertia::render('Timeline', compact('resource'));
    }
}
