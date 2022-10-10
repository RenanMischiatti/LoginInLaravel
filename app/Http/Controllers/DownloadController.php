<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
   public function download($arquivo) {
        return Storage::download($arquivo);
   }
}
