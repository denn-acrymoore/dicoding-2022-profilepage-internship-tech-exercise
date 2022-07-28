<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class ProfileController extends Controller
{
    public function profilePageAcademy()
    {
        $data = [
            'active_bar' => 'academy',
            'profile_data' => UserProfile::find('denn.sebastian.e@gmail.com')
        ];
        return view('profile-page.profile_page_academy', $data);
    }

    public function profilePageEvent()
    {
        $data = [
            'active_bar' => 'event',
            'profile_data' => UserProfile::find('denn.sebastian.e@gmail.com')
        ];
        return view('profile-page.profile_page_event', $data);
    }

    public function profilePageChallenge()
    {
        $data = [
            'active_bar' => 'challenge',
            'profile_data' => UserProfile::find('denn.sebastian.e@gmail.com')
        ];
        return view('profile-page.profile_page_challenge', $data);
    }

    public function profilePageWinningApp()
    {
        $data = [
            'active_bar' => 'winning-app',
            'profile_data' => UserProfile::find('denn.sebastian.e@gmail.com')
        ];
        return view('profile-page.profile_page_winning_app', $data);
    }

    public function editProfile(Request $request)
    {
        // ddd($request);

        $imgPath = $request->file('profileImg')->store('database-images/profile-images');
        // ddd($path);

        // UserProfile::create([
        //     'email' => 'denn.sebastian.e@gmail.com',
        //     'nama' => $request->input('nama'),
        //     'username' => $request->input('username'),
        //     'headline' => $request->input('headline'),
        //     'tentang_saya' => $request->input('tentang_saya'),
        //     'image_path' => $imgPath
        // ]);

        return redirect()->back();
    }
}