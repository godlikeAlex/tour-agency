@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание категории для Узбекистана</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Название категории">
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
                                    <option value="geo">География</option>
                                    <option value="history">История</option>
                                    <option value="peoples">Народы</option>
                                    <option value="art">Искусства</option>
                                    <option value="fashion">Мода</option>
                                    <option value="art">Искусства</option>
                                    <option value="painting">Картины</option>
                                    <option value="kitchen">Кухня</option>
                                    <option value="culture">Культура</option>
                                    <option value="tradition">Традиции</option>
                                </select>
                        </div>     
                        <div class="form-group">
                            <p>Указывать через запятую (keyword1, keyword2, keyword3)</p>
                            <input type="text" name="keywords" class="form-control" placeholder="Ключевые слова">
                        </div>  
                        <div class="form-group">
                            <p>SEO DESC</p>
                            <input type="text" name="seo_desc" class="form-control" placeholder="SEO DESC">
                        </div>  
                        <div class="form-group">
                            Картинка картоки
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            Описание для карточки (100 символов)
                            <textarea name="desc" type="text" class="form-control" rows="7"></textarea>
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
        placeholder: 'О городе',
        tabsize: 2,
        height: 700
      });
</script>

@endsection
