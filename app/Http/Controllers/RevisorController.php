<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class RevisorController extends Controller
{
    public function indexRevisor()
        {
            $announcement_to_check=Announcement::where('is_accepted', null)->first();
            return view('revisor.index',compact('announcement_to_check'));
        }
    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        // Session::put('last_announcement_id', $announcement->id);
        return redirect()->back()->with('message','Annuncio Accettato');

    }
    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        // Session::put('last_announcement_id', $announcement->id);
        return redirect()->back()->with('message','Annuncio Rifiutato');

    }

    public function becomeRevisor(){
        Mail::to('adminPresto04@gmail.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','Hai correttamente richiesto di diventare revisore');
    }
    public function makeRevisor(User $user){
        Artisan::call('sugu:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message','Complimenti! Ora sei revisore');
    }

    // public function undo()
    // {
    //     $lastAnnouncementId = Session::get('last_announcement_id');

    //     // recupera l'annuncio precedente e annulla l'ultima operazione
    //     $lastAnnouncement = Announcement::find($lastAnnouncementId);
    //     $lastAnnouncement->is_accepted = null;
    //     $lastAnnouncement->save();

    //     // rimuovi l'id dell'annuncio dalla sessione
    //     Session::forget('last_announcement_id');

    //     // reindirizza alla pagina precedente
    //     return back();
    }

