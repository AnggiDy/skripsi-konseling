@extends('admin.layouts.app')

@section('title')
Login Admin
@endsection

@section('content')
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                <div class="login-form-head">
                    <h4>Login</h4>
                    <p>Silahkan login terlebih dahulu!</p>
                </div>
                <div class="login-form-body">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                       
                        @error('username')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
                       
                        @error('password')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                 
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>                            
                    </div>
                
                    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
