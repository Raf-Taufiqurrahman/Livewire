@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<div class="block block-rounded mb-0">
    <div class="block-header block-header-default">
        <h3 class="block-title">LOGIN PAGE</h3>
    </div>
    <div class="block-content">
        <div class="p-sm-3 px-lg-5 px-xxl-5 py-lg-5">
            <h1 class="h2 mb-1">Point Of Sales</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="py-3">
                    <div class="mb-4">
                        <input type="text" class="form-control form-control-alt form-control-lg" name="username" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control form-control-alt form-control-lg" name="password" placeholder="Kata sandi">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 col-xl-5">
                        <button type="submit" class="btn w-100 btn-alt-primary">
                            <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Masuk
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

