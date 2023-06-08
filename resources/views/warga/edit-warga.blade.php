@extends('layout/main')

@section('content')
    
<h3>Edit Warga</h3>
<a href="/warga" class="btn btn-sm btn-outline-primary mt-3" title="ke data warga">Kembali</a>
<form action="{{ '/warga/' . $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3 col-6 mt-3">
        <h4>ID WARGA : {{ $data->id }}</h4>
    </div>
    <div class="mb-3 col-6 mt-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="{{ $data->umur }}">
        </div>
        <div class="mb-3 col-6 mt-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="" selected>--PILIH--</option>
                <option value="menikah" {{ $data->status == 'menikah' ? 'selected' : null }}>Menikah</option>
                <option value="lajang" {{ $data->status == 'lajang' ? 'selected' : null }}>Lajang</option>
                <option value="cerai" {{ $data->status == 'cerai' ? 'selected' : null }}>Cerai</option>
                <option value="Pelajar" {{ $data->status == 'Pelajar' ? 'selected' : null }}>Pelajar</option>
            </select>
        </div>
        @if ($data->foto)
            <div class="mt-2">
                <img src="{{ url('image').'/'. $data->foto }}" alt="" width="60px" class="rounded-circle">
            </div>
        @endif
        <div class="mb-3 col-6">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
    </form>
@endsection