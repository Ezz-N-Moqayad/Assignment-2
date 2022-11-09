<!DOCTYPE html>
<html lang="en">

<head>
	<title>Material Dashboard</title>
</head>

<body>
	<div class="row">
		<div class="col-12">
			<form action="{{ URL('course/update/' . $course->id) }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="name">Course Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="course_number">Course Number</label>
						<input type="number" name="course_number" id="course_number" class="form-control" value="{{ $course->course_number }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="credit">Credit</label>
						<input type="number" name="credit" id="credit" class="form-control" value="{{ $course->credit }}">
					</div>
				</div><br>
				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					<div class="input-group input-group-outline">
						<label class="form-label" for="teacher_id"></label>
						<select name="teacher_id" id="teacher_id" class="form-control">
							<option value="-1">Choose The Teacher</option>

							@foreach ($teachers as $teacher)

							@php

							$id = $teacher->id;
							$teacher_id = $course->teacher_id;

							@endphp

							<option value="{{ $id }}" @if ($id==$teacher_id) selected @endif>{{ $teacher->name }}</option>
							@endforeach

						</select>
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</body>

</html>