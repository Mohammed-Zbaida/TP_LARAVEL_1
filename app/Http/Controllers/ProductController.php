<?php

namespace App\Http\Controllers;

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
        $product=[
            ["Libelle"=>"iphone 12" ,"Marque"=>"apple" ,"Prix"=>12200 , "Stock"=>100 , "Image"=>"file1.png"],
            ["Libelle"=>"tv smart" ,"Marque"=>"LG" ,"Prix"=>5000 , "Stock"=>200 , "Image"=>"file2.png"],
            ["Libelle"=>"pc" ,"Marque"=>"dell" ,"Prix"=>8000 , "Stock"=>100 , "Image"=>"file3.png"],
        ];
        return view('pages.Home',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.Form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required|string',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|min:1|max:9999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        $newProduct = [
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
            'image' => $imagePath, 
        ];
        $product[] = $newProduct;
        return redirect()->route('products.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("pages.Show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.Edit');
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
        //
    }
}
