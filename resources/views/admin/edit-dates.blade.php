@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        <div class="form-group">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">Начинается</th>
                                    <th scope="col">Кончается</th>
                                    <th scope="col">Цена</th>
                                    <th scope="col">Места</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Изменить</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dates as $date)
                                    <tr>
                                    <th scope="row">{{$date->starts}}</th>
                                    <td>{{$date->ends}}</td>
                                    <form action="{{route('date.update', [$date->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <td>
                                        <input type="text" name="price" class="form-control" value="{{$date->price}}" id="">
                                    </td>
                                    <td>
                                        <input type="text" name="places" class="form-control" value="{{$date->places}}" id="">
                                    </td>  
                                    <td>
                                        <select name="status" class="form-control" id="exampleSelect1">
                                            @if($date->status === 'avaliable')
                                                <option value="avaliable" >avalible</option>
                                                <option value="closed">closed</option>
                                            @else 
                                                <option value="closed" >closed</option>
                                                <option value="avaliable">avalible</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td><button type="submit" href="/admin/tour/dates/edit/{{$date->id}}" class="btn btn-primary">Изменить {{$date->id}}</button></td>
                                    </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                        </div>                  
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
