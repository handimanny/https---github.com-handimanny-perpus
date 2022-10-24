@extends('tema')
@section('main')

<h1>Data Siswa</h1>

<a href="{{ url ('siswa/create')}}" class="btn btn-primary mt-1">Tambah Data</a>

<table class="table mt-3" id="dataTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">sekolah</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->sekolah->namasekolah }}</td>
      <td>
        <a href="{{ route ('siswa.edit',$item->id)}}" class="btn btn-success">Edit</a>
        |
        <!-- <a href="{{ url ('deletesiswa',$item->id)}}" type="submit" class="btn btn-danger">Hapus</a> -->
        <a href="{{ route ('deletesiswa',$item->id)}}" type="submit" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection