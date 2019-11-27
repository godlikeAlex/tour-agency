@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создать человека</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Имя человека">
                        </div>    
                        <div class="form-group">
                            <label for="exampleSelect1">Язык контента</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option>en</option>
                                <option>ru</option>
                            </select>
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
                            <label for="exampleSelect1">Класс человека</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="drevniy-mir">Древний мир</option>
                                <option value="srednie-veka">Средние века</option>
                                <option value="novoe-vremya">Новое время</option>
                                <option value="sovremenost">Современость</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                            <div for="coverex">Фото человека (Обложка блога)</div>
                            <input type="file" name="image" id="coverex">
                        </div>
                        <div>Мини описание человека</div>
                        <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                            <textarea class="form-control" name="desc" rows="5"></textarea>
                        </div>
                        <textarea name="body" id="summernote"></textarea>
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
        placeholder: 'О человеке',
        tabsize: 2,
        height: 100
      });
</script>

@endsection
