@extends('layouts.layout')
@php
$pageTitle = 'Edit Data';
$page = 'list-binatang';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit {{ $dt->nama_binatang }}</h5>
                        <form id="fedit" action="{{ route('list-binatang.update', $dt->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="mb-2">
                                <label>Nama</label>
                                <input type="text" value="{{ $dt->nama_binatang }}" class="form-control" required
                                    name="nama_binatang">
                            </div>
                            <div class="mb-2">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" cols="30" rows="10" required>{{ $dt->deskripsi }}</textarea>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit" form="fedit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
