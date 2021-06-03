@extends('layouts.app')



@section('content')

            <div class="panel panel-primary">
<div class="panel-heading">

 <h2 class="text-center"> <a href="servicescreate" class="btn btn-lg btn-success">Add Service</a>  </h2></div>

        </div>


            <div class="panel-body">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Text</th>
						<th>Image</th>
						<th>Delete</th>

					</tr>
				</thead>

				<tbody>
					@foreach($services as $services)
						<tr>

								<th>
									
								</th>

								<th>
									{{$services->name}}
								</th>

								<th>
											{{$services->description}}	
								</th>

								<th>
									<img src="{{$services->servicephoto}}" width="70px" height="70px">
									<th>

									<td><a class="btn btn-danger" href="/servicesdelete/{{ $services->id }}">Delete</a></td>								




								</th>


</th>

						</tr>
				@endforeach
				</tbody>
			</table>



		</div>


@stop
