@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Edit Data Murid
						<div class="panel-title pull-right">
							<a href="{{route('murid.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('murid.update', $murids->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}
							
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$murids->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nip') ? 'has-error' : ''}}">
								<label class="control-label">NIM</label>
								<input type="number" name="nim" class="form-control" value="{{$murids->nim}}" required>
								@if ($errors->has('nim'))
									<span class="help-blocks">
										<strong>{{$errors->first('nim')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nama_guru') ? 'has-error' : ''}}">
								<label class="control-label">Nama Guru</label>
								<select name="id_guru" class="form-control" required>
								@foreach($gurus as $data)
								<option value="{{ $data->id }}" {{ $selected == $data->id ? 'selected="selected"' : '' }}>
									{{ $data->nama}}
								</option>
								@endforeach
							</div>
						</select>
						@if($errors->has('id_guru'))
						<span class="help-blocks">
							<strong>{{ $errors->first('id_guru') }}</strong>
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