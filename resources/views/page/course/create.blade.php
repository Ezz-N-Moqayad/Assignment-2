@extends('layouts.main_layout')


@section('navbarContent')

<div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">dashboard</i>
				</div>
				<span class="nav-link-text ms-1">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('billing') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">receipt_long</i>
				</div>
				<span class="nav-link-text ms-1">Billing</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('profile') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">person</i>
				</div>
				<span class="nav-link-text ms-1">Profile</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('teacher') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">assignment_ind</i>
				</div>
				<span class="nav-link-text ms-1">View Teachers</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('course') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">assignment</i>
				</div>
				<span class="nav-link-text ms-1">View Courses</span>
			</a>
		</li>
	</ul>
</div>

@stop



@section('titleContent')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
		<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
		<li class="breadcrumb-item text-sm text-dark active" aria-current="page"> Create Course</li>
	</ol>
	<h6 class="font-weight-bolder mb-0">Create Course</h6>
</nav>

@stop



@section('pageContent')

<div style="margin-right: 725px;margin-left: 40px;margin-top: 10px;margin-bottom: 140px;">
	<div class="row">
		<div class="col-12">
			<form action="{{ URL('course/store') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="name">Course Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="course_number">Course Number</label>
						<input type="number" name="course_number" id="course_number" class="form-control">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="credit">Credit</label>
						<input type="number" name="credit" id="credit" class="form-control">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="teacher_id"></label>
						<select name="teacher_id" id="teacher_id" class="form-control">
							<option value="-1">Choose The Teacher</option>

							@foreach ($teachers as $teacher)
							<option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
							@endforeach

						</select>
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

@stop