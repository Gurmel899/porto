@extends('dashboard.layout')
@section('konten')
    <div class="pb3"><a href="{{ route('halaman.index') }}"class="btn btn-outline-secondary">
       << kembali</a>
 </div>
    <form action="{{ route('halaman.store') }}" method="POST">
        @csrf
        <div class="mt-3 mb-2">
            <label for="judul" class="form-label">Judul</label>
            <input type="text"class="form-control form-control-sm"name="judul"id="judul"
            aria-describedby="helpId"
            placeholder="judul" value="{{ Session::get('judul') }}"/>
        </div>
        <div class="mt-3 mb-2">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" name="isi"rows="5">{{ Session::get('isi')}}</textarea>
        </div>
        <button class="btn btn-outline-primary" name="simpan"type="submit">Simpan</button>
    </form>
@endsection