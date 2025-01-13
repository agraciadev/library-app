@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __("messages.books_create")  }}</h1>
            </div>
            <div class="col-md-12">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{ __("messages.title")  }}</label>
                        <input type="text"
                               id="title"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}"
                               required>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">{{ __("messages.author")  }}</label>
                        <input type="text"
                               id="author"
                               name="author"
                               class="form-control @error('author') is-invalid @enderror"
                               value="{{ old('author') }}"
                               required>
                        @error('author')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __("messages.submit")  }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
