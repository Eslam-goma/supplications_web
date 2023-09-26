<?php
namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController extends Controller
{
    public function supplications($category_id)
    {
        // Find the category by ID
        $categories = Categories::findOrFail($category_id);

        // Retrieve all supplications for this category
        $supplications = $categories->supplications;

        return view('supplications', compact('supplications', 'category'));
    }
}


