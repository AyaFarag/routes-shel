<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate();
        return view('Admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::areChildren() -> pluck("name", "id") -> all();
        return view('Admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = $request->all();
        $product['images'] = ltrim($request->file('images')->store('public/uploads'), 'public/');
        Product::create($product);
        return back()->with('success','Saved');

        //////////////////////////////////////////////////////////////////////////////////////////
        // $product = $request->all();
        // $images=array();
        // if($request->hasFile('images')){
        //        $images = $request->file('images');
        //         $name = time() . '.' . $images->getClientOriginalExtension();
        //         $location = $images->move(public_path('uploads'), $imgname);
        //         $images[] = $name;
        //         $product->images = $name;
        //     }
        //     // dd($input);
        //     $product->save();
        // return back()->with('success','Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $input=$request->all();
        $images=array();
        if($images = $request->file('image')){
            foreach($images as $image){
                $name = time() . '.' . $image->getClientOriginalExtension();
                $location = $image->move(public_path('uploads'), $imgname);
                $images[] = $name;
                $input->images = $name;
                $input->save();
            }
        }
        return back()->with('success','Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success' , 'Deleted');
    }
}
