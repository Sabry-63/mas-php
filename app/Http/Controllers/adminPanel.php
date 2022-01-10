<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\image;
use App\Models\product;
use Illuminate\Http\Request;

class adminPanel extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

 public function Category()
 {
    $categories = category::all();

      return view('admin-catigory',['categories'=>$categories]);
 }


 public function CategoryEdit( category $category)
 {
     return view('admin-catigory-edit',['category'=>$category]);
 }

 public function CategoryEditPost( category $category, Request $request )
 {


     $fia =$request->image->getclientoriginalname();
     $pa=$request->image->move('image',$fia);
     $category->update(

         [
             'catName'=>$request->catName,
             'image'=>'image/'.$fia
         ]
     );
     return redirect(route('admin.category'));
  }

 public function CategoryDelete(category $category)
 {

  $category->products->delete();
   $category->delete();
   return redirect(route('admin.category'));
 }

 public function catStore( Request $request)
 {
      $fia =$request->image->getclientoriginalname();
       $pa=$request->image->move('image',$fia);

      category::create([
       'catName'=>$request->catName,
       'image'=>$pa
   ]);

   return redirect(route('admin.category'));
 }






















 public function productIndex()
 {
    $products=product::with('category')-> get();
    $categories = category::with('products')->get();


   return view('admin-product',['products'=>$products,'categories'=>$categories]);
 }


  public function productStore(Request $request)
  {

     $product= product::create([
          'ProductName'=>$request->ProductName,
          'ProductDescription'=>$request->ProductDescription,
          'price'=>$request->price,
          'category_id'=>$request->categoryid,
      ]);



      if ( $request->has('image1') ) {
         $fia =$request->image1->getClientOriginalName();
         $pa=$request->image1->move('image',$fia);
         image::create([
             'imageName'=>$pa,
             'product_id'=> $product->id,
         ]);}

       if ( $request->has('image2') ) {
        $fia2 =$request->image2->getClientOriginalName();
        $pa2=$request->image2->move('image',$fia2);
        image::create([
            'imageName'=>$pa2,
            'product_id'=> $product->id,
        ]);
       }

       if ( $request->has('image3') ) {
         $fia3 =$request->image3->getClientOriginalName();
         $pa3=$request->image3->move('image',$fia3);
         image::create([
             'imageName'=>$pa3,
             'product_id'=> $product->id,
         ]);}

  if ( $request->has('image4') ) {
         $fia4 =$request->image4->getClientOriginalName();
         $pa4=$request->image4->move('image',$fia4);
         image::create([
             'imageName'=>$pa4,
             'product_id'=> $product->id,
         ]);}

      return redirect(route('admin.product.index'));

  }

  public function productEdit(product $product )
  {
    $categories = category::with('products')->get();

      return view('admin-product-edit',['product'=>$product,'categories'=>$categories]);
  }

  public function productUpdate(product $product , Request $request)
  {

     $product->update([
      'ProductName'=>$request->ProductName,
      'ProductDescription'=>$request->ProductDescription,
      'price'=>$request->price,
      'category_id'=>$request->categoryid,

     ]);

     return redirect(route('admin.product.index'));
  }

  public function productDelete(product $product)
  {
      foreach ($product->images as $image) {
      $image->delete();
      }
      $product->delete();
      return redirect(route('admin.product.index'));
  }






  public function adminLoginGet()
  {
      return view('login');
  }

  public function adminLoginPost(Request $request)
  {
    if ($request->name == 'admin' && $request->password =='password') {
         return redirect(route('admin.category'));
    }else{
        return redirect(route('admin.login'));
    }

  }
}
