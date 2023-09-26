<?php
namespace App\Http\Controllers;
use App\Models\Supplication;

class SupplicationController extends Controller
{
    public function index()
    {
        $supplications = Supplication::all();

        return view('supplications', compact('supplications'));
    }
    public function count($supplication_id)
    {
        // Find the supplication by ID
        $supplication = Supplication::find($supplication_id);

        // Increment the count
        $supplication->increment('count');

        return redirect()->back();
    }
}


