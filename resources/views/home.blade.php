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

                    {{ __('You are logged in!') }}
                    @if(Auth::guard('admin')->check())
                        Anda Login Sebagai Admin
                    @elseif(Auth::guard('web')->check())
                    Anda Login Sebagai User/customer/murid
                    @elseif(Auth::guard('pengajar')->check())
                        Anda Login Sebagai Pengajar
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
