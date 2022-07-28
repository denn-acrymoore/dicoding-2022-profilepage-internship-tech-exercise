<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Storage;

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
        $currentUserInfo = UserProfile::find('denn.sebastian.e@gmail.com');
        $oldImgPath = $currentUserInfo->image_path;
        $currentUsername = $currentUserInfo->username;

        // If the username doesn't change:
        if ($request->input('username') == $currentUsername) {
            $validatedData = $request->validate([
                'nama' => 'required|max:100',
                'username' => 'required|alpha_num|min:4|max:10',
                'headline' => 'required|max:100',
                'tentang-saya' => 'required|max:100',
                'profileImg' => 'required|image|max:2000'
            ]);
        }

        // If the username changes:
        else {
            $validatedData = $request->validate([
                'nama' => 'required|max:100',
                'username' => 'required|alpha_num|min:4|max:10|unique:App\Models\UserProfile,username',
                'headline' => 'required|max:100',
                'tentang-saya' => 'required|max:100',
                'profileImg' => 'required|image|max:2000'
            ]);
        }

        Storage::delete($oldImgPath);
        
        $imgPath = $request->file('profileImg')->store('database-images/profile-images');
        // ddd($path);

        UserProfile::where('email', 'denn.sebastian.e@gmail.com')
            ->update([
                'nama' => $request->input('nama'),
                'username' => $request->input('username'),
                'headline' => $request->input('headline'),
                'tentang_saya' => $request->input('tentang-saya'),
                'image_path' => $imgPath
            ]);

        return redirect()->back();
    }
}