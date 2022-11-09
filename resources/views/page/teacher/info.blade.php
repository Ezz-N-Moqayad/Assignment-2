<!DOCTYPE html>
<html lang="en">

<head>
	<title>Material Dashboard</title>
	@include('includes.pagestyle')
</head>

<body>
	<div style="margin-right: 50px;margin-left: 40px;margin-top: 10px;">
		<div class="row">
			<div class="col-12">
				<table class="table table-striped" style="border: 1px solid black;">
					<thead class="thead-dark">
						<th scope="col" style="border: 1px solid black; padding: 15px;">Name Teacher</th>
						<th scope="col" style="border: 1px solid black; padding: 15px;">Email</th>
						<th scope="col" style="border: 1px solid black; padding: 15px;">Birth Date</th>
						<th scope="col" style="border: 1px solid black; padding: 15px;">Name Course</th>
						<th scope="col" style="border: 1px solid black; padding: 15px;">Course Number</th>
					</thead>

					<tbody>
					@foreach ($teachers as $teacher)
						<tr>
							<td style="border: 1px solid black; padding: 15px;">{{ $teacher->name }}</td>
							<td style="border: 1px solid black; padding: 15px;">{{ $teacher->email }}</td>
							<td style="border: 1px solid black; padding: 15px;">{{ $teacher->birth_date }}</td>
							<td style="border: 1px solid black; padding: 15px;">{{ $teacher->course_name }}</td>
							<td style="border: 1px solid black; padding: 15px;">{{ $teacher->course_number }}</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	@include('includes.pageJs')
</body>

</html>