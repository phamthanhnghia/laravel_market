<?php

namespace App\Http\Controllers;

use App\Type_products;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('theme.create.type-products');
        // $data = DB::table('type_products')->paginate('5');
        // return view('admin.type-products-admin')->with('type',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::table('type_products')->insert([
        //     'name' => $request->name,
        //     'email' => str_random(50),
        //     'password' => bcrypt('secret'),
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->hasFile('photo')) {
        //     $image      = $request->file('photo');
        //     $fileName   = time() . '.' . $image->getClientOriginalExtension();
        //
        //     $img = Image::make($image->getRealPath());
        //     $img->resize(120, 120, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        //
        //     //$img->stream(); // <-- Key point
        //
        //     //dd();
        //     Storage::disk('local')->put('images/1/smalls'.'/'.$fileName, $img, 'public');
        //     //Storage::disk('local')->put($fileName,$img);
        //
        // }

        DB::table('type_products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $fileName,
        ]);
        return Redirect::back()->with('message','Operation Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type_products  $type_products
     * @return \Illuminate\Http\Response
     */
    public function show(Type_products $type_products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type_products  $type_products
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_products $type_products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type_products  $type_products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_products $type_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type_products  $type_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_products $type_products)
    {
        //
    }
}
