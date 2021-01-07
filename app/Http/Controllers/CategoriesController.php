<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //
    
    public function Categories(){
        $categories = DB::connection('mysql')
            ->select("SELECT *  from  categories  ");
        //dd($categories);
        return view('categories')
            ->with('categories', $categories);
    }

    public function create_category(Request $request)
    {
        $timestamp = time();

        $category_id=(string)$timestamp;
        $category_name = $request->get('category');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        //dd($imageName);

        $request->image->move(public_path('uploads'), $imageName);



        $values = array('categoryName' => $category_name, 'categoryId'=> $category_id, 'category_image'=>$imageName);
        //dd($values);
        DB::table('categories')->insert($values);
        return redirect('categories')
            ->with('success', 'Category has been successfully updated');
    }
}
