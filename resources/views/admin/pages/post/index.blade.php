@extends('admin.layout.app')
@section('title', 'posts')
@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-primary">create</a>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Featured</th>
            <th>Published</th>
            <th>Image</th>
            <th>Views</th>
            <th>Created_at</th>
            <th>ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->featured }}</td>
                    <td>{{ $post->published }}</td>
                    <td><img src="{{ asset($post->image) }}" width="50px" height="50px" alt=""></td>
                    <td>{{ $post->views }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('posts.delete', $post->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-post btn btn-danger" type="submit">delete</button>
                        </form> </td>
                       <td> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">update</a> </td>
                      <td>  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">show</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


