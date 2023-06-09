@extends('backend.layout.master')
@section('content')

            <div class="container">
                <h2>New Blog</h2>
                <a href="{{ route('blog.index') }}" class="btn btn-secondary btn-sm mb-3">Back</a>
                <div class="card my-3">
                    <div class="card-header bg-primary">
                        Create New Blog
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" id="name" />
                            </div>

                            <div class="mb-3">
                              <label for="description" class="form-label">Description</label>
                              <input type="text" name="description" class="form-control" id="desc" />
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputFile" />
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <select name="author_id" id="author_id" class="form-select">
                                    @foreach ($data as $val)
                                        <option value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @endsection
