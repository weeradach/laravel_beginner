@extends('master')
@section('title','Welcome Userview')
@section('content')
	<div class="container">
		<br>
		<h3>แสดงข้อมูลพนักงาน</h3>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div align="right">
					<a href="{{route('users.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
				</div>
				<br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $val)
						<tr>
							<td>{{$val['id']}}</td>
							<td>{{$val['fname']}}</td>
							<td>{{$val['lname']}}</td>
							<td>
								<a href="#" 
								   class="btn btn-primary btn-sm">edit
								</a>
							</td>
							<td>
								<form method="post" class="delete_form" action="{{action('UsersController@destroy','$val[id]')}}">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<input type="submit" name="" value="delete" class="btn btn-danger">
									
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
		
	
	
@stop

<!-- @section('footer','Goodbye') -->

</div>