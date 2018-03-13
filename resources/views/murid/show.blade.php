@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Show Data Mahasiswa
						<div class="panel-title pull-right">
							<a href="{{route('murid.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$murids->nama}}" readonly>
						</div>

						<div class="form-group">
							<label class="control-label">NIM</label>
							<input type="text" name="nim" class="form-control" value="{{$murids->nim}}" readonly>
						</div>

						<div class="form-group">
							<label class="control-label">Nama Guru</label>
							<input type="text" name="id_guru" class="form-control" value="{{$murids->guru->nama}}" readonly>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection