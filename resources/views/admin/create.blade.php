@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание статьи</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Название статьи">
                        </div>
                        <div class="form-group">
                            <input type="text" name="author" class="form-control" placeholder="Автор">
                        </div>      
                        <div class="form-group">
                            <label for="exampleSelect1">Тип блога</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="tourism">Туризм</option>
                                <option value="uzbekistan">Узбекистан</option>
                                <option value="history">История</option>
                                <option value="tourists">Туристы</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                        <div for="coverex">Фото</div>
                        <input type="file" name="image" id="coverex">
                    </div>
                    <div>Минимальное описание</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5"></textarea>
                    </div>
                        <textarea name="post" id="summernote"></textarea>
                        <button type="submit" class="btn btn-success">Создать</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script>
      $('#summernote').summernote({
        placeholder: 'Статья',
        tabsize: 2,
        height: 100
      });
</script>

@endsection
