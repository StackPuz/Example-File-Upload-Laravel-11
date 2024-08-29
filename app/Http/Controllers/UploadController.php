<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class UploadController {

    public function submit()
    {
        $file = request()->file('image');
        $filename = $file->getClientOriginalName();
        $filePath = 'uploads/' . $file->getClientOriginalName();
        Storage::disk('public')->put($filePath, file_get_contents($file));
        return [ 'name' => request()->input('name'), 'image' => $filename ];
    }
}