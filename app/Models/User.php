<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'account_id',
        'avatar'

    ];




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'authenticated_at' => 'datetime', 
    ];

    public static function getpermissionGroups(){
        $permission_group = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();
        return $permission_group;
    }//end method;

    


    public static function getpermissionByGroup($group_name){
        $permissions = DB::table('permissions')
                        ->select('id','name')
                        ->where('group_name', $group_name)
                        ->get();
        return $permissions;
    }//end method;

    public static function roleHasPermissions($role, $permissions){
        $hasPermission = true;
        foreach ($permissions as $permission) {
            if( !$role->hasPermissionTo($permission->name)){
                $hasPermission = false;
            }
            return $hasPermission;
        }//end loop;
    }//end method;

    

    
}
