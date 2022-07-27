<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profilePageAcademy()
    {
        $data = [
            'active_bar' => 'academy' 
        ];
        return view('profile-page.profile_page_academy', $data);
    }

    public function profilePageEvent()
    {
        $data = [
            'active_bar' => 'event' 
        ];
        return view('profile-page.profile_page_event', $data);
    }

    public function profilePageChallenge()
    {
        $data = [
            'active_bar' => 'challenge' 
        ];
        return view('profile-page.profile_page_challenge', $data);
    }

    public function profilePageWinningApp()
    {
        $data = [
            'active_bar' => 'winning-app' 
        ];
        return view('profile-page.profile_page_winning_app', $data);
    }
}
