<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // View
    public function index()
    {
        $profiles = Profile::where('user_id', auth()->user()->id)->get();

        return view('member.profile.index', compact('profiles'));
    }

    public function create()
    {
        $profiles_count = Profile::where('user_id', auth()->user()->id)->count();

        return view('member.profile.create', compact('profiles_count'));
    }

    public function manage()
    {
        $profiles = Profile::where('user_id', auth()->user()->id)->get();

        return view('member.profile.manage', compact('profiles'));
    }

    public function edit($id)
    {
        $data = Profile::find($id);

        return view('member.profile.edit', compact('data'));
    }


    // Function / API
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('avatar')->store('images', 'public');

        Profile::create([
            'name' => $request->name,
            'avatar' => basename($path),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('member.profile.index')->with([
            'success' => 'Profile created successfully!'
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        Profile::where('id', $id)->update([
            'name' => $request->name,
            'avatar' => $request->file('avatar') ? basename($request->file('avatar')->store('images', 'public')) : null
        ]);

        return redirect()->route('member.profile.index')->with([
            'success' => 'Profile updated successfully!'
        ]);
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('member.profile.manage')->with([
            'success' => 'Profile deleted successfully!'
        ]);
    }
}
