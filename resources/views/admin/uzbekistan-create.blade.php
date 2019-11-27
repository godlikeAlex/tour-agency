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
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESCRIPTION</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO Desc">
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Категория</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    @foreach($categories as $category)
                                        <option value="{{$category->slug}}">{{$category->name}} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Под категория</label>
                                <select name="category" class="form-control" id="exampleSelect1">
                                    <option value="" disabled>-Узбекистан </option>
                                    <option value="geo">География</option>
                                    <option value="history">История</option>
                                    <option value="people">Народ</option>
                                    <option value="" disabled>-Искусства</option>
                                    <option value="art">Исскуство</option>
                                    <option value="fashion">Мода</option>
                                    <option value="painting">Живопись</option>
                                    <option value="" disabled>-Культура</option>
                                    <option value="culture">Культура</option>
                                    <option value="kitchen">Кухня </option>
                                    <option value="traditions">Традиции </option>

                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Язык контент.</label>
                                <select name="lang" class="form-control" id="exampleSelect1">
                                        <option value="ru">Русский язык</option>
                                        <option value="en">Английский язык</option>
                                </select>
                        </div>
                        <div>Превью Карточки</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5"></textarea>
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
