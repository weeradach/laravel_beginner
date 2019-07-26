@extends('master')
@section('title','จัดการฐานข้อมูล')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<h3 align="center">เพิ่มผู้ใช้ระบบ</h3>

				<!-- error -->
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul style="margin-bottom: 0">
							@foreach($errors->all() as $error)
							<li>
								{{$error}}
							</li>
							@endforeach
						</ul>
					</div>
				@endif

				<!-- success -->
				@if(\Session::has('success'))
					<div class="alert alert-success">
						{{\Session::get('success')}}
					</div>
				@endif
				<form method="post" action="{{url('users')}}">
					{{csrf_field()}}
					<div class="form-group">
						<input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ">
					</div>
					<div class="form-group">
						<input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="บันทึก">
						<a href="{{route('users.index')}}" class="btn btn-secondary">กลับหน้าแรก</a>
					</div>

				</form>
			</div>
		</div>
@endsection
	</div>
	
