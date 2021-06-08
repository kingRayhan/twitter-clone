<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tweet\TweetCollection;
use Inertia\Inertia;

class TimelineController extends Controller
{
    public function index()
    {
        $resource =  new TweetCollection(\request()->user()->tweetsFromFollowing()->latest()->paginate(30));
        // return  $resource;
        return Inertia::render('Timeline', compact('resource'));
    }


    public function loadTweets()
    {
        $resource =  new TweetCollection(\request()->user()->tweetsFromFollowing()->latest()->paginate(5));
        return $resource;
    }
}
