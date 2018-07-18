@extends('master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="kode barang">ID TIKET</label>
        <div class="col-md-6">
          <input name="id_tiket" type="text" placeholder="Isikan ID Tiket" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama barang">Nama Pemesan</label>
        <div class="col-md-6">
          <input name="nama_pemesan" type="text" placeholder="Isikan Nama Pemesan" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="stok">Kelas Tiket</label>
        <div class="col-md-6">
          <select name="kelas" class="form-control">
            <option value="VIP">ISIKAN KELAS TIKET</option>
            <option value="VIP">-------------------</option>
            <option value="VIP">VIP</option>
            <option value="BISNIS">BISNIS</option>
            <option value="REGULAR">REGULAR</option>
            <option value="EKONOMI">EKONOMI</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama barang">Tanggal Pemesanan</label>
        <div class="col-md-6">
          <input name="tgl" type="date" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
