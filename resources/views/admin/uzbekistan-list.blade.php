@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                        @foreach($items as $item)
                            <div class="col-md-4" >
                                <div style="background: url(/storage/{{$item->image}}); background-size: cover; background-position: center; height: 200px;"></div>
                                <p>{{$item->name}}</p>
                                <a href="{{route('uzbekistan.update', $item->id)}}" class="btn btn-success">Изменить</a>
                                <a href="{{route('uzbekistan.delete', $item->id)}}" class="btn btn-danger">Удалить</a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>


@endsection
