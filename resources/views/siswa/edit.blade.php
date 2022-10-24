@extends('tema')
@section('main')

<h1>Edit Data Siswa</h1>
<form action="{{ route('siswa.update', $data->id) }}" method="POST" >
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Nama</label>
    <input class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}">
  </div>
  <div class="form-group">

    <label>Sekolah</label>
    <select class="form-control @error('sekolah_id') is-invalid @enderror" name="sekolah_id">
    <option value="">Pilih Sekolah</option>
    @foreach ($sekolah as $item)
    <option value="{{$item->id}}" @selected ( $data->sekolah_id==$item->id ) >{{$item->namasekolah}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection