<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoginSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('backend.admin.index');
    }

    public function showProfile()
    {
        
        $user = User::where('id', Auth()->id())->first();
        // dd($sessions);

   
        return view('backend.admin-profile', compact('user'));
    }
    
    public function UpdateUserPassword(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:3',
        ]);

        $user = User::findOrFail(Auth::user()->id);

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return response()->json(['error' => 'The current password is incorrect.'], 500);
        }

        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json(['success' => 'Email updated successfully']);

        
    }//end function

    public function UpdateUserEmail(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $user = User::findOrFail(Auth::user()->id);

        if (!$user) {
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }

        $user->email = $request->input('email');
        $user->save();

        // Return a success response with a success message
        return response()->json(['success' => 'Email updated successfully']);

    }//end function;

    public function updateUserInformation(Request $request)
    {
        // dd($request->all());
        $user = User::findOrFail(Auth::user()->id);

        if($user)
        {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->description = $request->input('description');
            $user->language = $request->input('language');
            $user->address_1 = $request->input('address_1');
            $user->address_2 = $request->input('address_2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->postcode = $request->input('postcode');
            $user->country = $request->input('country');
            $user->save();
            $path = 'images/users/admins/';
         
            $file = $request->file('avatar');   
           
            if ($file) {
                $old_profile = $user->getAttributes()['avatar'];
                $file_path = $path . $old_profile;
                $filename = 'ADMIN_IMG_' . time() . '.' . $file->getClientOriginalExtension();
                if ($file->move(public_path($path), $filename)) {

                    if ($old_profile != null && File::exists(public_path($path . $old_profile))) {
                        File::delete(public_path($path . $old_profile));
                    }

                    $user->update([
                    'avatar' => $filename
                    ]);
                    $user->save();
                } 
                
            }
            return response()->json(['success' => 'Profile updated successfully!']);

        }else{
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }//end

    public function destroySingleUserSession($user_id)
    {
        dd($user_id);

        
        if (auth()->check()) {
           
            if (auth()->user()->id === $user_id) {
              dd($user_id);
                // Session::destroy($user_id);
                // auth()->logout();

                // return redirect()->route('admin.show.profile')->with('success', 'Session destroyed successfully');
            } else {
                return redirect()->route('admin.show.profile')->with('error', 'You are not authorized to perform this action');
            }

        } else {
            return redirect()->route('admin.login')->with('error', 'You are not logged in');
        }

    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




}
