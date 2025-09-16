<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('user_interface.property.show', compact('property'));
    }
}
