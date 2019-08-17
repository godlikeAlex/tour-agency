@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить в галерея</div>

                <div class="card-body">
                    <form action="{{route('galery.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Название фотографии">
                        </div>     
                        <div class="form-group">
                            <label for="exampleSelect1">Язык контента</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option>en</option>
                                <option>ru</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Категория</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="khiva-khanate">Хивинское ханство </option>
                                <option value="kokand-khanate">Кокандское  ханство</option>
                                <option value="bukhara-emirate">Бухарский эмират</option>
                                <option value="turkestan-assr">Туркестанское АССР</option>
                                <option value="jadidism">Джадидизм </option>
                                <option value="stalin-period">Сталинский период</option>
                                <option value="khrushchevsky-period">Хрущевский период</option>
                                <option value="brezhnevsky-period">Брежневский период</option>
                                <option value="restructuring">Перестройка</option>
                                <option value="republic-of-uzbekistan">Республика Узбекистан </option>
                                <option value="present">Настоящее</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                            <div for="coverex">Фото</div>
                            <input type="file" name="image">
                        </div>
                        <div>Описание</div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea class="form-control" name="desc" rows="5"></textarea>
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

@endsection
