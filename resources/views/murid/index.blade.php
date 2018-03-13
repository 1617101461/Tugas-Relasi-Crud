@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">SMK ASSALAM BANDUNG </div>
					<div class="panel-heading">Data Murid
						<div class="panel-title pull-right">
							<a href="{{route('murid.create')}}">Tambah</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NIM</th>
										<th>Nama Guru</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach ($murids as $data)
									<tr>
										<td>{{$no++}}</td>
										<td>{{$data->nama}}</td>
										<td>{{$data->nim}}</td>
										<td>{{$data->guru->nama}}</td>
										<td>
											<a href="{{route('murid.edit', $data->id)}}" class="btn btn-warning">Edit</a>
										</td>
										<td>
											<a href="{{route('murid.show', $data->id)}}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form method="post" action="{{route('murid.destroy' ,$data->id)}}">
												<input type="hidden" name="_token" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection