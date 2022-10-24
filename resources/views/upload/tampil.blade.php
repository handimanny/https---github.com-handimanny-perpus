@extends('tema')
@section('main')

<h1>Data Tampil</h1>

<a href="{{ url ('upload/create')}}" class="btn btn-primary mt-1">Tambah Data</a>

<table class="table mt-3" id="dataTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td> <img src="{{ asset('storage/'.$item->image) }}" width="100px" alt=""> </td>
      <td class="input-group" >
        <a href="{{ route ('upload.edit',$item->id)}}" class="btn btn-success">Edit</a>
        |
        <!-- <a href="{{ route ('upload.destroy',$item->id)}}" type="submit" class="btn btn-danger">Hapus</a> -->
        <form action="{{ route ('upload.destroy',$item->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection