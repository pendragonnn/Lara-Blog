<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <style>
    .blog {
      padding: 5px;
      border-bottom: 1px solid lightgray;
    }
    small {
      color: gray;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>
      Lara Blog
      <a class="btn btn-success" href="{{ url('posts/create') }}">+ Buat Postingan</a>
    </h1>
    
    <div>
      @foreach($posts as $post)
      <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
          <p class="card-text"><small class="text-muted">Last updated at {{ date('d M Y H:i', strtotime($post->created_at)) }} </small></p>
          <a href="{{ url('posts/'.$post->id) }}" class="btn btn-primary">Selengkapnya</a>
          <a href="{{ url('posts/'.$post->id) }}/edit" class="btn btn-warning">Edit</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>