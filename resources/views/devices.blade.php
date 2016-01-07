@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Device
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					

					<!-- New device Form -->
					<form action="/device" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Device Name -->
						
						<br>
						<div class="form-group">
							<label for="device-name" class="col-sm-3 control-label">Device id</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="device-name" class="form-control" value="{{ old('device') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="device-name" class="col-sm-3 control-label">Validity(0/1)</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="device-name" class="form-control" value="{{ old('device') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="device-name" class="col-sm-3 control-label">Version</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="device-name" class="form-control" value="{{ old('device') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="device-name" class="col-sm-3 control-label">Userid</label>

							<div class="col-sm-6">
								<select type="text" name="userid" id="device-name" class="form-control" value="{{ old('device') }}">
								</select>
							</div>
						</div>
						
						<!-- Add Device Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i>Add Device
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- Current Devices -->
			@if (count($devices) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						Available Devices
					</div>

					<div class="panel-body">
						<table class="table table-striped device-table">
							<thead>
								<th>Device</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($devices as $device)
									<tr>
										<td class="table-text"><div>{{ $device->name }}</div></td>

										<!-- Device Delete Button -->
										<td>
											<form action="/device/{{ $device->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>Delete
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
