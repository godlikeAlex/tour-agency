@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание категории для туров</div>

                <div class="card-body">
                    <form action="{{route('update.store.tour.category', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Название города" value="{{$category->name}}">
                        </div> 
                        <div class="form-group">
                            <label for="exampleSelect1">Язык контента</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                @if($category->lang == 'ru')
                                    <option>ru</option>
                                    <option>en</option>
                                @else
                                    <option>en</option>
                                    <option>ru</option>
                                @endif
                            </select>
                        </div>              
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова" value="{{$category->keywords}}">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESC</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO DESC" value="{{$category->seo_desc}}">
                        </div>  
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
