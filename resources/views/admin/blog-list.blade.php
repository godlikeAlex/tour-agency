@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if(request()->segment(2) === 'news')
                        @foreach($posts as $post)
                            <div class="col-md-3" >
                                <div style="background: url(/storage/{{$post->image}}); background-size: cover; background-position: center; height: 200px;"></div>
                                <p>{{$post->title}}</p>
                                <a href="{{route('blog.update', $post->id)}}" class="btn btn-success">Изменить</a>
                            </div>
                        @endforeach
                    @elseif(request()->segment(2) === 'peoples')
                        @foreach($posts as $post)
                            <div class="col-md-3" >
                                <div style="background: url(/storage/{{$post->image}}); background-size: cover; background-position: center; height: 200px;"></div>
                                <p>{{$post->name}}</p>
                                <a href="{{route('people.update', $post->id)}}" class="btn btn-success">Изменить</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>


@endsection
