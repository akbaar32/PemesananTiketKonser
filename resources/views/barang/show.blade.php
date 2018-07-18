@extends('master')
@section('content')

	<form class="" action="{{ Route('cari') }}" method="POST">
		@csrf
		<div class="pull-right">
			<input type="text" name="search" placeholder="Pencarian">
			<button type="submit">Cari</button>
		</div>
	</form>

	<a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
	<a class="btn btn-info" href="{{ Route('cetak') }}">Cetak</a>
	<br><br>

	<table class="table table-bordered table-responsive">
    <thead>
      <tr style="background-color: #525282; color:#fff">
        <th>ID Tiket</th>
        <th>Nama Pemesan</th>
        <th>Kelas Tiket</th>
        <th>Tanggal Pemesanan</th>
        <th><center>Action</center></th>
      </tr>
    </thead>
    <tbody>

      @foreach ($barang as $databarang)
        {{-- expr --}}
        <tr>
          <td>{{$databarang->id_tiket}}</td>
          <td>{{$databarang->nama_pemesan}}</td>
          <td>{{$databarang->kelas}}</td>
          <td>{{$databarang->tgl}}</td>
          <td><center>
            <a href="{{ Route('delete', ['id' => $databarang->id]) }}" class="btn btn-danger btn-xs">Hapus Data</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $databarang->id]) }}" class="btn btn-warning btn-xs">Edit Data</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}
            </center>
          </td>
        </tr>

      @endforeach
      {{-- <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr> --}}
    </tbody>
  </table>
@endsection


{{-- @extends('master')
@section('content')
  <a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>ID Tiket</th>
        <th>Nama Pemesan</th>
        <th>Kelas Tiket/th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  <br><br>
@endsection
 --}}
