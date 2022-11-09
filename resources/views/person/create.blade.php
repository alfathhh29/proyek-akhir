@extends('layouts.main')

@section('first-content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="card my-3">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('person.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-controller" placeholder="masukan Nama A">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-controller" placeholder="nama@email.com">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btm-success">
            </div>
        </form>
    </div>
</div>
@endsection
