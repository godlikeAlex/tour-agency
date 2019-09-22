@extends('layouts.app')

@section('content')

<div class="container">
@if ($errors->any())
     @foreach ($errors->all() as $error)
     <div class="alert alert-danger col-md-12" role="alert">{{$error}}</div>
     @endforeach
 @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание тура</div>

                <div class="card-body">
                    <form action="{{route('tour.update.store', $tour->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{$tour->name}}" class="form-control" placeholder="Название тура">
                        </div>
                        <div class="form-group">
                            <input type="text" name="price" value="{{$tour->price}}" class="form-control" placeholder="Цена">
                        </div>  
                        <div class="form-group">
                            <input type="text" name="video" value="{{$tour->video}}" class="form-control" placeholder="ID Видео на ютубе">
                        </div> 
                        <div class="form-group">
                            <label for="exampleSelect1">Язык</label>
                            <select name="lang" class="form-control" id="exampleSelect1">
                                <option value="ru">ru</option>
                                <option value="en">en</option>
                            </select>
                        </div>    
                        <div class="form-group">
                            <label for="exampleSelect1">Тип блога</label>
                            <select name="category" class="form-control" id="exampleSelect1">
                                <option value="history-tours">Исторические туры </option>
                                <option value="short-tours">Короткие туры </option>
                                <option value="group-tours">Групповые туры </option>
                                <option value="individual-tours">Индивидуальные туры</option>
                                <option value="exclusive-tours">Эксклюзивные туры </option>
                                <option value="classic-tours">Классические туры</option>
                                <option value="eco-tours">Эко туры</option>
                                <option value="kombo-asia-tours">Комбинированные туры по Центральной Азии </option>
                                <option value="kombo-uz-kz-tours">Комбинированные туры по Узбекистану и Казахстану  </option>
                                <option value="kombo-uz-kg-tours">Комбинированные туры по Узбекистану и Кыргызстану</option>
                                <option value="kombo-uz-tm-tours">Комбинированные туры по Узбекистану и Туркменистану</option>
                                <option value="kombo-uz-tj-tours">Комбинированные туры по Узбекистану и Таджикистану </option>
                                <option value="excursion-сity">Экскурсии по городам </option>
                                <option value="pilgrim-tours">Паломнические туры</option>
                                <option value="economy-tours">Эконом туры </option>
                                <option value="cycling-tours">Велотуры</option>
                                <option value="buisnes-tours">Бизнес туры </option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                        <div for="coverex">Превью фото</div>
                        <input type="file" name="image" id="coverex">
                    </div>
                    <div>Превью Карточки</div>
                    <div class="form-group" style="padding-top:10px; padding-bottom:10px;">
                        <textarea class="form-control" name="desc" rows="5">{{$tour->desc}}</textarea>
                    </div>
                    <div class="form-group" style="display:flex; justify-content: space-between">
                        <input type="text" value="{{$tour->pdf}}" name="pdf" class="form-control col-md-5" placeholder="pdf link">
                        <input type="text" name="physical_rating" value="{{$tour->physical_rating}}" class="form-control col-md-5" placeholder="Нагрузка">
                    </div>
                    <div class="form-group">
                        <input type="text" name="days" value="{{$tour->days}}" class="form-control" id="days" placeholder="Кол-во дней тура">
                    </div>
                    <div class="form-group">
                        <h4>Особености</h4>
                        <div id="feature_container">
                            @foreach($tour->faeturs as $feature)
                                <div class="form-group"><input value="{{$feature->title}}" class="form-control" type="text" name="feature[]" placeholder="Особеность"></div>
                            @endforeach
                        </div>
                        <div class="form-group"><div id="addmorefeature" class="btn btn-success">Добавить еще 1 особеность</div></div>
                    </div>
                    <div class="form-group">
                        <p>Карта</p>
                        <input class="form-control" value="{{$tour->map}}" placeholder="ссылка на iframe" type="text" name="map" id="">
                    </div>
                    
                    <h4>Возраст</h4>
                    <div class="form-group" style="display:flex; justify-content: space-between">
                        <input type="text" value="{{$tour->age_from}}" name="age_from" class="form-control col-md-5" placeholder="От">
                        <input type="text" name="age_to" value="{{$tour->age_to}}" class="form-control col-md-5" placeholder="До">
                    </div>
                    <div class="form-group" style="display:flex; justify-content: space-between">
                        <input type="text" name="starts" value="{{$tour->starts}}" class="form-control col-md-5" placeholder="Начало тура">
                        <input type="text" name="ends"  value="{{$tour->ends}}" class="form-control col-md-5" placeholder="Конец тура">
                    </div>
                    <div class="form-group">
                        <h4>Галлерея</h4>
                        <div id="galery-images">
                            <div class="form-group">
                                1) <input type="file" name="galery[]">
                            </div>
                        </div>
                    </div>  
                    <div class="form-group">    
                        <div id="addmoreimage" class="btn btn-success">Добавить еще 1 фотографию</div>
                    </div>
                    <div class="form-group">
                        <textarea name="about" id="summernote">{!! $tour->about !!}</textarea>
                    </div>
                    <div class="form-group">
                        <h3>Описание дней в туре</h3>
                        <div id="days-container">
                            @foreach($tour->TourDatesAbout as $day)
                                <div class="form-group">
                                    <input value="{{$day->day_title}}"  style="margin-bottom:20px;" type="text" name="day_title[]" class="form-control" placeholder="День ${i}">
                                    <textarea id="day-about-{{$loop->iteration}}"  name="day_desc[]" id="day-about-${i}">{{$day->day_desc}}</textarea>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', e => {
                                        $(`#day-about-{{$loop->iteration}}`).summernote({
                                            placeholder: `О {{$loop->iteration}} дне тура`,
                                            tabsize: 2,
                                            height: 100
                                        });
                                    })
                                </script>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>Что входит</h4>
                        <div id="includes-container">
                            @foreach($tour->includes as $include)
                                <div class="form-group">
                                    <input value="{{$include->include_title}}" type="text" name="include_title[]" class="form-control" placeholder="Входит | Тайтл">
                                    <textarea name="include_desc[]" class="form-control" style="margin-top:25px;" rows="5" placeholder="Входит | описание">{{$include->include_desc}}</textarea>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                    <div class="form-group">    
                        <div id="addMoreIncludes" class="btn btn-success">Добавить еще 1 входит</div>
                    </div>
                    <div class="form-group">
                        <h4>Что не входит</h4>
                        <div id="dont_includes-container">
                            @foreach($tour->notIncludes as $notInclude)
                                <div class="form-group">
                                    <input type="text" value="{{$notInclude->dont_include_title}}" name="dont_include_title[]" class="form-control" placeholder="НЕ Входит | Тайтл">
                                    <textarea  name="dont_include_desc[]" class="form-control" style="margin-top:25px;" rows="5" placeholder="НЕ Входит |  описание">{{$notInclude->dont_include_desc}}</textarea>
                                </div>
                            @endforeach
                        </div>
                    </div> 
                    <div class="form-group">    
                        <div id="addMoreDontIncludes" class="btn btn-success">Добавить еще 1 НЕ входит</div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Создать</button>
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
      $('#summernote').summernote({
        placeholder: 'О туре',
        tabsize: 2,
        height: 100
      });
