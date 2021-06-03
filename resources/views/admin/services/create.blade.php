@extends('layouts.app')



@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 20px">Add New Service</div>

                <div class="panel-body">

         <form action="servicesstore" method="post" enctype="multipart/form-data">   {{ csrf_field() }}

                        <div class="form-group">
                            <label>Name</label>
                    <input type="text" name="name" class="form-control">
                        </div>
                          <div class="form-group">
                            <label>Description</label>
                    <input type="text" name="description" class="form-control">
                        </div>
                        
<br>
<br>





                        <div class="form-group">
                            <label>Image</label>
                    <input type="file" name="servicephoto" class="form-control">
                        </div>


                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-lg btn-success"type="submit" >Create ServicePhoto</button>

                            </div>
                        </div>
                  

                     
                </form>
            </div>

         </div> 
        

    @stop