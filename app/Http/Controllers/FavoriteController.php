<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->like($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unlike($id);
        return redirect()->back();
    }   
}
