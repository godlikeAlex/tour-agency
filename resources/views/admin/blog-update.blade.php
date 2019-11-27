@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Изминение статьи статьи</div>

                <div class="card-body">
                    <form action="{{route('blog.update.store', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input value="{{$post->title}}" type="text" name="title" class="form-control" placeholder="Название статьи">
                        </div>
                        <div class="form-group">
                            <input value="{{$post->author}}" type="text" name="author" class="form-control" placeholder="Автор">
                        </div>   
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова" value="{{$post->keywords}}">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO DESC" value="{{$post->seo_desc}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Язык </label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                @if($post->lang == 'en')
                                    <option value="en">en</option>
                                    <option value="ru">ru</option>
                                @else
                                    <option value="ru">ru</option>
                                    <option value="en">en</option>
                                @endif
                            </select>
                        </div>   
                        <div class="form-group">
                            <label for="exampleSelect1">Тип блога</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="uzbekistan" {{$post->category == 'uzbekistan' ? 'selected' : ''}}>Узбекистан</option>
                                <option value="archeology"  {{$post->category == 'archeology' ? 'selected' : ''}}>Археология</option>
                                <option value="tourism" {{$post->category == 'tourism' ? 'selected' : ''}}>Туризм</option>
                                <option value="notes" {{$post->category == 'notes' ? 'selected' : ''}}>Заметки</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                        <div for="coverex">Фото</div>
                        <input  type="file" name="image" id="coverex">
                    </div>
                    <div>Минимальное описание</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5">{{$post->desc}}</textarea>
                    </div>
                        <textarea name="post" id="summernote">{!! $post->post !!}</textarea>
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
