@extends('tema')
@section('main')

<h1>Tambah Data Siswa</h1>
<form action="{{ route ('siswa.store')}}" method="POST" >
  @csrf
  <div class="form-group">
    <label>Nama</label>
    <input class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}">
  </div>
  <div class="form-group">

    <label>Sekolah</label>
    <select class="form-control @error('sekolah_id') is-invalid @enderror" name="sekolah_id">
    <option value="">Pilih Sekolah</option>
    @foreach ($data as $item)
    <option value="{{$item->id}}" @selected(old('sekolah_id')==$item->id) >{{$item->namasekolah}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection