@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить в галерея</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Название фотографии">
                        </div>     
                        <div class="form-group">
                            <label for="exampleSelect1">Язык контента</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option>en</option>
                                <option>ru</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Категория</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                @foreach($categories as $category)
                                    <option value="{{$category->slug}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        
                            <div for="coverex">Фото</div>
                            <input type="file" name="image">
                        </div>
                        <div>Описание</div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea class="form-control" name="desc" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Создать</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

@endsection
