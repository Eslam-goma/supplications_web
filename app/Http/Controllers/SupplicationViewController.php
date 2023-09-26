<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplication;
use App\Models\SupplicationView;

class SupplicationViewController extends Controller
{
    public function userCounts()
    {
        $supplicationViews = SupplicationView::all();

        return view('user_counts', compact('supplicationViews'));
    }
}

