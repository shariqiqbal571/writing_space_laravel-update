<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Email;
use Illuminate\View\View;


class EmailController extends Controller
{ 
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.emails.create');
    }
  
    public function index()
    {
       
        $emails = Email::latest()->paginate(5);
     
        return view('backend.emails.index',compact('emails'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Email::create($input);
       
        return redirect('emails')
                        ->with('success','Email created successfully.');
                        
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Email $email): View
    {
        return view('backend.emails.show',compact('email'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Email $email): View
    {
        $email = Email::find($id);
      
        return view('backend.emails.edit',compact('email'));
    }
  
    

    public function update1(Request $request, Email $email)
   {
    $request->validate([
        'title' => 'required',
        'description' => 'required'
    ]);
//dd($request->all());
    $input = $request->all();

    
    $email->update($input);

    return redirect('emails')->with('success', 'Email updated successfully');
}


public function update(Request $request ,$id)
    {
        $request->validate([
            'title' => 'required',
        'description' => 'required' 
            
        ]);
  

        $email = Email::find($id);
        $email->title = $request->title;
        $email->description = $request->description;
        
        

     $email->save();


    return redirect('emails')->with('success', 'Email updated successfully');

        
    
                
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Email::find($id)->delete();

        return redirect('emails')
        ->with('success','Email created successfully.');
        
}

         
        
}
     



