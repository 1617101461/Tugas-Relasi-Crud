@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Show Data Wali
						<div class="panel-title pull-right">
							<a href="{{route('wali.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Nama Wali</label>
							<input type="text" name="nama" class="form-control" value="{{$walis->nama}}" readonly>
						</div>

						<div class="form-group">
							<label class="control-label">Nama Murid</label>
							<input type="text" name="id_murid" class="form-control" value="{{$walis->murid->nama}}" readonly>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection