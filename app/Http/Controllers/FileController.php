<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // Máximo 2MB
        ]);

        $path = $request->file('file')->store('uploads');

        return back()->with('success', 'Archivo subido exitosamente: ' . basename($path));
    }

    public function downloadFile($filename)
    {
        $path = 'uploads/' . $filename;

        if (!Storage::exists($path)) {
            abort(404);
        }

        return Storage::download($path);
    }
}
