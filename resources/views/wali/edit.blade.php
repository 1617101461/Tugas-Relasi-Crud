@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Edit Data Wali
						<div class="panel-title pull-right">
							<a href="{{route('wali.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('wali.update', $walis->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}

							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$walis->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

								<div class="form-group {{ $errors->has('id_murid') ? 'has-error' : '' }}">
								<label class="control-label">Murid</label>
								<select class="form-control" name="id_murid" required>
									@foreach($murids as $data)
										<option value="{{ $data->id }}" {{ $selected == $data->id ? 'selected="selected"' : '' }}>
											{{ $data->nama }}
										</option>
									@endforeach
								</select>
								@if ($errors->has('id_murid'))
									<span class="help-block">
										<strong>{{ $errors->first('id_murid') }}</strong>
									</span>
								@endif
							</div>

								<div>
								<button class="btn btn-primary" type="submit">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection