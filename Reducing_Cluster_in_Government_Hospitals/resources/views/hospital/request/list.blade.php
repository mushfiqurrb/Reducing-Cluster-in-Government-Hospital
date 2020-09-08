@extends('layouts.doctor')
@section('assets')
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script
	src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

@endsection
@section('content')


	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">Request</div>
			<div class="panel-body">
				@include('includes.errors')
				<table class="table table-striped" id="table">
					<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@if (isset($requestList) && count($requestList))
							@foreach ($requestList as $request)
								<tr class="item{{$request->id}}">
									<td>{{$request->date}}</td>
									<td>{{$request->time}}</td>
									<td>
									<div class="col-sm-12">
										<div class="col-sm-6">
											<!--Accept  request-->
											{{Form::open(['method'=>'Post','action'=>'Hospital\AppointmentController@accept'])}}
											{{Form::hidden('appoint_id',$request->id)}}
											{{Form::submit('Accept',['class'=>'btn btn-sm btn-success'])}}
											{{Form::close()}}
										</div>

											<!--Reject  request-->
											{{Form::open(['method'=>'Post','action'=>'Hospital\AppointmentController@reject'])}}
											{{Form::hidden('appoint_id',$request->id)}}
											{{Form::submit('Reject',['class'=>'btn btn-sm btn-danger'])}}
											{{Form::close()}}

									</div>

									</td>
								</tr>

							@endforeach
						@else
							<td colspan="6">No request found</td>
						@endif

					</tbody>
				</table>
			</div>
		</div>
	</div>

		@if (count($requestList))
			<script>

			$(document).ready(function() {
				$('#table').DataTable();
			} );

			</script>
		@endif
	@endsection
