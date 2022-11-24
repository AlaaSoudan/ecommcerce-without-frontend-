<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('admin.products.index', compact('products'));

    }
   public function add()
    {
        $category=Category::all();
        return view('admin.products.add',compact('category'));

    }
      public function insert_products(Request $request)
    {
        $products=new Product();
              // if ($request ->hasfile('image'));
      // {
         //  $file = $request-> file('image');
           //$ext = $file->getClientOriginalExtension();
      //     $filename=time(). '.'.$ext;
           //$file->move('assest/uploads/products/',$filename);
        //   $category->image =$filename;
     //  }

      $products->name=$request->input('name');
      $products->cate_id=$request->input('cate_id');
     $products->small_description=$request->input('small_description');
     $products->description=$request->input('description');
     $products->original_price=$request->input('original_price');
     $products->selling_price=$request->input('selling_price');
     $products->image=$request->input('image');
     $products->qty=$request->input('qty');
     $products->tax=$request->input('tax');
     $products->status=$request->input('status')== True ? '1':'0';
     $products->trending=$request->input('trending')== True ? '1':'0';
     $products->meta_title=$request->input('meta_title');
     $products->meta_keywords=$request->input('meta_keywords');
     $products->meta_description=$request->input('meta_description');

       $products->save();
     return redirect('/Products')->with('status','product adedd successful');

    }
    public function edit($id)
{
   $products = Product::find($id);
   $category=Category::all();
   return view('admin.products.edit', compact('products','category'));
}

public function update(Request $request, $id)
{
   $products = Product::find($id);

   $products->name=$request->input('name');
      $products->cate_id=$request->input('cate_id');
     $products->small_description=$request->input('small_description');
     $products->description=$request->input('description');
     $products->original_price=$request->input('original_price');
     $products->selling_price=$request->input('selling_price');
     $products->image=$request->input('image');
     $products->qty=$request->input('qty');
     $products->tax=$request->input('tax');
     $products->status=$request->input('status')== True ? '1':'0';
     $products->trending=$request->input('trending')== True ? '1':'0';
     $products->meta_title=$request->input('meta_title');
     $products->meta_keywords=$request->input('meta_keywords');
     $products->meta_description=$request->input('meta_description');


   $products->update();
    return redirect('/Products')->with('status','products updated successful');

}
public function destroy($id)
{
   $products = Product::find($id);

   $products->delete();
   return redirect('Products')->with('status','products deleted successful');
}

}
