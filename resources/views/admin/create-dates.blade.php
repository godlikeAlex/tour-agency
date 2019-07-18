@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="display: flex;
    justify-content: space-between;">
                <a href="/admin/tour/dates/all">
                    Все туры
                </a>
                
                <a href="/admin/tour/dates/create">
                    Добавить дату для тура
                </a>
                <a href="/admin/tour/create">
                    Создать тур
                </a>
            </div>
            <div class="card" style="margin-top:25px">
                <div class="card-header">Добавить дату для тура</div>

                <div class="card-body">
                    <form action="{{route('date.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf  
                        <div class="form-group">
                            <label for="exampleSelect1">Тур</label>
                            <select name="tour_id" class="form-control" id="exampleSelect1">
                                @foreach($tours as $tour)
                                    <option value="{{$tour->id}}">{{$tour->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"><input type="text" name="price[]" class="form-control" placeholder="Цена" id=""></div>
                        <div id="containerDate">
                            <div class="form-group">
                                Начинается
                                <input type="text" class="form-control" name="starts[]" placeholder="starts date">
                            </div>
                            <div class="form-group">
                                Кончается
                                <input type="text" class="form-control" name="ends[]" placeholder="ends date">
                            </div>
                            <div class="form-group">
                                <label>Свободные места</label>
                                <input class="form-control" type="text" name="places[]" id="" placeholder="Свободные места"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Статус</label>
                                <select name="status[]" class="form-control" id="exampleSelect1">
                                    <option value="avaliable">available</option>
                                    <option value="closed">сlosed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="lang[]" placeholder="Язык">
                            </div>
                        </div>
                        <div id="addDate" class="form-group"><div class="btn btn-success">Добавить дату</div></div>
                        <div class="form-group" style="display: flex; justify-content: center;"><button type="submit" class="btn btn-success">Опубликовать</button></div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>
    const addDate = document.querySelector('#addDate');
    addDate.addEventListener('click', () => {
        const template = '<div class="form-group"><input type="text" name="price[]" class="form-control" placeholder="Цена" id=""></div> <div class="form-group"> Начинается <input type="text" class="form-control" name="starts[]" placeholder="starts date"> </div> <div class="form-group"> Кончается <input type="text" class="form-control" name="ends[]" placeholder="ends date"> </div> <div class="form-group"> <label for="exampleSelect1">Статус</label> <select name="status[]" class="form-control" id="exampleSelect1"> <option value="avaliable">available</option> <option value="closed">сlosed</option> </select> </div> <div class="form-group"> <input class="form-control" type="text" name="lang[]" placeholder="Язык"> </div>';
        document.querySelector('#containerDate').innerHTML += template;
    })
</script>

@endsection
