<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class BrandController extends Controller
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
            'message'   => 'All Brands',
            'data'      => Brand::latest()->get()
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
            'name'      => 'required|min:3|max:50|string|unique:brands',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => 'error',
                'message'    => 'Validation Failed!',
                'data' => $validator->errors()
            ], 401);
        }
        $data['name'] = $request->get('name');
        $data['slug'] = Str::slug( $request->get('name') );
        $brand = Brand::create($data);

        return response()->json([
            'status'    => 201,
            'message'   => 'Brand Created!',
            'data'      => $brand
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::where('slug', $id)->first();

        return response()->json([
            'status'    => 200,
            'message'   => 'Single Brand!',
            'data'      => $brand
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
        $validator = Validator::make($request->all(), [
            'name'      => 'required|min:3|max:50|string|unique:brands',
        ]);

        if( $validator->fails() )
        {
            return response()->json([
                'status'    => 'error',
                'message'    => 'Validation Failed!',
                'data' => $validator->errors()
            ], 401);
        }
        else
        {
            $brand = Brand::where('slug', $id)->first();
            if( $brand != null )
            {
                $brand->update([
                    'name' => $request->get('name')
                ]);
                return response()->json([
                    'status'    => 201,
                    'message'   => 'Brand Updated!',
                    'data'      => $brand
                ], 201);
            }
            else
            {
                return response()->json([
                    'status'    => 204,
                    'message'   => 'No Brand Found!',
                    'data'      => null
                ], 204);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::where('slug', $id)->delete();
        return response()->json([
            'status'    => 200,
            'message'   => 'All Brnds',
            'data'      => Brand::latest()->get()
        ], 200);
    }
}
