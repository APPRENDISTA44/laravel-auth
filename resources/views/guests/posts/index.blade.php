@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Benvenuto ecco la lista post</h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{$post->user->name}} - {{$post->title}}</li>
            <a class="btn btn-primary" href="{{route('posts.show',$post)}}">Leggi</a>

          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
