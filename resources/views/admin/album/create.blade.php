@extends('layouts.app')



@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 20px">Create a Photo</div>

                <div class="panel-body">

         <form action="albumstore" method="post" enctype="multipart/form-data">   {{ csrf_field() }}

                        <div class="form-group">
                            <label>Name</label>
                    <input type="text" name="photoname" class="form-control">
                        </div>
                          <div class="form-group">
                            <label>Description</label>
                    <input type="text" name="description" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Select Album</label><br>
                   <select  name="Albumname" class="form-control">

                    @foreach($album as $cover )
                    <option value="{{$cover->id}}">{{$cover->name}} </option>
                    @endforeach

                                </select>
                              </div>
<br>
<br>





                        <div class="form-group">
                            <label>Newphoto</label>
                    <input type="file" name="newphoto" class="form-control">
                        </div>


                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-lg btn-success"type="submit" > AddPhoto</button>

                            </div>
                        </div>



                </form>
            </div>

         </div>


    @stop
