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
                            <input type="text" name="name" class="form-control" placeholder="Название города">
                        </div>              
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO Desc" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Язык контента</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option>en</option>
                                <option>ru</option>
                            </select>
                        </div> 
                        <div>Превью Карточки</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5"></textarea>
                    </div>
                        <div class="form-group">
                            Изображение города.
                            <input type="file" name="image" class="form-control">
                        </div>
                        <textarea name="about" id="summernote"></textarea>
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
