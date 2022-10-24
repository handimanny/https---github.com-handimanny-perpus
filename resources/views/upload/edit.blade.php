@extends('tema')
@section('main')

<h1>Edit Data</h1>
<img src="{{asset ('storage/'.$data->image)}}" width="500px" alt="">
<form action="{{ route ('upload.update', $data->id)}}" method="POST" enctype="multipart/form-data" >
  @csrf
  @method('put')
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection