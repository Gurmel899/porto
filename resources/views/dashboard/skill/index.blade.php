@extends('dashboard.layout')

@section('konten')

    <form action="{{ route('skill.update') }}" method="POST">
        @csrf
        <div class="mt-3 mb-2">
            <label for="judul" class="form-label">PROGRAMMING LANGUAGES & TOOLS</label>
            <input type="text"class="form-control form-control-sm skill"name="_language"id="judul"
            aria-describedby="helpId"
            placeholder="PROGRAMMING LANGUAGES & TOOLS" value="{{ get_meta_value
            ('_language')}}"/>
        </div>
        <div class="mt-3 mb-2">
            <label for="isi" class="form-label">WORKFLOW</label>
            <textarea class="form-control summernote" name="_workflow"rows="5">{{ get_meta_value ('_workflow')}}</textarea>
        </div>
        <button class="btn btn-outline-primary" name="simpan"type="submit">Simpan</button>
    </form>
@endsection

@push('child-scripts')
<script>
    $(document).ready(function() {
        $('.skill').tokenfield({
            autocomplete: {
                source: [{!! $skill !!}],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    });
  </script>
@endpush