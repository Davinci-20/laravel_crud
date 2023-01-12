<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::latest()->paginate(3);
        return view('index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'price'=>'required'
        ]);

        $file=$request->file('image');
        $name=uniqid(time()).$file->getClientOriginalName();
        $path='/images/'.$name;

        $file->storeAs('images',$name);

        $products=Product::create([
            'name'=>$request->name,
            'image'=>$path,
            'price'=>$request->price,
        ]);

        return redirect(url('/'))->with('success','Product Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->first();
        return view('edit',compact('product'));
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
        $product=Product::find($id);

        if($request->image){

        $img_arr=explode('/',$product->image);
        Storage::disk('images')->delete($img_arr[0]) ;   

        $file=$request->file('image');
        $name=uniqid(time()).$file->getClientOriginalName();
        $path='/images/'.$name;

        $file->storeAs('images',$name);
        }else{
            $path=$product->image;
        }

        Product::where('id',$id)->update([
            'name'=>$request->name,
            'image'=>$path,
            'price'=>$request->price
        ]);

        return redirect(route('product.edit',$product->id))->with('success','Updated Product!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::where('id', $id);

        $img_arr=explode('/',$product->first()->image);

        //for delete images/image\
        Storage::disk('images')->delete($img_arr[2]);

        $product->delete();

        return redirect(route('product.index'))->with('success', 'Deleted Success!');
    }
}