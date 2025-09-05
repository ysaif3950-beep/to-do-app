@extends('layout.app')
@section('content')
    <div class="col-12">
            <a href="{{ route('users.create') }}" class="btn btn-primary my-3 " >Add New User</a>
          <h1 class="p-3 border text-center my-3">All Users</h1>
        </div>

        <div class="col-12">
                @include('layout.message')
          <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Writer</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->type}}</td>
                <td>
                  <a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-sm">Edit</a>
                </td>
                <td>
                  <form action="{{route('users.destroy', $user->id)}}" method="post" class="d-inline">
                    @method('Delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                  </form>
                </td>
              </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <div class="col-12">
          {{ $users->links() }}
        </div>
@endsection
