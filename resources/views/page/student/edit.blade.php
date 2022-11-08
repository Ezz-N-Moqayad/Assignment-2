<!DOCTYPE html>
<html lang="en">

<head>
	<title>Material Dashboard</title>
</head>

<body>
	<div class="row">
		<div class="col-12">
			<form action="{{ URL('student/update/' . $student->id) }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label for="name">Student Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label for="phone">Phone</label>
						<input type="tel" name="phone" id="phone" class="form-control" value="{{ $student->phone }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label for="birth_date">Birth Date</label>
						<input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $student->birth_date }}">
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</body>

</html>