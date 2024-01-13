<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LoginSession;

use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;//location


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        
        //get login session data when user login
        getMoreDeatils();
        // //store user logged in
        // $user = User::findOrFail(Auth()->id());
        // $user->authenticated_at = Carbon::now();
        // $user->save();

        // // get&store ip address
        // $clientIpAddress = $request->ip();
        // //get&store location address
        // if ($location = Location::get($clientIpAddress)) {
        //     $city = $location->cityName;
        // }

        // //get&store device address
        // $device = Agent::device();
        // $browser = Agent::browser();
        // $platform = Agent::platform();

        // $deviceData = $device ?? ($browser ?? ($platform ? $platform . ' ' . $browser : null));

        // // Find the LoginSession record based on the user_id
        // $logined = LoginSession::updateOrCreate(
        //     ['user_id' => $user->id], // Search condition
        //     [
        //         'location' => $city ?: null,
        //         'device' => $deviceData,
        //         'ip_address' => $clientIpAddress ?: null,
        //         'is_logout' => true,
        //         'time' => now(),
        //     ] 
        // );

        // // Store the ID in the session
        // if ($logined) {
        //     session(['logged_id' => $logined->id]);
        // }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
    
        $loginSessionId = session()->get('logged_id');

        if ($loginSessionId) {
            $loginSession = LoginSession::find($loginSessionId);
        
            if ($loginSession) {
                $loginSession->is_logout = false;
                $loginSession->logout_time = now();
                $loginSession->updated_at = now();
                $loginSession->save();
            } 
        }
        
        
        session()->forget('logged_id');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
