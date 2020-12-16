@include('head')
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-5 mb-3">Редактирование участника {{$id}}</h1>
            @if(!empty($data->email))
                Данные участника с id {{$id}} изменены.
                @endif
            <form action="/edit" method="post">
                @csrf
                <input type="hidden" value="{{$id}}" name="id">
                <label for="forname">Имя участника</label>
                <input type="text" name="name" placeholder="Введите Имя" id="forname">
                <label for="foremail">Email участника</label>
                <input type="text" name="email" id="foremail" placeholder="Введите Email">
                <label for="forage">Возраст</label>
                <input type="number" name="age" id="forage" placeholder="Введите возраст">
                <button class="btn btn-success" type="submit">Изменить</button>
            </form>
        </div>
    </div>
</div>
</body>
@include('footer')
