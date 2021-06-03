@extends('layouts.app')



@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">



        </div>


            <div class="panel-body">
                <form action="coverphotostore" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                  

                        <div class="form-group">
                            <label>coverphoto</label>
                    <input type="file" name="coverphoto" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>Contact</label>
                    <input type="file" name="coverphotocontact" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>Photography</label>
                    <input type="file" name="coverphotophoto" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>Services</label>
                    <input type="file" name="coverphotoservices" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>About</label>
                    <input type="file" name="coverphotoabout" class="form-control">
                        </div>


                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success"type="submit" >Create CoverPhoto</button>

                            </div>
                        </div>



                </form>
            </div>

         </div>

    @stop
