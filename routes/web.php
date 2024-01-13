<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\Admin\RoleController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Admin\RoleSetupController;
use App\Http\Controllers\Backend\Admin\PermissionController;
use App\Http\Controllers\Backend\Customer\CustomerController;
use App\Http\Controllers\Backend\Admin\UserManagementController;
use App\Http\Controllers\Backend\Admin\ConnectController;


use App\Http\Controllers\Backend\Admin\EmailController;
use App\Http\Controllers\Backend\Admin\Service_TypeController;
use App\Http\Controllers\Backend\Admin\RestrictionController;
use App\Http\Controllers\Backend\Admin\AcademicController;
use App\Http\Controllers\Backend\Admin\Paper_TermController;
use App\Http\Controllers\Backend\Admin\Subtime_LimitController;
use App\Http\Controllers\Backend\Admin\PaperFormatController;
use App\Http\Controllers\Backend\Admin\LanguageController;
use App\Http\Controllers\Backend\Admin\SubjectController;


use App\Http\Controllers\Backend\Admin\FolderController;
use App\Http\Controllers\Backend\Admin\FileController;

use App\Http\Controllers\Backend\Admin\OrderManagement\PlaceOrderController;
use App\Http\Controllers\Backend\Admin\Subscription\AddSubscriptionController;

use App\Http\Controllers\Backend\Customer\OrderManagement\CustomerPlaceOrderController;
use App\Http\Controllers\Backend\Customer\Payment\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function (){

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');


    return redirect()->back();

});


