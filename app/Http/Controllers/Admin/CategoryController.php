<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function View(){
        $category=Category::all();
        return view('admin.page.category.view_category',compact('category'));
    }

    public function addCategory(){
        return view('admin.page.category.add_category');
    }

    public function storeCategory(Request $request){

        $validated = $request->validate([
            'category_name'=> 'required|unique:categories'
        ]);

        $data=new Category();
        $data->category_name=$request->category_name;
        $data->save();

        $notification = array(
            'message' => 'Successfully Category Insert',
            'alert-type' => 'success'
        );
        return redirect()->route('view.category')->with($notification);

    }

    public function editCategory($id){
        $category=Category::find($id);
        return view('admin.page.category.edit_category',compact('category'));
    }

    public function updateCategory(Request $request,$id){

        $data=Category::find($id);
        $data->category_name=$request->category_name;
        $data->save();

        $notification = array(
            'message' => 'Successfully Category Update',
            'alert-type' => 'success'
        );
        return redirect()->route('view.category')->with($notification);

    }

    public function deleteCategory($id){
        $data=Category::find($id);
        $data->delete();


        return redirect()->back();
    }


}
