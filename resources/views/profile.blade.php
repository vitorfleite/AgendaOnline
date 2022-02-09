@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                        <div class="container">
                        <div class="form-group row">
                            <label for="input1" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" name="newName" class="form-control" id="input1" value="{{  $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input2" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" name="newEmail" class="form-control" id="input2" value="{{  $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" name="newPassword" class="form-control" id="input3" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
