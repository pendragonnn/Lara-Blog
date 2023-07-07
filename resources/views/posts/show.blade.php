<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog | {{ $post[1] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <article class="blog-post">
      <h2 class="display-5 link-body-emphasis mb-1">{{ $post[1] }}</h2>
      <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post[3])) }}</p>

      <p>{{ $post[2] }}</p>
    </article>
    <a href="{{ url("posts") }}" class="btn btn-primary">< Kembali</a>
  </div>
</body>
</html>