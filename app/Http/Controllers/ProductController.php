<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertFormRequest;
// use Illuminate\Support\Facades\Storage;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductInsertFormRequest $request)
    {
        $files = $request->file("file");
        $fileAry = array();
        foreach ($files as $file) {
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            array_push($fileAry, $filename);
            $file->move(public_path("/uploads/"), $filename);     
        }
        Product::create([
            "title"=>$request->get("title"),
            "price"=>$request->get("price"),
            "description"=>$request->get("description"),
            "imgs"=> serialize($fileAry)
        ]);
        return redirect('products/create')->with('status', 'Successfully Inserted');

        // $file = $request->file("file");
        // // Storage::put('uploads/'. $file->getClientOriginalName(), file_get_contents($file)); # using storage
        // $filename = uniqid() ."_". $file->getClientOriginalName();
        // $file->move(public_path("/uploads/"), $filename);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
