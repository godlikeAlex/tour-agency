@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание объекта для города</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Название объекта">
                        </div>
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова">
                        </div>  
                        <div class="form-group">
                                <label for="exampleSelect1">Город в котором находиться объект.</label>
                                <select name="city_id" class="form-control" id="exampleSelect1">
                                    @foreach($citys as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Язык контент.</label>
                                <select name="lang" class="form-control" id="exampleSelect1">
                                        <option value="ru">Русский язык</option>
                                        <option value="en">Английский язык</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Ценновая категория использовать только для Ресторанов и Отелей в остальных случаях оставлять пустым полем.</label>
                                <select name="category_price" class="form-control" id="exampleSelect1">
                                        <option value="">Без ценовой категории</option>
                                        <option value="cheap">Дешевый</option>
                                        <option value="middle">Средний</option>
                                        <option value="expensive">Дорогой</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Тип объекта.</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="history">История</option>
                                    <option value="what-to-see">Что посмотреть</option>
                                    <option value="things-to-do">Чем заняться</option>
                                    <option value="where-to-buy">Где покупать</option>
                                    <option value="where-to-eat">Где поесть</option>
                                    <option value="where-to-stay">Где остановиться</option>
                                    <option value="how-to-get">Как добраться</option>
                                    <option value="useful-information">Полезная информация</option>
                                </select>
                        </div>
                        <div>Превью Карточки</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5"></textarea>
                    </div>
                        <div class="form-group">
                            <p>Изображение объекта(Ресторана, парка тд тп).</p>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea name="preview" class="form-control" rows="5" placeholder="Краткое описание объекта для превью"></textarea>
                        </div>
                        <textarea name="about" id="summernote"></textarea>
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
        placeholder: 'Полное описание объекта',
        tabsize: 2,
        height: 400
      });
</script>

@endsection
