<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Folder;
use DB;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class FileController extends Controller
{




    public function sharefile($id, $folder_name)
    {
       
        $files = File::find($id);
        $folder_name = $folder_name;

        return view('backend.admin.File.file_view_print',compact('files','folder_name'));
    }
    public function downloadFolder($id)
    {
        $folder = Folder::find($id);

        if (!$folder) {
            abort(404);
        }

        $zipFileName = $folder->name . '.zip';
        $zipFilePath = storage_path('app/public/uploads_folders/' . $zipFileName);

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE) !== true) {
         
            abort(500, 'Could not create or open ZipArchive.');
        }

        // Add all files from the folder to the zip
        $files = Storage::files('public/uploads_folders/' . $folder->name);

        if ($files) {
            // Add all files from the folder to the zip
            foreach ($files as $file) {
                $zip->addFile(storage_path('app/' . $file), basename($file));
            }
    
            // Close the zip file
            $zip->close();
    
            // Download the zip file
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            // Handle the case where the folder is empty
           return "Empty Folder.";
        }

     
    }
    

    public function downloadfile($id, $folder_name)
    {
        $files = File::find($id);
    
        if (!$files) {
            abort(404);
        }
  
        $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$files->file_name);

        return response()->download($filePath);
       
    }
    public function deletefile($id, $folder_name)
    {
        $files = File::find($id);
    
        if (!$files) {
            abort(404);
        }
    
        $filePath = 'public/uploads_folders/'.$folder_name.'/'.$files->file_name;
    
        // Delete the file from storage
        Storage::delete($filePath);
    
        // Optionally, you can also delete the record from the database
        $files->delete();
    
        return response()->json(['message' => 'File deleted successfully']);
    }


    public function view($id)
    {
       
        // Fetch the folder with the given ID
        $folder = Folder::find($id);

             $files = DB::table('folders')
        ->join('files', 'folders.id', '=', 'files.folder_id')
        ->select('files.*')
        ->latest('files.created_at')
        ->where('folders.id', $folder->id)
        ->paginate(10);


        $filesCount = $files->total(); // Use $files->total() instead of $files::count()
       

        $totalSize = 0;

        // Loop through each file to calculate total size
        foreach ($files as $file) {
            $totalSize += $file->total_size; // Assuming 'size' is the column representing the file size
        }


        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    
        for ($i = 0; $totalSize >= 1024 && $i < count($units) - 1; $i++) {
            $totalSize /= 1024;
        }
    
        $formattedSize = round($totalSize, 0) . ' ' . $units[$i];


     




        if (!$folder) {
            // Handle case where folder with given ID is not found
            return abort(404);
        }

        // Assuming you have a Blade view named 'view.blade.php' in the 'folders' directory
        return view('backend.admin.File.file_show', compact('folder','files','filesCount','formattedSize'));
    }


   
    public function upload(Request $request)
    {

 
       

   
     
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
     
        $file = $request->file('file');



        $size = $file->getSize();
        $sizetotal = $file->getSize();

        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    
        for ($i = 0; $size >= 1024 && $i < count($units) - 1; $i++) {
            $size /= 1024;
        }
    
        $formattedSize = round($size, 0) . ' ' . $units[$i];
       



        $originalName = $file->getClientOriginalName();

        
        
      
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('public/uploads_folders/'.$request->folder_name, $fileName);
      
        $fileModel = new File();
        $fileModel->file_name = $fileName;
        $fileModel->title = $originalName;
        $fileModel->Writer = $request->Writer;
        $fileModel->file_path = $filePath;
        $fileModel->folder_id = $request->folder_id;
        $fileModel->Size = $formattedSize;
        $fileModel->total_size = $sizetotal;
        $fileModel->file_type = $file->getClientOriginalExtension();
        $fileModel->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
