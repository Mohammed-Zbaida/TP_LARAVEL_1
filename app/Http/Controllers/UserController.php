<?php
//UserController

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function show(){

        return view('insert');
}
public function insert(Request $request)
{
    if($request->hasFile('file')){
        $file = $request->file('file');
        $path = $file->store('folders', 'public');
        return redirect()->back()->with('message', 'File uploaded successfully!');
    }
}
public function download()
{
    return Storage::disk('public')->download('uploads/usa.pdf');
}
}
