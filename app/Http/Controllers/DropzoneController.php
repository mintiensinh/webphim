<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Validator;
use Redirect;

class DropzoneController extends Controller
{
    public function dropzone()
    {
        return view('admin.dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = date('Y-m-d')."_".$image->getClientOriginalName();
        $image->move(storage_path('app/images/min'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
