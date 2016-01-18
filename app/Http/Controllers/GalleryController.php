<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function viewGalleryList(Request $request) {
        return view('gallery');
    }

    public function saveGallery() {

    }

    public function viewGalleryPics() {

    }

    public function doImageUpload() {

    }
}
