@extends('templates.main')

@section('title_page')
    Roles
@endsection

@section('breadcrumb_title')
    roles
@endsection

@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">New Role</div>
            <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-undo"></i> Back</a>
          </div>
          <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
              @csrf

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" name="name" class="form-control" autofocus>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="guard_name">Guard Name</label>
                    <input type="text" name="guard_name" class="form-control">
                  </div>
                </div>
              </div>
              
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
@endsection