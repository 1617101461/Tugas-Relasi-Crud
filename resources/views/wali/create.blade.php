@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Tambah Data Wali
						<div class="panel-title pull-right">
							<a href="{{route('wali.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('wali.store')}}" method="post">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama Wali</label>
								<input type="text" name="nama" class="form-control" required>
								@if ($errors->has('nama'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('murid') ? 'has-error' : ''}}">
								<label class="control-label">Nama Murid</label>
								<select class="form-control" name="id_murid">
									<option>Pilih Murid</option>
									@foreach($murids as $data)
									<option value="{{$data->id}}">{{$data->nama}}</option>
									@endforeach
								</select>

								@if ($errors->has('id_murid'))
									<span class="help-blocks">
										<strong>{{$errors->first('id_murid')}}</strong>
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
@endsection