@extends('custom_layout.master')

@section('main_content')
{{ bankCode(4); }}
    <div class="d-flex flex-column flex-column-fluid">
        @include ('backend.layout.partials._permission', ['permissions' => $permissions])
    </div>
@endsection
