@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-primary my-4">
            Posts
        </h2>

        <div class="card">
            <div class="card-header">
                {{ $posts->links() }}
            </div>

            <div class="card-body overflow-auto">
                <table class="table table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-primary col-1">#</th>

                            <th scope="col" class="text-primary col-2">Title</th>

                            <th scope="col" class="text-primary col-4">Body</th>

                            <th scope="col" class="text-primary text-center col-1">Reading Time</th>

                            <th scope="col" class="text-primary text-center col-1">Archived</th>

                            <th scope="col" class="text-primary text-center col-3">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row" class="col-1">{{ $post['id'] }}</th>

                                <td class="col-2">{{ $post['title'] }}</td>

                                <td class="col-4">{{ $post['body'] }}</td>

                                <td class="text-center col-1">
                                    {{ $post['reading_time'] . ' ' . ($post['reading_time'] == 1 ? 'minute' : 'minutes') }}
                                </td>

                                <td class="text-center col-1">{{ $post['is_archived'] ? 'Yes' : 'No' }}</td>

                                <td class="text-center col-3">
                                    <menu class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>

                                        <a href="" type="button" class="btn btn-sm btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <a href="" type="button" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </menu>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
