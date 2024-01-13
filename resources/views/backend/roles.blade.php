@extends('custom_layout.master')
@section('main_content')
<div class="d-flex flex-column flex-column-fluid">
    @include('backend.layout.partials._roles', ['roles' => $roles, 'permissions' => $permissions,'permission_groups' => $permission_groups])
</div>
@endsection
