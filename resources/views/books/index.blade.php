@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1>{{ __("messages.books")  }}</h1>
            </div>
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('books.create')  }}">{{ __("messages.create")  }}</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __("messages.title")  }}</th>
                        <th scope="col">{{ __("messages.author")  }}</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <a class="btn btn-primary"
                                   href="{{ route('books.edit', $book->id)  }}">{{ __("messages.edit")  }}</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('{{ __("messages.confirm_delete_book")  }}');">
                                        {{ __("messages.delete")  }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
