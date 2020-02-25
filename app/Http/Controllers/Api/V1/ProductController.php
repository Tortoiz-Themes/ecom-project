<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status'    => 200,
            'message'   => 'All Products',
            'data'      => Product::with('category','brand')->latest()->get()
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id'   => 'required|numeric',
            'brand_id'      => 'required|numeric',
            'title'         => 'required|string|unique:products',
            'description'   => 'required|string',
            'unit'          => 'required|string',
            'price'         => 'required|numeric',
            'sales_price'   => 'numeric',
            'photos'        => 'required',
            'photos.*'      => 'mimes:jpeg,jpg,png',
            'meta_name.*'   =>  'string',
            'meta_value.*'   =>  'string',
        ]);

        if( $validator->fails() )
        {
            return response()->json([
                'status'    => 'error',
                'message'   => 'Validation Failed!',
                'data' => $validator->errors()
            ], 401);
        }
        $request->request->add(['slug'=> Str::slug($request->title)]);
        // create new product
        $product = Product::create($request->all());
        // add image to media library
        foreach ( $request->file('photos') as $file )
        {
            $product->addMedia($file)->toMediaCollection('product');
        }
        // add meta data for product
        for( $i = 0; $i < count($request->get('meta_name')); $i++ )
        {
            $product->metas()->create([
                'attr_name' => $request->get('meta_name')[$i],
                'attr_value' => $request->get('meta_value')[$i],
            ]);
        }

        $data['product'] = $product;
        $data['photos'] = $product->getMedia('product');
        $data['metas'] = $product->metas;
        return response()->json([
            'status'    => 201,
            'message'   => "Product Added",
            'data'      => $data
        ], 201);
    }

    /*********
     * Retrived only trashed product
     */
    public function trashed()
    {
        $products = Product::onlyTrashed()->with('category','brand')->latest()->get();
        return response()->json([
            'status'    => 200,
            'message'   => 'All Trashed Products',
            'data'      =>$products
        ], 200);
    }

    /*********
     * Retrived photos of product
     */
    public function photos($id)
    {
        $product = Product::withTrashed()->where('slug', $id)->first();
        $photos = [];
        for($i=0; $i < $product->getMedia('product')->count(); $i++)
        {
            array_push($photos, $product->getMedia('product')[$i]->getFullUrl());
        }
        return response()->json([
            'status'    => 200,
            'message'   => 'All Trashed Products',
            'data'      => $photos
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('metas')->where('slug',$id)->first();
        $data['product'] = $product;
        $data['media'] = [];
        for($i=0; $i < $product->getMedia('product')->count(); $i++)
        {
            array_push($data['media'], $product->getMedia('product')[$i]->getFullUrl());
        }
        return response()->json([
            'status'    => 200,
            'message'   => "Single Product!",
            'data'      => $data
        ], 200);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('slug',$id)->first();
        $product->delete();
        return response()->json([
            'status'    => 200,
            'message'   => "Product Deleted",
            'data'      => Product::with('category','brand')->latest()->get()
        ], 200);
    }
}
