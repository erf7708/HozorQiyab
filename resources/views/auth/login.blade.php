@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('login')}}"><b>ورود به سایت</b></a>
    </div>
 
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>
            
            <form action="{{route('login.store')}}" method="post" >
                @csrf
                
                <div class="input-group mb-3">
                    <input type="text" placeholder="ایمیل" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"   >
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="رمز عبور" name="password">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> یاد آوری من
                            </label>
                        </div>
                    </div>

                {!! htmlFormSnippet() !!}
                  
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            
        
            <!-- /.social-auth-links -->
            
           @if(Route::has('password.request'))
        
                <p class="mb-1">
                    <a href="{{route('password.request')}}">رمز عبورم را فراموش کرده ام.</a>
                </p>
               
               @endif
          
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

@endsection
