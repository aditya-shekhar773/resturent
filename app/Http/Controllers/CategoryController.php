<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  

    public function categoryinsert(Request $req){
        if($req->isMethod('post')){
            $data = $req->validate([
                "category_name" => "required",
            ]);

            Category::create($data);
            return redirect()->route('admin.category.create');
        }

        $data['categories'] = Category::all();
        return view("admin.category", $data);
    }


    public function categorydelete(Request $req){

        $id = $req->id;

        $record = Category::findOrFail($id);
        $record->delete();

        return redirect()->back();
    }
}
