<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {       
        $papers= Language::latest()->paginate(5);
     
        return view('backend.admin.LanguageSpelling.language',compact('papers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
    
        try {
            // Create a new record
            Language::create($validatedData);
    
            // Return a success response
            return response()->json(['success' => 'Paper format created successfully']);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong during creation
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }
  

  

    

    


    public function update(Request $request)
    
    {
            
            $validatedData = $request->validate([
                'title' => 'required',
            ]);
        
            try {
                // Create a new record
                $paperFormat = Language::findOrFail($request->title_id);
                $paperFormat->update($validatedData);
        
                // Return a success response
                return response()->json(['success' => 'Paper format Update successfully']);
            } catch (\Exception $e) {
                // Return an error response if something goes wrong during creation
                return response()->json(['error' => 'Oops! Something went wrong'], 500);
            }

                
    }





  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paperFormat = Language::find($id);
    
        if (!$paperFormat) {
            // Paper format not found
            return response()->json(['error' => 'Paper format not found'], 404);
        }
    
        $paperFormat->delete();
    
        return response()->json(['success' => 'Paper format deleted successfully'], 200);
    }

}
