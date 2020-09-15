@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h1>Crea il tuo post</h1>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')

          <div>
            <label>Title</label>
            <input type="text" name="title" value="{{old('title')}}">
          </div>

          <div>
            <label>Content</label>
            <textarea name="content" rows="8" cols="80">{{old('content')}}</textarea>
          </div>

          <div>
            <label>Post Image</label>
            <input type="file" name="image_path" accept="image/*">
          </div>

          <div>
            <input type="submit" name="" value="salva post">
          </div>

        </form>


      </div>
    </div>
  </div>
@endsection
