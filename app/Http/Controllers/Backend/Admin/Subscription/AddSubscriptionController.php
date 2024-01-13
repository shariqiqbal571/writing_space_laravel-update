<?php

namespace App\Http\Controllers\Backend\Admin\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;

class AddSubscriptionController extends Controller
{
    public function index(){

        $subscription = Subscription::all();
return view('backend.admin.subscription.add_subscription',compact('subscription'));
    }


    public function createSubscription(Request $request){
        $validator = Validator::make($request->all(), [
            "subscription_name" => "required",
            "service_type" => "required",
            "cost_per_page" => "required",
            "set_time" => "required",
            "min_page" => "required",
            "max_page" => "required",
            "total_subscription" => "required",
            "restrictions"=>"required",
            "rollover_limit" => "required",
            "inform_customer_expiry_date" => "required",
            "inform_customer_email" => "required",
            "more_restrictions" => "required",
          
        ]);
         
        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();;
        }
        $input=$request->all();
        $input['restrictions']=json_encode($input['restrictions']);
        $subscription=Subscription::create($input);
        return $this->index();
    }

    public function deleteSubscription($id){
        
        $order=Subscription::find($id);
        if ($order) {
            $order->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Order not found'], 404);
        }
    }
}
