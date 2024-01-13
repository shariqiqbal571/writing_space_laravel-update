@extends('custom_layout.master')
@section('title')
    Create - Permission
@endsection
@section('main_content')
<div class="col-lg-12 mx-auto">
    <a href="{{ route('permissions.index') }}" >Go Back</a>
</div>

<div class="row">
    <div class="col-md-6 col-xl-6 middle-wrapper">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Add Permission</h6>
                <form id="myForm" action="{{ route('permission.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Permission Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="edit.post, update.post">
                    </div> 
                    <div class="mb-3">
                        <label for="group_name" class="form-label">Group Name</label>
                        <select class="form-select" name="group_name">
                            <option selected="" disabled >Select Group</option>
                            <option value="posts">Post Management</option>
                            <option value="users">User Management</option>
                        </select>
                    </div>                       
                    <button type="submit" class="btn btn-primary me-2 px-4">Add Permission</button>
                </form>
                
                
            </div>
          </div>    

      </div>
</div>

@endsection
@section('customJs')
    <script></script>
@endsection