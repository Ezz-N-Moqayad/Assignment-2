@extends('layouts.main_layout')


@section('navbarContent')

<div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">assignment_ind</i>
				</div>
				<span class="nav-link-text ms-1">View Teachers</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('student') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">group</i>
				</div>
				<span class="nav-link-text ms-1">View Students</span>
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
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('teacher/info') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">business_center</i>
				</div>
				<span class="nav-link-text ms-1">Teachers Information</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('course/info') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">toc</i>
				</div>
				<span class="nav-link-text ms-1">Courses Information</span>
			</a>
		</li>
	</ul>
</div>

@stop



@section('titleContent')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
		<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
		<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Teacher</li>
	</ol>
	<h6 class="font-weight-bolder mb-0">Edit Teacher</h6>
</nav>

@stop



@section('pageContent')

<div style="margin-right: 725px;margin-left: 40px;margin-top: 10px;margin-bottom: 210px;">
	<div class="row">
		<div class="col-12">
			<form action="{{ URL('teacher/update/' . $teacher->id) }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="name">Teacher Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ $teacher->teacher_name }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" value="{{ $teacher->teacher_email }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="birth_date">Birth Date</label>
						<input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $teacher->teacher_birth_date }}">
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

@stop