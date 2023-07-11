@extends('layouts.app')

@section('title', 'Ubah Postingan')

@section('content')
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
  <form action="{{ url('posts/'.$post->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">hapus</button>
  </form>
@endsection