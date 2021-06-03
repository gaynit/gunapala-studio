@extends('layouts.app')



@section('content')

            <div class="panel panel-primary">
        <div class="panel-heading">



        </div>


            <div class="panel-body">
                <form action="/aboutupdate" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label>header</label>
                    <input type="text" name="aboutheader" class="form-control" value="{{ $about->aboutheader}}">
                        </div>
                           <div class="form-group">
                            <label>Text</label>
                    <input type="text" name="abouttext" class="form-control" value="{{ $about->abouttext}}">
                        </div>

                        <div class="form-group">
                            <label>Main Photo</label>
                    <input type="file" name="aboutphoto" class="form-control">
                        </div>


                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success"type="submit" >update about us</button>

                            </div>
                        </div>



                </form>
            </div>

         </div>


    @stop
