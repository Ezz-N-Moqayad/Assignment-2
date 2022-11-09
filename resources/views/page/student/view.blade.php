@extends('layouts.main_layout')


@section('navbarContent')

<div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
	<ul class="navbar-nav">
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
	</ul>
</div>

@stop



@section('titleContent')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
		<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
		<li class="breadcrumb-item text-sm text-dark active" aria-current="page">View Students</li>
	</ol>
	<h6 class="font-weight-bolder mb-0">View Students</h6>
</nav>

<div style="margin-left: 250px;">
	<div class="mx-3">
		<a class="btn bg-gradient-primary mt-4 w-100" href="{{ URL('student/create') }}" type="button">Create Student</a>
	</div>
</div>

@stop



@section('pageContent')

<div style="margin-right: 50px;margin-left: 40px;margin-top: 10px;">
	<div class="row">
		<div class="col-12">
			<table class="table table-striped">
				<thead class="thead-dark">
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Birth Date</th>
					<th scope="col">Course Id</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</thead>

				<tbody>
					@foreach ($students as $student)
					<tr>
						<td>{{ $student->student_name }}</td>
						<td>{{ $student->student_email }}</td>
						<td>{{ $student->student_birth_date }}</td>
						<td>{{ $student->course_id }}</td>
						<td>
							<a class="btn btn-link text-dark px-3 mb-0" href="{{ URL('student/edit/' . $student->id) }}">
								<i class="material-icons text-sm me-2">edit</i>Edit
							</a>
						</td>
						<td>
							<form method="POST" action="{{ URL('student/delete/' . $student->id) }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<button type="sumbit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<div style="display: flex; justify-content: center;">
				{{ $students->links() }}
			</div>
		</div>
	</div>
</div>

@stop