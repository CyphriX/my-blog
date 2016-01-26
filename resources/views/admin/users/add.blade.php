@extends('layouts.base')

@section('content')


<!-- TODO: MOVE TO STYLESHEET -->
<style>
    legend {
        margin-bottom: 0px;
    }

    label {
        margin-top: 15px;
    }

    button {
        margin-top: 15px;
    }

    .alert-warning {
        padding: 2px;
    }

    .user-form-container {
        padding: 10px 20px 20px 20px;
        border: solid black 1px;
        box-shadow: 1px 1px 4px black;
    }
</style>
<!-- TODO: MOVE TO STYLESHEET -->



<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6" id="login_form">
            <form action="" method="post">
                {{ csrf_field() }}

                <h2>Add New User</h2>

                    <div class="user-form-container">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name">First Name</label>
                                <input class='form-control' type="text" id="first_name" name="first_name"
                                       title="Enter your first name" value="{{ \Input::old('first_name') }}">
                                @if(!empty($messages) && $messages->has('first_name'))
                                    <div class="alert alert-warning">
                                        {{ $messages->first('first_name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="last_name">Last Name</label>
                                <input class='form-control' type="text" id="last_name" name="last_name"
                                       title="Enter your last name" value="{{ \Input::old('last_name') }}">
                                @if(!empty($messages) && $messages->has('last_name'))
                                    <div class="alert alert-warning">
                                        {{ $messages->first('last_name') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <label for="display_name">Display Name</label>
                        <input class="form-control" type="text" id="display_name" name="display_name"
                               value="{{ \Input::old('display_name') }}">
                        @if(!empty($messages) && $messages->has('display_name'))
                            <div class="alert alert-warning">
                                {{ $messages->first('display_name') }}
                            </div>
                        @endif

                        <label for="email">E-mail Address</label>
                        <input class="form-control" type="email" id="email" name="email"
                               value="{{ \Input::old('email') }}">
                        @if(!empty($messages) && $messages->has('email'))
                            <div class="alert alert-warning">
                                {{ $messages->first('email') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input name="password" class="form-control" type="password">
                                @if(!empty($messages) && $messages->has('password'))
                                    <div class="alert alert-warning">
                                        {{ $messages->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="password_confirmation">Confirm Password</label>
                                <input name="password_confirmation" class="form-control" type="password">
                                @if(!empty($messages) && $messages->has('password_confirmation'))
                                    <div class="alert alert-warning">
                                        {{ $messages->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="role">User Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="user">User</option>
                                    <option value="author">Author</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Clear Form</button>
                    </div>
                </form>


            </div>

        <div class="col-md-3"></div>
    </div>
</div>

@endsection

@section('bodyscripts')
    <script>
        $('#first_name').focus();
    </script>
@endsection