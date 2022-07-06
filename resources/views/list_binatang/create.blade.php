@extends('layouts.layout')
@php
$pageTitle = 'Tambah Binatang';
$page = 'list-binatang';
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="my-2">Tambah</h3>
                        <form id="fadd" action="{{ route('list-binatang.store') }}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label>Nama</label>
                                <input type="text" class="form-control" required name="nama_binatang">
                            </div>
                            <div class="mb-2">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" cols="30" rows="10" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" form="fadd" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
