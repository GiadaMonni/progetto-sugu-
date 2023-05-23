<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function homepage(){
        $announcements=Announcement::take(6)->get()->sortByDesc('created_at');
        // dd($announcements);
        return view('welcome');
    }

    // public function homepage()
    // {
    //     $announcements= Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
    //     return view('welcome', compact('announcements'));
    // }
}
