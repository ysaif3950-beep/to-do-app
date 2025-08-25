@extends('layout.app')
@section('content')
    <div class="col-12">
            <a href="{{url('posts/create')}}" class="btn btn-primary my-3 " >Add New Post</a>
          <h1 class="p-3 border text-center my-3">All posts</h1>
        </div>

        <div class="col-12">
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
              <tr>
                <td>1</td>
                <td>First</td>
                <td>First description</td>
                <td>Saif</td>
                <td>
                  <a href="{{url('posts/1/edit')}}" class="btn btn-info btn-sm">Edit</a>
                </td>
                <td>
                  <form action="#" method="post" class="d-inline">
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
@endsection
