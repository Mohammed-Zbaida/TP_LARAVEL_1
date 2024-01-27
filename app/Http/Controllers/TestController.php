<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Form(){
        return view("Test1");
    }
    public function Download(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        return view('success', ['path' => $path]);
    }
    public function downloads()
    {
        return response()->download(storage_path('app/public/images/messi.png'));
    }

    
 
}
