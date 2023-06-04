<?php
namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Models\Modules\Inventory\Entity\Category;

class CategoryController extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
        
    }
    public function AddPost()
{
    $name= request("name");
    $code= request("code");

    $category=new Category();
    $category->name =$name;
    $category->code =$code;
    $category->save();
    return redirect("/inventory/category");
}
public function index()
{
    $data =Category::all();
    return view("inventory.category.index",[
        'categoryList' => $data
    ]);
}
public function Edit()
{
    $id=request("category");
$data=Category::find($id);
return view("inventory.category.edit",[
    'category'=> $data
]);
}
public function EditPost()
{
    $id= request('id');
    $name= request("name");
    $code= request("code");

    $category=Category::find ($id);
    $category->name =$name;
    $category->code =$code;
    $category->save();
    return redirect('/inventory/category');
}public function Delete()
{
    $id=request('category');
    $category=Category::find($id);
    $category->delete();
    Alert::SetsuccessMessage("<Hello, <your> <doucument> <has> <been> <deleted>");
    //Session
        //HTML
    return redirect('/inventory/category');
}

}
