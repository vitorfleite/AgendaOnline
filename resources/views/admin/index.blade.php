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
                    <table class="table">
                        <tr>
                            <th>Permissão</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Função</th>
                            <th>Ação</th>
                            <th></th>
        
                        </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user['id']}}</td>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>{{ __($user['role']['role']) }}</td>
                            <td><a type="button" class="btn btn-primary" href="{{ route('admin.user.show', $user['id']) }}">Abrir</button></td>
                            <td><a type="button" class="btn btn-danger" href="{{ route('admin.user.destroy', $user['id']) }}">Excluir</button></td>
                        </tr>
                    @endforeach
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
