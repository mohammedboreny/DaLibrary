@extends('book.index');

@section('content')
    <div class="container">

        @foreach ($books as $book)
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src={{ $book->book_image }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->book_title }}</h5>
                        <p class="card-text">{{ $book->book_description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: {{ $book->book_author }}</li>
                    </ul>
                </div>
        @endforeach
    @endsection
