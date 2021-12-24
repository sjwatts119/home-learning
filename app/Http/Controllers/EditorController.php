<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texts;

class EditorController extends Controller
{
    public function SaveText(Request $request){
        return back()->with('success', 'Test Success on Submit');
        
    }
}
