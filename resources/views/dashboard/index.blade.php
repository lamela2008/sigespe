@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Dashboard
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class='page-header'>
            <div class='btn-toolbar pull-right'>
                <div class='btn-group'>
                    <a class='btn btn-primary' href="#">Preloader</a>
                    <a class='btn btn-primary' href="{{ route('sentinel.users.create') }}">Create User</a>
                </div>
            </div>
            <h1>Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>User</th>
                <th>Status</th>
                <th>Options</th>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
    </div>
@stop
