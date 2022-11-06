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
			<a class="nav-link text-white " href="{{ URL('user') }}">
				<div class="text-white text-center me-2 d-flex align-items-center
                justify-content-center">
					<i class="material-icons opacity-10">assignment</i>
				</div>
				<span class="nav-link-text ms-1">View Users</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white active bg-gradient-primary ">
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
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page"> Create User</li>
</ol>
<h6 class="font-weight-bolder mb-0">Create User</h6>

@stop



@section('pageContent')

<div style="margin-right: 725px;margin-left: 40px;margin-top: 10px;margin-bottom: 140px;">
	<div class="row">
		<div class="col-12">
			<form action="{{ URL('user/store') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="name">User Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="birth_date">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="birth_date">Birth Date</label>
						<input type="date" name="birth_date" id="birth_date" class="form-control" value="2002-01-15">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="birth_date">Passwoed</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

@stop