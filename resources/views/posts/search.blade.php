@extends('layout.app')

@section('content')
<div class="col-12">
    <h2>نتائج البحث</h2>

    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->description }}</p>
                    <a href="{{url('posts/' .$post->id)}}" class="btn btn-primary">Show post</a>
                </div>
            </div>
        @endforeach
    @else
        <p>لا توجد نتائج للبحث</p>
    @endif

</div>
@endsection
