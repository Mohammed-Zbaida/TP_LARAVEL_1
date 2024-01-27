<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController1 extends Controller
{
    public function showForm()
    {
        return view('file_form');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        return view('file_success', ['path' => $path]);
    }

    public function downloadFile($filename)
    {
        $path = storage_path('app/public/uploads/' . $filename);

        return response()->download($path);
    }
}
