@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Tambah Data Murid
						<div class="panel-title pull-right">
							<a href="{{route('murid.index')}}">Kembali</a>
						</div>
					</div>

					<div class="panel-body">
						<form action="{{ route('murid.store') }}" method="post">
							{{csrf_field() }}

							<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('nim') ? 'has-error' : ''}}">
								<label class="control-label">NIM</label>
								<input type="number" name="nim" class="form-control" required>
								@if ($errors->has('nim'))
									<span class="help-blocks">
										<strong>{{$errors->first('nim') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_guru') ? 'has-error' : '' }}">
								<label class="control-label">Nama Dosen</label>
								<select name="id_guru" class="form-control" required>
									<option>Pilih Guru</option>
									@foreach($gurus as $data)
										<option value="{{ $data->id }}">
											{{ $data->nama }}
										</option>
									@endforeach
								</select>
								@if ($errors->has('id_guru'))
									<span class="help-block">
										<strong>{{ $errors->first('id_guru') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection