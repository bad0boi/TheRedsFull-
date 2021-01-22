<?php

namespace App\Http\Controllers;

// Ensure to add any required relevant authentications and e.g. use App\Article; -> If you want to access
// Articles and its pages/functions

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Image;
use App\User;


class ProfileController extends Controller
{

    public function allUsers ()
    {
        $profiles = User::latest()->get();
        return view('allusers',['profiles' => $profiles
        ]);
    }


    /* GET user profile view */

    public function profile()
    {
        return view('profile');
    }

    // Show specific Users Profile via ID

    public function show($id)
    {
        $profile = User::findOrFail($id); // User:: allows me access the User database table
        return view ('profileshow', ['profile' => $profile ]);  // * Make sure $profile is the one inputted in showing specific ID users
                                                                        // e.g. $profile->name to show Users Name from specific ID
    }

    /* Update and SAVE user profile edits */

    public function profileUpdate(Request $request)
    {

        // Validation Rules

        $request->validate([
            'name' => 'required|min:6|string|max:255',
            'email' => 'required|email|string|max:255',
            'location' => 'required|string|max:100',
            'favouriteplayer' => 'required|string|max:100',
            // Gender is optional for some users, therefore required isn't necessary

        ]);

        // Save profile update

        $user = Auth::user();
        $user->name = $request ['name'];
        $user->email = $request ['email'];
        $user->location = $request['location'];
        $user->gender =$request ['gender'];
        $user->favouriteplayer = $request['favouriteplayer'];
        $user->save();

        // Session to allow user action is successful or not, as well as showing a flash card
        // indicating successful request.

        Session::flash('message', 'Profile Updated');

        // Redirect to updated profile.

        return back(); // This function will just return you back to the same page.
    }

        // Get profile view for changing password

    public function changePasswordForm ()
    {
        return view ('changepassword');
    }

        // Change Password for authenticated User

    public function changePassword (Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Your current password does not match with what you provided');
        }

        if (strcmp ($request->get ('current_password'), $request->get('new_password')) == 0){   //Strcmp is a PHP command
            return back()->with('error', 'Your current password cannot be the same with the new password');
        }

        // Validate

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        // Save New Password to Database

        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('message', 'Password Successfully changed');

    }

    // Get profile avatar upload view

    public function getProfileAvatar ()
    {
        return view ('profilepicture');
    }

    // Upload and Save Avatar to the database

    public function profilePictureUpload(Request $request)
    {
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension(); // can be JPEG or PNG
            Image::make($avatar)->resize(250,250)->save(public_path('/images/avatar/'. $filename)); // Integration of Intervention Image extension
            $user = Auth::user();
            $user->avatar = $filename;

            //Validate
            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png'
            ]);

            $user->save(); // Save uploaded image
        }
        return back()->with('message', 'Profile Picture Uploaded Successfully'); // Always remember 'message' is KEY then after is VALUE.
    }






}

