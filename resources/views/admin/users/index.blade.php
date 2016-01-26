@extends('layouts.base')

@section('content')
<div class="container">
    <div class="panel panel-primary">
    	  <div class="panel-heading">
              <h3 class="panel-title">User Management</h3>
    	  </div>
    	  <div class="panel-body">
              <a href="{{ url('admin/users/add') }}"><span class="glyphicon glyphicon-plus"></span> Add a New User</a>
    	  </div>
    </div>
</div>
@endsection