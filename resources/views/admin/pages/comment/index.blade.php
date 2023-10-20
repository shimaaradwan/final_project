@extends('admin.layout.app')
@section('title', 'comment')
@section('content')
<a href="{{ route('comments.create') }}" class="btn btn-primary">create New Comment</a>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Comment</th>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>User_id</th>
            <th>created_at</th>
            <th>ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->comment}}</td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->website }}</td>
                    <td>{{ $comment->user_id }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-post btn btn-danger" type="submit">delete</button>
                        </form> </td>
                       <td> <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-warning">update</a> </td>
                      <td>  <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">show</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


