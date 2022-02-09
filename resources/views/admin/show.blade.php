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

                    <form action="{{ route('admin.user.update', $user['id']) }}" method="post">
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
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Função</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="newRole" id="gridRadios1" value="admin" required>
                                <label class="form-check-label" for="gridRadios1">
                                    {{ __('Administrator') }}
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="newRole" id="gridRadios2" value="finance">
                                <label class="form-check-label" for="gridRadios2">
                                    {{ __('Finance') }}
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="newRole" id="gridRadios4" value="service">
                                <label class="form-check-label" for="gridRadios3">
                                    {{ __('Service Provider') }}
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="newRole" id="gridRadios4" value="support">
                                <label class="form-check-label" for="gridRadios3">
                                {{ __('Customer Service') }}
                                </label>
                                </div>
                            </div>
                            </div>
                        </fieldset>
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
