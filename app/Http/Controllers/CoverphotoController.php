<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cover;
use App\About;
use App\Setting;

class CoverphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coverphoto.index')->with('coverphoto',Cover::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.coverphoto.create')->with('about',About::first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cover = Cover::first();

       if($request->hasfile('coverphoto')){
          $coverphoto = $request->file('coverphoto');
          $coverphoto_new_name = time().$coverphoto->getClientOriginalName();
          $coverphoto->move('uploads/coverphotos/',$coverphoto_new_name);

          $cover->coverphoto='/uploads/coverphotos/'.$coverphoto_new_name;
             $cover->save();
      }

if($request->hasfile('coverphotophoto')){
          $coverphotophoto = $request->file('coverphotophoto');
          $coverphotophoto_new_name = time().$coverphotophoto->getClientOriginalName();
          $coverphotophoto->move('uploads/coverphotos/',$coverphotophoto_new_name);

          $cover->coverphotophoto='/uploads/coverphotos/'.$coverphotophoto_new_name;
             $cover->save();    
      }

         if($request->hasfile('coverphotoservices')){
          $coverphotoservices = $request->file('coverphotoservices');
          $coverphotoservices_new_name = time().$coverphotoservices->getClientOriginalName();
          $coverphotoservices->move('uploads/coverphotos/',$coverphotoservices_new_name);
          $cover->coverphotoservices='/uploads/coverphotos/'.$coverphotoservices_new_name;
           $cover->save();
      
      }
      if($request->hasfile('coverphotoabout')){
          $coverphotoabout = $request->file('coverphotoabout');
          $coverphotoabout_new_name = time().$coverphotoabout->getClientOriginalName();
          $coverphotoabout->move('uploads/coverphotos/',$coverphotoabout_new_name);
          $cover->coverphotoabout='/uploads/coverphotos/'.$coverphotoabout_new_name;
         $cover->save();
      }
         if($request->hasfile('coverphotocontact')){
          $coverphotocontact = $request->file('coverphotocontact');
          $coverphotocontact_new_name = time().$coverphotocontact->getClientOriginalName();
          $coverphotocontact->move('uploads/coverphotos/',$coverphotocontact_new_name);
          $cover->coverphotocontact='/uploads/coverphotos/'.$coverphotocontact_new_name;
         $cover->save();
      }
         
   
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
