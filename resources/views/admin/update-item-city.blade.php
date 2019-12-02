@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание объекта для города</div>

                <div class="card-body">
                    <form action="{{route('city.item.update.store', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Название объекта" value="{{$item->name}}">
                        </div>
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова" value="{{$item->keywords}}">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO Desc" value="{{$item->seo_desc}}">
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Город в котором находиться объект.</label>
                                <select name="city_id" class="form-control" id="exampleSelect1">
                                    @foreach($citys as $city)
                                        @if($city->id == $item->city_id)
                                            <option selected value="{{$city->id}}">{{$city->name}}</option>
                                        @else
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Язык контент.</label>
                                <select name="lang" class="form-control" id="exampleSelect1">
                                    @if($city->lang == 'ru')
                                        <option value="ru">Русский язык</option>
                                        <option value="en">Английский язык</option>
                                    @else
                                        <option value="en">Английский язык</option>
                                        <option value="ru">Русский язык</option>
                                    @endif
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Ценновая категория использовать только для Ресторанов и Отелей в остальных случаях оставлять пустым полем.</label>
                                <select name="category_price" class="form-control" id="exampleSelect1">
                                        <option value="" {{$item->category_price == '' ? 'selected' : ''}}>Без ценовой категории</option>
                                        <option value="cheap" {{$item->category_price == 'cheap' ? 'selected' : ''}}>Дешевый</option>
                                        <option value="middle" {{$item->category_price == 'middle' ? 'selected' : ''}}>Средний</option>
                                        <option value="expensive" {{$item->category_price == 'expensive' ? 'selected' : ''}}>Дорогой</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Тип объекта.</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="history" {{$item->category == 'history' ? 'selected' : ''}}>История</option>
                                    <option value="what-to-see" {{$item->category == 'what-to-see' ? 'selected' : ''}}>Что посмотреть</option>
                                    <option value="things-to-do" {{$item->category == 'things-to-do' ? 'selected' : ''}}>Чем заняться</option>
                                    <option value="where-to-buy" {{$item->category == 'where-to-buy' ? 'selected' : ''}}>Где покупать</option>
                                    <option value="where-to-eat" {{$item->category == 'where-to-eat' ? 'selected' : ''}}>Где поесть</option>
                                    <option value="where-to-stay" {{$item->category == 'where-to-stay' ? 'selected' : ''}}>Где остановиться</option>
                                    <option value="how-to-get" {{$item->category == 'how-to-get' ? 'selected' : ''}}>Как добраться</option>
                                    <option value="useful-information" {{$item->category == 'useful-information' ? 'selected' : ''}}>Полезная информация</option>
                                </select>
                        </div>
                        <div>Превью Карточки</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5">{{$item->desc}}</textarea>
                    </div>
                        <div class="form-group">
                            <p>Изображение объекта(Ресторана, парка тд тп).</p>
                            <input type="file" name="image">
                        </div>
                        <textarea name="about" id="summernote">{!!$item->about!!}</textarea>
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
