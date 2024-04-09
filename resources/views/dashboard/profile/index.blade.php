@extends('dashboard.layout')

@section('konten')

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                @if (get_meta_value('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset
                    ('foto').'/'.get_meta_value('_foto') }}">
                @endif
                <div class="mt-3 mb-2">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" 
                    name="_foto" id="_foto">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_kota" id="_kota" value="{{get_meta_value('_kota') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm"
                     name="_provinsi" id="_provinsi" value="{{get_meta_value('_provinsi') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_nohp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_nohp" id="_nohp" value="{{get_meta_value('_nohp') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm"
                     name="_email" id="_email" value="{{get_meta_value('_email')}}">
                </div>
            </div>
            <div class="col-5">
                <h3>Akun Media Sosial</h3>
                <div class="mt-3 mb-2">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_facebook" id="_facebook" value="{{get_meta_value('_facebook') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_twitter" id="_twitter" value="{{get_meta_value('_twitter') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_github" id="_github" value="{{get_meta_value('_github') }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="_linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control form-control-sm" 
                    name="_linkedin" id="_linkedin" value="{{get_meta_value('_linkedin') }}">
                </div>
            </div>
        </div>
        <button class="btn btn-outline-primary" name="simpan"type="submit">Simpan</button>
    </form>
@endsection


