<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $req){
        $data["products"] = Product::all();
        return view('admin.product',$data);
    }

    public function insert(Request $req){
        $data['cate'] = Category::all();
        return view('admin.productinsert',$data);
    }

    public function productInsert(Request $req){
        if ($req->isMethod('post')) {
            $data = $req->validate([
                "product_name" => "required",
                "category_id" => "required",
                "price" => "required",
                "discount_price" => "required",
                "description" => "required",
                "image" => "required",
            ]);

            $filename = $req->file('image')->getClientOriginalName();
            $path = $req->file('image')->storeAs("public",$filename);

            $data['image'] = $filename;

            Product::Create($data);
            return redirect()->route('admin.product')->with("success","Product Insert Successfully");

        }

        return view("admin.productinsert");
    }

    public function productdelete(Request $req){
        $id = $req->id;
        $prod = Product::findOrFail($id);
        $prod->delete();

        return redirect()->back();
    }

}
