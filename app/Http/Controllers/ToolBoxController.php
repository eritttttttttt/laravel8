<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToolBoxController extends Controller
{
    public function imageUpload(Request $request)
    {
        $path = Storage::put('/', $request->img);
        return Storage::url($path);
        
    }
}
