<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function homepage(){
        $announcements=Announcement::Where('is_accepted' , true)->take(6)->get()->sortByDesc('created_at');
        // dd($announcements);
        return view('welcome' , compact('announcements'));
    }

    public function categoryShow(Category $category){
      
        return view('announcements/categoryShow' , compact('category'));
    }

    public function searchAnnouncement(Request $request){
        $announcements=Announcement::search($request->searched)->where('is_accepted',true)->paginate(9);
        return view('announcements.index', compact('announcements'));
    }

   
}
