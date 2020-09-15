@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2> {{$post->title}} </h2>

        <div>
          Creato il: {{ $post->created_at->format('d-m-Y') }}
        </div>
        @if (strpos($post->image_path,"ttps") != false)
          <div>
            <img src="{{$post->image_path}}" alt="">
          </div>
        @else
          <div>
            <img src="{{asset('storage') . '/' . $post->image_path }}" alt="">
          </div>
        @endif


        <div>
          <p>{{$post->content}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
