<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class CategoryController extends Controller
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
            'message'   => 'All Categories',
            'data'      => Category::latest()->get()
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
            'name'      => 'required|min:3|max:50|string|unique:categories',
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
        $category = Category::create($data);

        return response()->json([
            'status'    => 201,
            'message'   => 'Category Created!',
            'data'      => $category
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
        $category = Category::where('slug', $id)->first();

        return response()->json([
            'status'    => 200,
            'message'   => 'Single Category!',
            'data'      => $category
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
            'name'      => 'required|min:3|max:50|string|unique:categories',
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
            $category = Category::where('slug', $id)->first();
            if( $category != null )
            {
                $category->update([
                    'name' => $request->get('name')
                ]);
                return response()->json([
                    'status'    => 201,
                    'message'   => 'Category Updated!',
                    'data'      => $category
                ], 201);
            }
            else
            {
                return response()->json([
                    'status'    => 204,
                    'message'   => 'No Category Found!',
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
        $category = Category::where('slug', $id)->delete();
        return response()->json([
            'status'    => 200,
            'message'   => 'All Categories',
            'data'      => Category::latest()->get()
        ], 200);
    }
}
