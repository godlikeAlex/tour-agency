@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание статьи</div>

                <div class="card-body">
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Название статьи">
                        </div>
                        <div class="form-group">
                            <input type="text" name="author" class="form-control" placeholder="Автор">
                        </div> 
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова">
                        </div>    
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO DESC">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Язык</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option value="en">en</option>
                                <option value="ru">ru</option>
                            </select>
                        </div>   
                        <div class="form-group">
                            <label for="exampleSelect1">Тип блога</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="uzbekistan">Узбекистан</option>
                                <option value="archeology">Археология</option>
                                <option value="tourism">Туризм</option>
                                <option value="notes">Заметки</option>
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



<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,
        placeholder: 'Редактор',
        lang: 'en-US',
        imageTitle: {
          specificAltField: true,
        },
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageTitle']],
            ],
        },
    });
});
</script>

@endsection
