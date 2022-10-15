@extends('book.index');
@section('content')
    <form class="col-4-8" action="/book" method="POST">
        @csrf
        <div class="container ">
            <div class="mb-3 col-4-8">

                <label for="formGroupExampleInput" class="form-label">Title</label>
                <input type="text" name='title' class="form-control" id="formGroupExampleInput"
                    placeholder="Example input placeholder">
            </div>
            <div class="mb-3 col-4-8">
                <label for="formGroupExampleInput2" name class="form-label">Description label</label>
                <input type="text" name="description" class="form-control" id="formGroupExampleInput2"
                    placeholder="Another input placeholder">
            </div>
            <div class="mb-3 col-4-8">
                <label for="formGroupExampleInput" class="form-label">Author</label>
                <input type="text" name='author' class="form-control" id="formGroupExampleInput"
                    placeholder="Example input placeholder">
            </div>
            <div class="mb-3 col-4-8">
                <label for="formGroupExampleInput2" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="book_image">

            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
@endsection
