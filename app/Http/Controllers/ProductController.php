<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')->get();
        return View('product.index',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = DB::table('products');

        $product->name_pro = $request->input('name_pro');
        $product->kind_pro = $request->input('kind_pro');
        $product->qty_pro= $request->input('qty_pro');
        $product->price = $request->input('price');



        $affected = DB::table('products')->insert(
            [

                "name_pro" => $product->name_pro,
                "kind_pro" => $product->kind_pro,
                "qty_pro" => $product->qty_pro,
                "price" => $product->price,

            ]
        );
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $product =  DB::table('products')->where('product_id',$id)->first();
////        if(!$product){
////
////            $product->pro_name = "N/A";
////            $product->pro_qty = "N/A";
////            $product->price = "N/A";
////        }
//        return View('product.show',['product'=>$product]);
        $product = DB::table('products')->where('product_id',$id)->get();
        return View('product.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  DB::table('products')->where('id','=',$id)->first();
        return View('product.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
//        $product = DB::table('products')->find($id);

        $product->name_pro = $request->input('name_pro');
        $product->kind_pro = $request->input('kind_pro');
        $product->qty_pro = $request->input('qty_pro');
        $product->price = $request->input('price');


        if($request->file("avatar"))
        {
            $filename = $request->file('avatar')->getClientOriginalName();
            $filepath = $request->file('avatar')->storeAs('uploads',$filename, 'public');
            $product->avatar = '/storage/' . $filepath;

        }
        else
        {
            $product->avatar = $request->input("avatar");
        }


        $product->save();

        return redirect('/products');
//        $affected = DB::table('products')
//            ->where('id', $id)
//            ->update([
//                'name_pro' =>  $product->name_pro,
//                'kind_pro' =>  $product->kind_pro,
//
//                'price' =>  $product->price
//
//
//            ]);
//        return redirect('/products')->with('messages',"Cap nhanh cong");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  DB::table('products')->where('id','=',$id)->delete();
        if(!$product)
        {

        }
        return redirect()->route('products.index');
    }
}