Route::get('/', function () {

    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/custom_layout', function ()
{
    return view('custom_layout.master');
});

Route::get('/show/admin', function ()
{
    return view('backend.admin-dashboard');
});


Route::get('show/profile', function() {
    return view('backend.admin-profile');
});


Route::get('getDevice', [IndexController::class, 'getDevice']);
Route::get('getMoreDeatils', [IndexController::class, 'getMoreDeatils']);


Route::get('google/login', [ConnectController::class, 'googleLogin'])->name('google.login');
Route::get('auth/google/callback', [ConnectController::class, 'googleHandle']);
// Route::get('/microsoftLogin', [ConnectController::class, 'microsoftLogin']);
// Route::get('/auth/microsoft/callback', [ConnectController::class, 'microsoftHandle']);
Route::get('microsoft/login', [ConnectController::class, 'microsoftLogin'])->name('microsoft.login');
Route::get('auth/microsoft/callback', [ConnectController::class, 'microsoftHandle']);
Route::get('auth/microsoft/callback/ajax', [ConnectController::class, 'microsoftHandleajax']);

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('logout', [AdminController::class, 'destroy'])->name('logout');
    Route::get('show/profile', [AdminController::class, 'showProfile'])->name('show.profile');

    Route::post('update/user-information', [AdminController::class, 'updateUserInformation'])->name('update.user.information');
    Route::post('update/user/email', [AdminController::class, 'UpdateUserEmail'])->name('update.email');

    Route::post('update/user/password', [AdminController::class, 'UpdateUserPassword'])->name('update.password');
    Route::get('destory/session/{user_id}', [AdminController::class, 'destroySingleUserSession'])->name('destroy.single.session');
    
    
    
    Route::get('user/activity/log', [UserManagementController::class, 'userActivityLog'])->name('user.activity.log');


    Route::get('show/all/users', [UserManagementController::class, 'showAllUsers'])->name('show.all.users');
    Route::get('user/show/{id}', [UserManagementController::class, 'showUser'])->name('users.show');
    Route::post('user/{id}/roles', [UserManagementController::class, 'assignRole'])->name('users.roles');
    Route::get('/user/{user_id}/roles/{role_id}', [UserManagementController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/user/{user_id}/permissions', [UserManagementController::class, 'givePermission'])->name('users.permissions');
    Route::get('/user/{user_id}/permissions/{permission_id}', [UserManagementController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::get('user/{id}', [UserManagementController::class, 'destroyUser'])->name('users.destroy');

    Route::get('show/all/roles', [UserManagementController::class, 'showAllRoles'])->name('show.all.roles');
 




 
 


    Route::get('view/role/{role_id}', [UserManagementController::class, 'viewRole'])->name('view.role');

    Route::get('/edit/role/permission/{role_id}', [UserManagementController::class, 'EditRolePermission'])->name('edit.role.permission');
    Route::post('/update/role/permission', [UserManagementController::class, 'updateRolePermission'])->name('update.role.permission');
    // Permissions Route
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/permission/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::post('/permission/update', [PermissionController::class, 'update'])->name('permission.update');
    Route::get('/permission/delete/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
    // Roles Rouet
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::delete('/role/delete/{role_id}', [RoleController::class, 'destroy'])->name('role.destroy');
    
    // Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    // Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    // Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');

    
    Route::get('/folders/show', [FolderController::class, 'create'])->name('folder.show');
    Route::get('/folders', [FolderController::class, 'store'])->name('folders.store');
    Route::get('folders/{id}/download', [FolderController::class, 'downloadFolder'])->name('folders.download');
    Route::get('/folders/{id}', [FileController::class, 'view'])->name('folders.view');
    Route::post('/file', [FileController::class, 'upload'])->name('file.upload');
    Route::get('files/{id}/{folder_name}/download', [FileController::class, 'downloadfile'])->name('files.download');
    Route::get('files/{id}/{folder_name}/delete', [FileController::class, 'deletefile'])->name('files.delete');
    Route::get('/folders/create', [FolderController::class, 'create'])->name('folders.create');
    Route::get('files/{id}/{folder_name}/share', [FileController::class, 'sharefile'])->name('files.share');
    
    Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');
    Route::post('/email/store', [EmailController::class, 'store'])->name('email.store');
    Route::get('/email/add', [EmailController::class, 'create'])->name('email.create');
    Route::get('/email/edit/{id}', [EmailController::class, 'edit'])->name('email.edit');
    Route::put('/email/update/{id}', [EmailController::class, 'update'])->name('email.update');
    Route::get('/email/delete/{id}', [EmailController::class, 'destroy'])->name('email.destroy');

    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limit/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::get('/subtime_limit/add', [Subtime_LimitController::class, 'create'])->name('subtime_limits.create');
    Route::get('/subtime_limit/edit/{id}', [Subtime_LimitController::class, 'edit'])->name('subtime_limits.edit');
    Route::put('/subtime_limit/update/{id}', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limit/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done 
    Route::get('/paper_formats', [PaperFormatController::class, 'index'])->name('paper_formats.index');
    Route::post('/paper_format/store', [PaperFormatController::class, 'store'])->name('paper_format.store');
    Route::post('/paper_format/update', [PaperFormatController::class, 'update'])->name('paper_format.update');
    Route::get('/paper_format/delete/{id}', [PaperFormatController::class, 'destroy'])->name('paper_format.destroy');
    //Done
    Route::get('/academics', [AcademicController::class, 'index'])->name('academics.index');
    Route::post('/academics/store', [AcademicController::class, 'store'])->name('academics.store');
    Route::post('/academics/update', [AcademicController::class, 'update'])->name('academics.update');
    Route::get('/academics/delete/{id}', [AcademicController::class, 'destroy'])->name('academics.destroy');
    //Done
    Route::get('/services', [Service_TypeController::class, 'index'])->name('services.index');
    Route::post('/services/store', [Service_TypeController::class, 'store'])->name('services.store');
    Route::post('/services/update', [Service_TypeController::class, 'update'])->name('services.update');
    Route::get('/services/delete/{id}', [Service_TypeController::class, 'destroy'])->name('services.destroy');
    //Done
    Route::get('/restrictions', [RestrictionController::class, 'index'])->name('restrictions.index');
    Route::post('/restrictions/store', [RestrictionController::class, 'store'])->name('restrictions.store');
    Route::post('/restrictions/update', [RestrictionController::class, 'update'])->name('restrictions.update');
    Route::get('/restrictions/delete/{id}', [RestrictionController::class, 'destroy'])->name('restrictions.destroy');
    //done
    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limits/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::post('/subtime_limits/update', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limits/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done
    Route::get('/subtime_limits', [Subtime_LimitController::class, 'index'])->name('subtime_limits.index');
    Route::post('/subtime_limits/store', [Subtime_LimitController::class, 'store'])->name('subtime_limits.store');
    Route::post('/subtime_limits/update', [Subtime_LimitController::class, 'update'])->name('subtime_limits.update');
    Route::get('/subtime_limits/delete/{id}', [Subtime_LimitController::class, 'destroy'])->name('subtime_limits.destroy');
    //done
    Route::get('/paper_terms', [Paper_TermController::class, 'index'])->name('paper_terms.index');
    Route::post('/paper_terms/store', [Paper_TermController::class, 'store'])->name('paper_terms.store');
    Route::post('/paper_terms/update', [Paper_TermController::class, 'update'])->name('paper_terms.update');
    Route::get('/paper_terms/delete/{id}', [Paper_TermController::class, 'destroy'])->name('paper_terms.destroy');
    //done
    Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
    Route::post('/languages/store', [LanguageController::class, 'store'])->name('languages.store');
    Route::post('/languages/update', [LanguageController::class, 'update'])->name('languages.update');
    Route::get('/languages/delete/{id}', [LanguageController::class, 'destroy'])->name('languages.destroy');
    //done
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::post('/subjects/store', [SubjectController::class, 'store'])->name('subjects.store');
    Route::post('/subjects/update', [SubjectController::class, 'update'])->name('subjects.update');
    Route::get('/subjects/delete/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

    
    Route::get('placeOrder', [PlaceOrderController::class, 'index'])->name('placeOrder');
    Route::post('createPlaceOrder', [PlaceOrderController::class, 'create_order'])->name('createPlaceOrder');
    Route::get('deletePlaceOrder/{id}', [PlaceOrderController::class, 'delete_order'])->name('deletePlaceOrder');



    Route::get('subscription',[AddSubscriptionController::class,'index'])->name('subscription');
    Route::post('createSubscription',[AddSubscriptionController::class,'createSubscription'])->name('createSubscription');
    Route::get('deleteSubscription/{id}',[AddSubscriptionController::class,'deleteSubscription'])->name('deleteSubscription');




});



// User as Customer
Route::middleware(['auth', 'role:customer'])->prefix('customer')->name('customer.')->group(function () {
    Route::get('dashboard', [CustomerController::class, 'index'])->name('dashboard');
    Route::post('logout', [CustomerController::class, 'destroy'])->name('logout');

    Route::get('general', [IndexController::class, 'general'])->name('general');




    Route::get('/placeOrder',[CustomerPlaceOrderController::class,'index'])->name('customerPlaceOrder');
    Route::get('/changeDate/{id}',[CustomerPlaceOrderController::class,'changeDate'])->name('changeDate');
    Route::post('/createOrder/{id}',[CustomerPlaceOrderController::class,'create_order'])->name('create_order');
    Route::post('/payment/{id}',[PaymentController::class,'make_payment'])->name('customer_payment');
    
});


    

    // Role in permission routes;
    Route::get('/all/roles/permissions', [RoleSetupController::class, 'AllRolePermission'])->name('all.roles.permissions');
    Route::get('/add/role/permission', [RoleSetupController::class, 'AddRolePermission'])->name('add.role.permission');
    Route::post('/store/role/permission', [RoleSetupController::class, 'StoreRolePermission'])->name('store.role.permission');
    Route::get('/edit/role/permission/{id}', [RoleSetupController::class, 'EditRolePermission'])->name('edit.role.permission');
    Route::post('/update/role/permission/{id}', [RoleSetupController::class, 'UpdateRolePermission'])->name('update.role.permission');
    Route::get('/delete/role/permission/{id}', [RoleSetupController::class, 'DeleteRolePermission'])->name('delete.role.permission');