</script>

<script>
    const addImg = document.querySelector('#addmoreimage');
    const containerImages = document.querySelector('#galery-images');
    let counterImg = 2;
    addImg.addEventListener('click', () => {
        const inputTemplate = `<div class="form-group">${counterImg}) <input type="file" name="galery[]"></div>`;
        containerImages.innerHTML += inputTemplate;
        counterImg++;
    });
    days.addEventListener('input', e => {
        const containerDays = document.querySelector('#days-container');
        containerDays.innerHTML = '';
        for(let i = 1; i <= e.target.value; i++) {
            const dayTemplate = `<div class="form-group"><input style="margin-bottom:20px;" type="text" name="day_title[]" class="form-control" placeholder="День ${i}"><textarea  name="day_desc[]" id="day-about-${i}"></textarea></div>`;
            let div = document.createElement('div'); div.classList.add('form-group');
            let input = document.createElement('input'); input.style.marginBottom = '20px'; input.setAttribute('type', 'text');
            input.setAttribute('name', 'day_title[]'); input.classList.add('form-control'); input.setAttribute('placeholder', `День ${i}`);
            let textArea = document.createElement('textarea'); textArea.setAttribute('name', 'day_desc[]'); textArea.setAttribute('id', `day-about-${i}`);
            div.appendChild(input); div.appendChild(textArea);
            containerDays.appendChild(div);
            $(`#day-about-${i}`).summernote({
                placeholder: `О ${i} дне тура`,
                tabsize: 2,
                height: 100
            });
        }
    });

    const addMoreIncludes   = document.querySelector('#addMoreIncludes');
    const containerIncludes = document.querySelector('#includes-container');
    const templateIncludes  =  `<div class="form-group"> <input type="text" name="include_title[]" class="form-control" placeholder="Входит | Тайтл"> <textarea  name="include_desc[]" class="form-control" style="margin-top:25px;" rows="5" placeholder="Входит | описание"></textarea></div>`;
    const templateDontIncludes = '<div class="form-group"> <input type="text" name="dont_include_title[]" class="form-control" placeholder="НЕ Входит | Тайтл"><textarea  name="dont_include_desc[]" class="form-control" style="margin-top:25px;" rows="5" placeholder="НЕ Входит |  описание"></textarea></div>'
    const addMoreDontIncludes   = document.querySelector('#addMoreDontIncludes');
    const containerDontIncludes = document.querySelector('#dont_includes-container');
    const render = (template, container) => {
        container.innerHTML += template;
    };

    addMoreIncludes.addEventListener('click', () => { render(templateIncludes, containerIncludes) });
    addMoreDontIncludes.addEventListener('click', () => { render(templateDontIncludes, containerDontIncludes) });

    const addMoreFeature = document.querySelector('#addmorefeature')
    const featureContainer = document.querySelector('#feature_container');
    const featureTemplate = '<div class="form-group"><input class="form-control" type="text" name="feature[]" placeholder="Особеность"></div>'
    addMoreFeature.addEventListener('click', () => {
        featureContainer.innerHTML += featureTemplate;
    });
</script>
    
@endsection
