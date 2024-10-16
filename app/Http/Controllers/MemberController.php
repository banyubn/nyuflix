<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function selectProfile($profile_id)
    {
        session(['selected_profile_id' => $profile_id]);

        return redirect()->route('member.dashboard');
    }

    public function dashboard()
    {
        $selected_profile_id = session('selected_profile_id');

        if (!$selected_profile_id) {
            return redirect()->route('member.profile.index');
        }

        return view('member.dashboard', [
            'profile' => Profile::find($selected_profile_id),
            'success' => 'Profile selected successfully!'
        ]);
    }
}
