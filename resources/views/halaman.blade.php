@extends('tema')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">sekolah</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->sekolah->nama }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection