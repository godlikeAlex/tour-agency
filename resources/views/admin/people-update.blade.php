@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создать человека</div>

                <div class="card-body">
                    <form action="{{route('people.update.store', $people->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{$people->name}}" class="form-control" placeholder="Имя человека">
                        </div>  
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова" value="{{$people->keywords}}">
                        </div>    
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO DESC" value="{{$people->seo_desc}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Язык </label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                @if($people->lang == 'en')
                                    <option value="en">en</option>
                                    <option value="ru">ru</option>
                                @else
                                    <option value="ru">ru</option>
                                    <option value="en">en</option>
                                @endif
                            </select>
                        </div>   
                        <div class="form-group">
                            <label for="exampleSelect1">Класс человека</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="drevniy-mir" {{$people->category == 'drevniy-mir' ? 'selected' : ''}}>Древний мир</option>
                                <option value="srednie-veka" {{$people->category == 'srednie-veka' ? 'selected' : ''}}>Средние века</option>
                                <option value="novoe-vremya" {{$people->category == 'novoe-vremya' ? 'selected' : ''}}>Новое время</option>
                                <option value="sovremenost" {{$people->category == 'sovremenost' ? 'selected' : ''}}>Современость</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                            <div for="coverex">Фото человека (Обложка блога)</div>
                            <input type="file" name="image" id="coverex">
                        </div>
                        <div>Мини описание человека</div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea class="form-control" name="desc" rows="5">{{$people->desc}}</textarea>
                        </div>
                        <textarea name="body" id="summernote">{!!$people->body!!}</textarea>
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
