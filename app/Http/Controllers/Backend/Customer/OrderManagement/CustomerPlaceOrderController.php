<?php

namespace App\Http\Controllers\Backend\Customer\OrderManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Pricing;


class CustomerPlaceOrderController extends Controller
{
    
    public function index(){
        $pricing = Pricing::orderBy('id', 'desc')->get();
      
        
        return view('backend.customer.orderManagement.place_order',compact('pricing'));
    }



    public function changeDate($id){
        $pricing = Pricing::find($id);
        if ($pricing) {
         
            return response()->json(['success' => true, 'message' => $pricing]);
        } else {
            return response()->json(['success' => false, 'message' => 'Pricing not found'], 404);
        }
    }


    public function create_order(Request $request , $id){

        $input=$request->dataObject;
      
$count=count($input['additional_info']);
$total=(float)$count*(float)$input['cost_per_page'];

        $check_analysis=$input['statistical_analysis'];
        

        if($check_analysis == '0'){
            $statistical_analysis=false;
        }else{
            $statistical_analysis=true;
        }
        $order_id=rand(000000000,999999999);
        if($input['coupon'] == '' || $input['coupon']== null){
            $discount='0';
        }else{
            $discount='10';
        }
        $order=Orders::create([
'subject'=>$input['subject'],
'description'=>$input['description'],
'topic'=>$input['topic'],
'cost_per_page'=>$input['cost_per_page'],
'submitting'=>$input['submitting'],
'deadline'=>$input['due_date'],
'no_of_extra_sources'=>$input['no_of_extra_sources'],
'powerpoint_slide'=>null,
'spacing'=>null,
'number_of_pages'=>$input['no_of_pages'],
'type_of_paper'=>$input['term_of_paper'],
'paper_format'=>$input['paper_format'],
'academic_level'=>$input['academic_level'],
'language_spelling'=>$input['language_spelling'],
'order_type'=>'Custom',
'discount'=>$discount,
'order_show'=>'Enable',
'order_status'=>'Pending',
'additional_info'=>json_encode($input['additional_info']),
'coupon'=>$input['coupon'],
'user_id'=>$id,
'payment_status'=>'Paid',
'order_id'=>$order_id,
'total_cost'=>$input['total_cost'],
'cost'=>$input['sub_total'],
'additional_cost'=>$total,
'statistical_analysis'=>$statistical_analysis,
'email'=>$input['email'],
'backup_email'=>$input['backup_email']
        ]);

        return response()->json(['success' => true, 'message' => $order]);
    }
}
