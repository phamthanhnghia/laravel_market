<?php

namespace App\Http\Controllers;

use App\Type_products;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class TypeProductController extends Controller
{
    function __construct(Type_products $type_products){
      $this->type_products = $type_products;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('theme.create.type-products');
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
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            DB::table('type_products')->insert([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $fileName,
            ]);
            $path =  $request->image->storeAs('images',$fileName);
            return Redirect::back()->with('message','Operation Successful !');
        }
        return Redirect::back()->with('message','Dont have file images S!');
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
