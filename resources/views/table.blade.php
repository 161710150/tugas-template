@extends('template.master')
@section('konten')
			<table class="table">
				<thead>
					<tr>
						<th>
							No
						</th>
						<th>
							Nama Bobotoh Aktif
						</th>
						<th>
							Jumlah Poin Yang Didapat
						</th>
						<th>
							Nomor Kartu Tanda Anggota
						</th>

					</tr>
				</thead>
				<tbody>
					@php 
					$no=1;
					@endphp
					@foreach($a as $data)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$data->nama_bobotoh_aktif}}
						</td>
						<td>
							{{$data->jumlah_poin}}
						</td>
						<td>
							{{$data->nomor_KTA}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	@endsection