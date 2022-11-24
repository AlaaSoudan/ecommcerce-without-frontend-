<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
         $category = Category::all();
         return view('admin.category.index'  ,compact('category'));

    }
  public function add()
    {
        return view('admin\category\add');
    }
    public function insert_category(Request $request)
    {
        $category= new Category();
        if($request->hasFile('image'))
        {
            $file= $request->file('image');
   //  $ext=$file->getClientOriginalExtension();
    // $filename=time(). '.' .$ext;
            $filename=time(). '.png';
          //  $file->save('assets\uploads\category'.$filename);
            $category->image=$filename;

        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')== True ? '1':'0';
        $category->popular=$request->input('popular')== True ? '1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_descrip=$request->input('meta_descrip');
        $category->save();
        return redirect('/dashboard')->with('status','category adedd successful');

    }
     public function edit($id)
    {
        $category = Category::find($id);
        return view('admin\category\edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
           // $file= $request->file('image');
            //$ext=$file->getClientOriginalExtension();
            $filename=time(). '.png';
            //$file->save('assets\uploads\category'.$filename);
            $category->image=$filename;

        }

        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')== True ? '1':'0';
        $category->popular=$request->input('popular')== True ? '1':'0';
        $category->image=$request->input('image');
        $category->update();
         return redirect('/Categories')->with('status','category updated successful');

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('Categories')->with('status','category deleted successful');
    }

}
