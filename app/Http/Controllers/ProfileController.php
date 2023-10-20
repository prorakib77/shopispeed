<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function profile(Request $request): View
    {
        return view('admin.profile.profile', [
            'user' => $request->user(),
        ]);
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
// profile photo 
public function profile_photo(Request $request)
{
    $request->validate([
        'profile_photo'=> 'required|image'
    ]);
    if (Auth::user()->profile_photo) {
        unlink(base_path('public/admin/uploads/profile_photo/' . Auth::user()->profile_photo));
    }
    $profileimg_new_name = Auth::user()->id . "." . $request->file('profile_photo')->getClientOriginalExtension();
    $profileImg = Image::make($request->file('profile_photo')->path())->resize(300, 300);
    $profileImg->save(base_path('public/admin/uploads/profile_photo/' . $profileimg_new_name), 80);

    // dd($profileimg_new_name);
    User::find(auth()->id())->update([
        'profile_photo' => $profileimg_new_name,
    ]);
    return back()->with('profile_photo_success', 'Your profile image has been saved successfully');
}
// profile photo
}
