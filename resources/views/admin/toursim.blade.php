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
                            <label for="exampleSelect1">Язык</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option value="en">en</option>
                                <option value="ru">ru</option>
                            </select>
                        </div>   
                        <div class="form-group">
                        
                        <div for="coverex">Фото</div>
                        <input type="file" name="image" id="coverex">
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
        height: 100,  codemirror: { // codemirror options
    theme: 'monokai'
  }
      });
</script>

@endsection
