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
			<a class="nav-link text-white active bg-gradient-primary ">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">assignment</i>
				</div>
				<span class="nav-link-text ms-1">View Users</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white " href="{{ URL('user/create') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">create</i>
				</div>
				<span class="nav-link-text ms-1">Create User</span>
			</a>
		</li>
	</ul>
</div>

@stop



@section('titleContent')

<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page">View Users</li>
</ol>
<h6 class="font-weight-bolder mb-0">View Users</h6>

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
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</thead>

				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->birth_date }}</td>
						<td><a class="btn btn-link text-dark px-3 mb-0" href="{{ URL('user/edit/' . $user->id) }}"><i class="material-icons text-sm me-2">edit</i>Edit</a></td>
						<td>
							<form method="POST" action="{{ URL('user/delete/' . $user->id) }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<button type="sumbit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table><br>
			<div style="display: flex; justify-content: center;">
				{{ $users->links() }}
			</div>
		</div>
	</div>
</div>

@stop