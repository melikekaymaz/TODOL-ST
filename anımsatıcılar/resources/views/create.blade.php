<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LİST</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TODO LİST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      
        <a class="nav-link" href="#">&&</a>
        <a href="{{route('form')}}" class="nav-link" href="#">NOTLARIM</a>
      
      </div>
    </div>
  </div>
</nav>


<div id="clock" style="float-center"></div> <script type="text/javascript">
function refrClock()
{
var d=new Date();
var s=d.getSeconds();
var m=d.getMinutes();
var h=d.getHours();
var day=d.getDay();
var date=d.getDate();
var month=d.getMonth();
var year=d.getFullYear();
var days=new Array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi");
var months=new Array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
if (s<10) {s="0" + s}
if (m<10) {m="0" + m}
document.getElementById("clock").innerHTML= "<b>Tarih:</b> " + date + " " + months[month] + " " + year + " "  +days[day]+ "</b> | <b>Saat:</b> " + h + ":" + m + ":" + s + " "
setTimeout("refrClock()",1000);
}
refrClock();
</script>





    <br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-white">
                <div class="card-body">
              
                    <form action="/todos/store" method="POST">
                        @csrf
                     
                        <input type="text" class="form-control add-task" placeholder="Yeni Görev.."  name="task" >
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
</div>
                    </form>
                    <ul class="nav nav-pills todo-nav">
              
                    
                  <li role="presentation" class="nav-item all-task active"><a href="#" class="nav-link">Tüm Görevler</a></li>

                  <li role="presentation" class="nav-item active-task"><a href="#" class="nav-link">Aktif Olan Görevler</a></li>
                        <li role="presentation" class="nav-item completed-task"><a href="#" class="nav-link">Biten Görevler</a></li>
                        
                    </ul>
                    <div class="todo-list">
                        
                        
                   
                      
                           


                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                    
                        
  
  



                           

                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        
                        
   
                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        
                        @foreach($datas as $data)
                        <div class="todo-item">
                            <div class="checker"><span class=""><input type="checkbox" class="ck"></span></div>
                            <span>{{$data->task}}</span>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('todos.destroy', [$data]) }}" method="post">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                           <button class="btn btn-danger me-md-2" type="submit" >Sil</button>
                           </form>

</div>
                       

                            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>


body{
    margin-top:20px;
    background: #f8f8f8;
}

.todo-nav {
    margin-top: 10px
}

.todo-list {
    margin: 10px 0
}

.todo-list .todo-item {
    padding: 15px;
    margin: 5px 0;
    border-radius: 0;
    background: #f7f7f7
}

.todo-list.only-active .todo-item.complete {
    display: none
}

.todo-list.only-active .todo-item:not(.complete) {
    display: block
}

.todo-list.only-complete .todo-item:not(.complete) {
    display: none
}

.todo-list.only-complete .todo-item.complete {
    display: block
}

.todo-list .todo-item.complete span {
    text-decoration: line-through
}

.remove-todo-item {
    color: #ccc;
    visibility: hidden
}

.remove-todo-item:hover {
    color: #5f5f5f
}

.todo-item:hover .remove-todo-item {
    visibility: visible
}

div.checker {
    width: 18px;
    height: 18px
}

div.checker input,
div.checker span {
    width: 18px;
    height: 18px
}

div.checker span {
    display: -moz-inline-box;
    display: inline-block;
    zoom: 1;
    text-align: center;
    background-position: 0 -260px;
}

div.checker, div.checker input, div.checker span {
    width: 19px;
    height: 19px;
}

div.checker, div.radio, div.uploader {
    position: relative;
}

div.button, div.button *, div.checker, div.checker *, div.radio, div.radio *, div.selector, div.selector *, div.uploader, div.uploader * {
    margin: 0;
    padding: 0;
}

div.button, div.checker, div.radio, div.selector, div.uploader {
    display: -moz-inline-box;
    display: inline-block;
    zoom: 1;
    vertical-align: middle;
}

.card {
    padding: 25px;
    margin-bottom: 20px;
    border: initial;
    background: #fff;
    border-radius: calc(.15rem - 1px);
    box-shadow: 0 1px 15px rgba(0,0,0,0.04), 0 1px 6px rgba(0,0,0,0.04);
}



</style>
<script>
   

   document.querySelectorAll('.ck').forEach(item=>{
    console.log(item)
    if(item.getAttribute('checker')==='checker'){
        console.log(item.innerText)
    }
   })

</script>
</body>
</html>