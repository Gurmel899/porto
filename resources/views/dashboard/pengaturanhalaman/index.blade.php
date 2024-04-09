@extends('dashboard.layout')

@section('konten')

    <form action="{{ route('pengaturanhalaman.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select name="_halaman_about"class="form-control form-control-sm">
                    <option value=""> -pilih- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value
                        ('_halaman_about')== $item->id ?'selected' :'',}}>
                        {{$item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select name="_halaman_interest"class="form-control form-control-sm">
                    <option value=""> -pilih- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value
                        ('_halaman_interest')== $item->id ?'selected' :'',}}>
                        {{$item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Awards</label>
            <div class="col-sm-6">
                <select name="_halaman_awards"class="form-control form-control-sm">
                    <option value=""> -pilih- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value
                        ('_halaman_awards')== $item->id ?'selected' :'',}}>
                        {{$item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-outline-primary" name="simpan"type="submit">Simpan</button>
    </form>
@endsection


