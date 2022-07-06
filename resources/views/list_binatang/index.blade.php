@extends('layouts.layout')
@php
$pageTitle = 'List Binatang';
$page = 'list-binatang';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <a href="{{ route('list-binatang.create') }}" class="btn btn-success">
                    Tambah
                </a>
            </div>
        </div>
        <div class="row">
            @foreach ($binatang as $b)
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->nama_binatang }}</h5>
                            <p>
                                {{ $b->deskripsi }}
                            </p>
                            <form action="{{ route('list-binatang.delete', $b->id) }}" method="post"
                                id="fdel-{{ $b->id }}">
                                <input type="hidden" name="_method" value="delete">
                                @csrf
                            </form>
                            <a href="{{ route('list-binatang.edit', $b->id) }}" class="btn btn-link text-warning">Edit</a>
                            <button type="submit" form="fdel-{{ $b->id }}"
                                class="btn btn-link text-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
