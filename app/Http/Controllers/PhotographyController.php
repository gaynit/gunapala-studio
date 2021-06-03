<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Cover;
use App\Album;
use App\Photography;
use App\About;


class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('single')->with('name',Setting::first()->name)
                                            ->with('tel',Setting::first()->tel)
                                               ->with('email',Setting::first()->email)
                                               ->with('address',Setting::first()->address)
                                 ->with('coverphoto',Cover::first()->coverphotophoto)
                                 ->with('album',Photography::all())     
                                 ->with('abouttext',About::first()->abouttext);
    }

      public function aindex()
    {
        return view('admin.album.index')->with('album',Album::all())
                                               ->with('albumm',Photography::all());
                               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.album.create')->with('album',Album::all());
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
         'photoname'=>'required',
         'newphoto'=>'required|image',
           'Albumname'=>'required',
           'description'=>'required',

     ]);
          $newphoto = $request->newphoto;
          $newphoto_new_name = time().$newphoto->getClientOriginalName();
          $newphoto->move('uploads/newphotos/',$newphoto_new_name);

     $photography = Photography::create([
         'photoname' => $request->photoname,
         'description' => $request->description,
         'newphoto' => '/uploads/newphotos/' . $newphoto_new_name,
         'Albumname' => $request->Albumname,



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
    public function destroy($id)
    {
        $Photography = Photography::find($id);
        $Photography->delete();
        return redirect('albumindex');
}
}