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
                            <input type="text" name="name" class="form-control" placeholder="Название">
                        </div>
                        <!-- <div class="form-group">
                                <label for="exampleSelect1">Категория</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="uzb">Узбекистан </option>
                                    <option value="tourism">Туризм</option>
                                    <option value="arts">Искусства</option>
                                    <option value="culture">Культура</option>
                                </select>
                        </div> -->
                        <div class="form-group">
                                <label for="exampleSelect1">Под категория</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="" disabled>-Узбекистан </option>
                                    <option value="geo">География</option>
                                    <option value="history">История</option>
                                    <option value="people">Люди</option>
                                    <option value="" disabled>-Туризм </option>
                                    <option value="visa">Виза</option>
                                    <option value="eco">Экология</option>
                                    <option value="transport">Транспорт</option>
                                    <option value="" disabled>-Искусства</option>
                                    <option value="literature">Литература</option>
                                    <option value="architecture">Архитектура</option>
                                    <option value="music">Музыка</option>
                                    <option value="teatr">Театр</option>
                                    <option value="painting">Живопись</option>
                                    <option value="poetry">Поэзия</option>
                                    <option value="" disabled>-Культура</option>
                                    <option value="kitchen">Кухня </option>
                                    <option value="clothing">Одежда </option>
                                    <option value="religion">Религия </option>
                                    <option value="holidays">Праздники </option>
                                    <option value="sufism">Суфизм  </option>
                                    <option value="lang">Язык  </option>

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
                            <p>Изображение объекта</p>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea name="about" class="form-control" id="summernote"></textarea>
                        </div>
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
