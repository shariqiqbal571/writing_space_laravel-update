<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\LoginSession;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Jenssegers\Agent\Facades\Agent;//device name
use Spatie\Permission\Models\Permission;
use Stevebauman\Location\Facades\Location;

class IndexController extends Controller
{
    public function general()
    {
     
        if(!auth()->user()->hasPermissionTo('aa_likha_karo')){
            return abort(401);
        }
        return 'Good work!';
    }
    
    public function getMoreDeatils(Request $request)
    {
       
        //store user logged in
        $user = User::findOrFail(Auth()->id());
        $user->authenticated_at = Carbon::now();
        $user->save();

        // Get and store real client IP address
        $clientIpAddress = $request->ip();

       
        // Get and store location address
        $location = Location::get($request->ip());

        if ($location) {
            $city = $location->cityName;
           
        } else {
            $city = false; 
        }

        //get&store device address
        $device = Agent::device();
        $browser = Agent::browser();
        $platform = Agent::platform();
        // Get client's user agent
        $device = Agent::device();
        $browser = Agent::browser();
        $platform = Agent::platform();

        if($device)
        {
           $deviceData =  Agent::device();
        }elseif($browser && $platform)
        {
            $deviceData = $platform.' '.$browser;

        }elseif($platform){
            $deviceData = $platform.' '.$browser;
        }
                 
      
        // $deviceData = $device ?? ($browser ?? ($platform ? $platform . ' ' . $browser : null));
        // dd($deviceData);
        // Find the LoginSession record based on the user_id
        $logined = LoginSession::updateOrCreate(
            ['user_id' => $user->id], // Search condition
            [
                'location' => $city ?: null,
                'device' => $deviceData,
                'ip_address' => $clientIpAddress ?: null,
                'is_logout' => true,
                'time' => now(),
            ] 
        );

        // Store the ID in the session
        if ($logined) {
            session(['logged_id' => $logined->id]);
        }
        
      

    }

    public function getDevice(Request $request)
    {   
        $ip ='127.0.0.1';
        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            echo $position->countryName;
            echo $position->cityName;
        }
       
    }

    public function index()
    {
        return view('home.index');
    }

    public function givePermissionRole(Request $request){
        $roleId = $request->input('role_id');
        $permissionId = $request->input('permission_id');
    
        // Retrieve the role and permission instances
        $role = Role::find($roleId);
        $permission = Permission::find($permissionId);
    
        if ($role && $permission) {
            // Assign permission to the role
            $role->syncPermissions([$permission]);
    
            return back()->with('success', 'Permission assigned successfully');
        } else {
            return back()->with('error', 'Failed to assign permission');
        }
    }
    
}
