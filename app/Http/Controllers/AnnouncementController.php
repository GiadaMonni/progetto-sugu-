<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\AnnouncementController;

class AnnouncementController extends Controller
{
   public function createAnnouncement()
   {
      return view('announcements.create');
   }

   public function showAnnouncement(Announcement $announcement)
   {
      return view('announcements.show' , compact('announcement'));
   }

   public function indexAnnuncement()
   {
      $announcements= Announcement::where('is_accepted')->paginate(9);
      return view('announcements.index' , compact('announcements'));
   }
}
