<?php

namespace App\Http\Controllers\Backend\Admin\OrderManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Folder;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\files;
use App\Models\File;
use ZipArchive;

class PlaceOrderController extends Controller
{
    public function index(){
        $order=Orders::all();
        return view('backend.admin.orderManagement.place_order',compact('order'));
    }

    public function create_order(Request $request){
        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'mce_0' => 'required',
            'academic_level' => 'required',
            'type_of_paper'=>'required',
            'paper_format'=>'required',
            'language_spelling'=>'required',
            'number_of_pages'=>'required',
            'spacing'=>'required',
            'powerpoint_slide'=>'required',
            'no_of_extra_sources'=>'required',
            'deadline'=>'required',
            'statistical_analysis'=>'required',
        ]);
         
        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();;
        }
        $input=$request->all();
$input['description']=$input['mce_0'];
$input['order_id']=rand(000000000,999999999);
        $input['user_id']=Auth::user()->id;
        $input['cost']=500;
        if($input['no_of_extra_sources'] > $input['number_of_pages']){
            $input['additional_cost']=$input['no_of_extra_sources'] - $input['number_of_pages'];
        }else{
            $input['additional_cost']=0;
        }
        if($input['statistical_analysis'] == 'yes'){
$total_addition=$input['cost']+$input['additional_cost'];
$percentage=$total_addition * 15/100;
$input['additional_cost']=$input['additional_cost']+$percentage;
$input['statistical_analysis']=true;
        }else{
            $input['statistical_analysis']=false;
        }
        $input['total_cost']=$input['cost']+$input['additional_cost'];

        $input['order_type']='Product';
        $input['order_show']='Enable';
        $input['order_status']='Pending';

        $order=Orders::create($input);

        $randomNumber = $input['order_id'];

        // Validation can be added here based on your requirements

        $path = "public/uploads_folders/" . $randomNumber;


            Storage::makeDirectory($path);
            $folder = new Folder();
            $folder->name = $randomNumber;
            $folder->description = $randomNumber;
            $folder->save();
   
       

        return $this->index();

    }


    public function delete_order($id){
        $order=Orders::find($id);
        if ($order) {
            $order->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Order not found'], 404);
        }

    }
}
