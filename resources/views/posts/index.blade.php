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
    <h1>Lara Blog</h1>
    <div>
      @foreach($posts as $post)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post[0] }}</h5>
          <p class="card-text">{{ $post[0] }}</p>
          <p class="card-text"><small class="text-muted">Last update 3 minutes ago</small></p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>