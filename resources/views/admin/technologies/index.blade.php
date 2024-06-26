@extends('layouts.app')

@section('title', 'Technologies List Admin')

@section('content')
    <div class="container">
        <header class="d-flex justify-content-between align-items-center">
            <h1 class="mt-4 text-uppercase text-danger">Lista Tecnologie</h1>
            <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                <a href="{{ route('admin.projects.trash') }}" class="btn btn-secondary">Vedi Cestino<i
                        class="far fa-trash-can ms-2"></i></a>
            </div>
        </header>
        <div class="card p-3 shadow-lg mt-3">
            <table class="table table-dark table-striped table-hover mt-4">
                <thead>
                    <tr class="text-uppercase">
                        <th class="text-warning" scope="col">#</th>
                        <th class="text-warning" scope="col">Label</th>
                        <th class="text-warning" scope="col">Color</th>
                        {{-- <th class="text-warning" scope="col">Data creazione</th>
                        <th class="text-warning" scope="col">Ultima modifica</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($technologies as $technology)
                        <tr>
                            <th scope="row">{{ $technology->id }}</th>
                            <td>{{ $technology->label }}</td>
                            <td>
                                <span class="badge rounded-pill text-bg-{{ $technology->color }}">{{ $technology->color }}</span>
                            </td>
                            {{-- <td>{{ $type->getCreatedAt() }}</td>
                            <td>{{ $type->getUpdatedAt() }}</td> --}}
                            <td>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.technologies.create') }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="post"
                                        class="delete-form" data-bs-toggle="modal" data-bs-target="#modal">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="far fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <h3>Non ci sono progetti al momento</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    {{-- MODALE --}}
    @vite('resources/js/modal.js')
@endsection
