@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание статьи</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Название статьи">
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Автор">
                        </div>      
                        <div class="form-group">
                            <label for="exampleSelect1">Тип блога</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Новости</option>
                                <option>Люди</option>
                            </select>
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
