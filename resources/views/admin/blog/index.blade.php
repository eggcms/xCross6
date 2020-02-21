@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2 py-3 side-menu">
            @include('admin.comp.sidemenu')
        </div>
        <div class="col-10 py-3">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header"><b>Blog manage</b></div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            blog index
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection