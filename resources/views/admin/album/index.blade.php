@extends('layouts.app')



@section('content')

            <div class="panel panel-primary">
<div class="panel-heading">

 <h2 class="text-center"> <a href="albumcreate" class="btn btn-lg btn-success">Add Photo</a>  </h2></div>

        </div>


            <div class="panel-body">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Album Name</th>
						<th>Description</th>
						<th>Image</th>
						<th>Delete</th>

					</tr>
				</thead>

				<tbody>
					@foreach($albumm as $cover)
						<tr>

								<th>
									{{$cover->id}}
								</th>

								<th>
								{{$cover->photoname}}
								</th>

								<th>
									{{$cover->Albumname}}
								</th>
								<th>
									{{$cover->description}}
								</th>

								<th>
                  <img style="width: 90px;height: 50px;" src="	{{$cover->newphoto}}"/>

									<th> <td><a class="btn btn-danger" href="\deletealbum\{{$cover->id}}">Delete</a></td>




								</th>


</th>

						</tr>
					@endforeach
				</tbody>
			</table>



		</div>



@stop
