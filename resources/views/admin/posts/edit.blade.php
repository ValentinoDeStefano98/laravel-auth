@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo del post" name="title" value="{{old('title', $post->title)}}">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenuto del post">
                        {{old('content', $post->content)}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="url" class="form-control" name="image" id="image" placeholder="Immagine del post" value="{{old('image', $post->image)}}"></input>
                </div>

                <button type="submit" class="btn btn-success">Modifica</button>
        </form>
    </div>
@endsection

@section('scripts')

@endsection