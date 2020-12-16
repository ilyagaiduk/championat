@include('head')
<body>
<div class="container">
<div class="row">
   <div class="col-md-12">
       <h1 class="mt-5 mb-3">Участники студенческого чемпионата по волейболу</h1>
       <?php
       $i = 1;
       ?>
       <div>
           <h3>Добавить участника</h3>
       <form action="/add" method="post">
           @csrf
           <label for="forname">Имя участника</label>
           <input type="text" name="name" placeholder="Введите Имя" id="forname">
           <label for="foremail">Email участника</label>
           <input type="text" name="email" id="foremail" placeholder="Введите Email">
           <label for="forage">Возраст</label>
           <input type="text" name="age" id="forage" placeholder="Введите возраст">
           <button class="btn btn-success" type="submit">Добавить</button>
       </form>
       </div>
       <table class="table table-responsive">
           <thead>
           <th>№</th>
           <th>Имя</th>
           <th>Email</th>
           </thead>
           @foreach($data as $value)
           <tr>
               <td>
                   Участник №{{$i++}}
               </td>
               <td>{{$value->name}}</td>
               <td>{{$value->email}}</td>
               <td>
                   <form action="/edit" method="post">
                       @csrf
                       <input type="hidden" value="{{$value->id}}" name="id">
                       <button class="btn btn-secondary" type="submit">Редактировать</button>
                   </form>
               </td>
               <td>
                   <form action="/delete" method="post">
                       @csrf
                       <input type="hidden" value="{{$value->id}}" name="id">
                       <button class="btn btn-danger" type="submit">Удалить</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </table>
   </div>
</div>
</div>

</body>
@include('footer')

