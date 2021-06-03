@extends('layouts.app')



@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">

            <h2 text-center> <a href="coverphotocreate"class="btn btn-success">Update Coverphoto</a>  </h2>

        </div>


            <div class="panel-body">
			<table class="table is-striped">
				<thead>
					<tr>
						
						<th>CoverPhoto</th>
						<th>Photography</th>
						<th>Services</th>
						<th>About</th>
						<th>Contact</th>
						

					</tr>
				</thead>

				<tbody>
				@foreach($coverphoto as $cover)
						<tr>

								<th>
									<img src="{{$cover->coverphoto}}" width="70px" height="70px">
								</th>

								<th>
									<img src="{{$cover->coverphotophoto}}" width="70px" height="70px">
									
								</th>
								<th>
									<img src="{{$cover->coverphotoservices}}" width="70px" height="70px">
									
								</th>
								<th>
									<img src="{{$cover->coverphotoabout}}" width="70px" height="70px">
								
								</th>
								<th>
									<img src="{{$cover->coverphotocontact}}" width="70px" height="70px">
								
					




						</tr>
						@endforeach

				</tbody>
			</table>



		</div>
	</div>

@stop
