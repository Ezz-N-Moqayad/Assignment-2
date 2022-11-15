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
			<a class="nav-link text-white active bg-gradient-primary ">
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
		<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Teachers Information</li>
	</ol>
	<h6 class="font-weight-bolder mb-0">Teachers Information</h6>
</nav>

@stop



@section('pageContent')

<div style="margin-right: 50px;margin-left: 40px;margin-top: 10px;">
	<div class="row">
		<div class="col-12">
			<table class="table table-striped">
				<thead class="thead-dark">
					<th scope="col">Name Teacher</th>
					<th scope="col">Email</th>
					<th scope="col">Birth Date</th>
					<th scope="col">Name Course</th>
					<th scope="col">Course Number</th>
				</thead>

				<tbody>
					@foreach ($teachers as $teacher)
					<tr>
						<td>{{ $teacher->teacher_name }}</td>
						<td>{{ $teacher->teacher_email }}</td>
						<td>{{ $teacher->teacher_birth_date }}</td>
						<td>{{ $teacher->course_name }}</td>
						<td>{{ $teacher->course_number }}</td>
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<div style="display: flex; justify-content: center;">
				{{ $teachers->links() }}
			</div>
		</div>
	</div>
</div>

@stop