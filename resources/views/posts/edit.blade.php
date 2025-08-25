@extends('layout.app')
@section('content')
 <div class="col-12">
    <h1 class="p-3 border text-center my-3">Edit post info</h1>
</div>

<div class="col-8 mx-auto">
    <form action="{{ url('posts/store') }}" method="post" class="form border p-3">
        @csrf
        <div class="mb-3">
            <label for="">Post title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="">Post Description</label>
            <textarea class="form-control" name="description" rows="7"></textarea>
        </div>

        <div class="mb-3">
            <label for="">Writer</label>
            <select name="user_id" class="form-control">
                <option value="1">saif</option>
                <option value="2">yasser</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control bg-success text-white" value="Save">
        </div>
    </form>
</div>
@endsection
