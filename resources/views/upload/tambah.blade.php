@extends('tema')
@section('main')

<h1>Tambah Data</h1>
<form action="{{ route ('upload.store')}}" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control @error('nama') is-invalid @enderror" name="image" value="{{old('nama')}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection