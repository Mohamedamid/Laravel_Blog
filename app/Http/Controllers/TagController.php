<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController {
    public function index() {
        return response()->json(Tag::all());
    }
}