@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Название категории</th>
                        <th scope="col">keywords</th>
                        <th scope="col">Язык</th>
                        <th scope="col">Изменить</th>
                        <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->keywords}}</td>
                                <td>{{$category->lang}}</td>
                                <td><a href="{{route('update.tour.category', $category->id)}}" class="btn btn-success">Изменить</a></td>
                                <td><a href="{{route('delete.tour.category', $category->id)}}" class="btn btn-danger">Удалить</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>


@endsection
