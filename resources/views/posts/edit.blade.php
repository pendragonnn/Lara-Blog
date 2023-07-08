<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog | Ubah Postingan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Ubah Postingan</h1>
  <form method="POST" action="{{ url('posts/'.$post->id) }}" class="container">
    @method('PATCH')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Konten</label>
      <textarea class="form-control" id="content" rows="3" name="content" placeholder="{{ $post->content }}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">simpan</button>
  </form>
</body>
</html>