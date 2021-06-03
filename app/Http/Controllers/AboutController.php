<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Cover;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('about')->with('name',Setting::first()->name)
                                            ->with('tel',Setting::first()->tel)
                                               ->with('email',Setting::first()->email)
                                               ->with('address',Setting::first()->address)
                             ->with('coverphoto',Cover::first()->coverphotoabout)
                             ->with('aboutphoto',About::first()->aboutphoto)
                            ->with('abouttext',About::first()->abouttext)
                             ->with('aboutheader',About::first()->aboutheader);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create')->with('about',About::first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
              $this->validate(request(),[
'aboutheader'=>'required',
'abouttext'=>'required',
'aboutphoto'=>'required',



]);

$about = About::first();


if($request->hasFile('aboutphoto'))
{

$aboutphoto = $request->aboutphoto;
$aboutphoto_new_name = time().$aboutphoto->getClientOriginalName();
$aboutphoto->move('uploads/abouthotos/',$aboutphoto_new_name);

$about->aboutphoto='uploads/abouthotos/'.$aboutphoto_new_name;
$about->save();
}
$about->aboutheader = request()->aboutheader;
$about->abouttext = request()->abouttext;
$about->save();






return redirect()->back();
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
