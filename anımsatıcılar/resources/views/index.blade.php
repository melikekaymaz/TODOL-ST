<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>NOTE</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </head>
  <body>


    <div class="container-fluid p-4">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
          <br>
          <br>
          <h1 class="text-secondary"  style="font-family:ariel;">NOT DEFTERİM</h1>
          <br>
          <a href="/form"   style="font-family:ariel;">YENİ NOT EKLE</a>

          @foreach($posts as $post)
          <h3>{{$post->title}}</h3>
          <div>{!!$post->descrition!!}</div>
            @endforeach


          
        </div>
      </div>
    </div>


<script>
      $('#summernote').summernote({
        placeholder: 'descrition...',
        tabsize: 2,
        height: 250
      });
    </script>
  </body>
</html>