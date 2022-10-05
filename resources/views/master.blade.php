<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<body>
<div class="flex-container">
    <form action="{{route('kanbans.store')}}" method="post">
      <input type="text" name="title" placeholder="Write your task....">
      <button type="submit">Add</button>
    </form>
</div>
<div class="flex-container">
  <div id='todo'>
    <section><label for="">To Do</label></section>
    <ul>
        @foreach ($todos as $kanban)
        <li>  
          <div class='tooltip'>
            <label for="">{{$kanban->title}}</label>
            <div class='tooltiptext'>
              <form action="{{route('todoToInprogress', $kanban->id)}}" method="post">
                <button type='submit'>In Progress</button>
              </form>
              <form action="{{route('todoToDone', $kanban->id)}}" method="post">
                <button type='submit'>Done</button>
              </form>
            </div>
          </div>
        </li> 
        @endforeach
    </ul>
  </div>
  <div>
    <section><label for="">In Progress</label></section>
    <div id='inprogress'>
      <ul>
        @foreach ($todoToInprogress as $kanban)
          <li> {{$kanban->title}} </li> 
        @endforeach
      </ul>
    </div>
  </div>
  <div>
    <section><label for="">Done</label></section>
    <div id='done'>
      <ul>
        @foreach ($todoToDone as $kanban)
          <li> {{$kanban->title}} </li> 
        @endforeach
      </ul>
    </div>
  </div>
</div>
</body>
</html>
