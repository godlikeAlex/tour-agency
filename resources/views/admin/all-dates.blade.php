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
                <div class="card-header"> для тура</div>
                <div class="card-body">
                    <form action="{{route('date.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf  
                        <div class="form-group">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Название тура</th>
                                    <th scope="col">Изменить</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tours as $tour)
                                    <tr>
                                    <th scope="row">{{$tour->id}}</th>
                                    <td>{{$tour->name}}</td>
                                    <td><a href="/admin/tour/dates/edit/{{$tour->id}}" class="btn btn-primary">Изменить {{$tour->id}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                        </div>
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
        const template = ' <div class="form-group"> Начинается <input type="text" class="form-control" name="starts[]" placeholder="starts date"> </div> <div class="form-group"> Кончается <input type="text" class="form-control" name="ends[]" placeholder="ends date"> </div> <div class="form-group"> <label for="exampleSelect1">Статус</label> <select name="status[]" class="form-control" id="exampleSelect1"> <option value="avaliable">available</option> <option value="closed">сlosed</option> </select> </div> <div class="form-group"> <input class="form-control" type="text" name="lang[]" placeholder="Язык"> </div>';
        document.querySelector('#containerDate').innerHTML += template;
    })
</script>

@endsection
