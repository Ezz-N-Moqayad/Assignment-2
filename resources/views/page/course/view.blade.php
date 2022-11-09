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
			<a class="nav-link text-white active bg-gradient-primary ">
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
		<li class="breadcrumb-item text-sm text-dark active" aria-current="page">View Courses</li>
	</ol>
	<h6 class="font-weight-bolder mb-0">View Courses</h6>
</nav>

<div style="margin-left: 250px;">
	<div class="mx-3">
		<a class="btn bg-gradient-primary mt-4 w-100" href="{{ URL('course/create') }}" type="button">Create Course</a>
	</div>
</div>

@stop



@section('pageContent')

<div style="margin-right: 50px;margin-left: 40px;margin-top: 10px;">
	<div class="row">
		<div class="col-12">
			<table class="table table-striped">
				<thead class="thead-dark">
					<th scope="col">Course Number</th>
					<th scope="col">Name</th>
					<th scope="col">Credit</th>
					<th scope="col">Teacher Id</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</thead>

				<tbody>
					@foreach ($courses as $course)
					<tr>
						<td>{{ $course->course_number }}</td>
						<td>{{ $course->course_name }}</td>
						<td>{{ $course->course_credit }}</td>
						<td>{{ $course->teacher_id }}</td>
						<td>
							<a class="btn btn-link text-dark px-3 mb-0" href="{{ URL('course/edit/' . $course->id) }}">
								<i class="material-icons text-sm me-2">edit</i>Edit
							</a>
						</td>
						<td>
							<form method="POST" action="{{ URL('course/delete/' . $course->id) }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<button type="sumbit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<div style="display: flex; justify-content: center;">
				{{ $courses->links() }}
			</div>
		</div>
	</div>
</div>

@stop