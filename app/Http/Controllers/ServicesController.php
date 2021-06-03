<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Cover;
use App\Services;
use App\About;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('services')->with('name',Setting::first()->name)
                                            ->with('tel',Setting::first()->tel)
                                               ->with('email',Setting::first()->email)
                                               ->with('address',Setting::first()->address)
                                  ->with('coverphoto',Cover::first()->coverphotoservices)
                                   ->with('services',Services::all())
                                   ->with('abouttext',About::first()->abouttext);
    }        
    
     public function aindex()
    {
      return view('admin.services.index')->with('services',Services::all());         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.services.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'name'=>'required',
         'servicephoto'=>'required|image',
           'description'=>'required',

     ]);
          $servicephoto = $request->servicephoto;
          $servicephoto_new_name = time().$servicephoto->getClientOriginalName();
          $servicephoto->move('uploads/servicephoto/',$servicephoto_new_name);

     $service = Services::create([
         'name' => $request->name,
         'servicephoto' => '/uploads/servicephoto/' . $servicephoto_new_name,
         'description' => $request->description,



     ]);
     return redirect()->back();
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
        //
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
    public function delete($id)
    {
        $services = Services::find($id);
        $services->delete();
        return redirect('servicesindex');
    }
}
