@extends('layouts.app')

@section('content')
<div class="container" style="background: rgb(12, 22, 28)">
        <div class="card1">
            <header class="header">
                <h1>ACCEDI</h1>
                
            
            </header>
                <form method="POST"style="box-sizing:border-box;" action="{{ route('login') }}">
                    @csrf
                    <main class="primoInput"style="position:relative;">

                        <label for="email"class="label1">Indirizzo Email
                            
                        </label>
                        
                            <input class="input1"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label for="Password"class="label1">Password</label>
                
                            <input class="input1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <button type="submit" class="buttonBig"> {{ __('ACCEDI') }}</button>
            
                <div class="reinvent"style="margin-top: 32px;text-align: center;">
                        <p class="remake">

                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color: rgb(249, 250, 250);">
                               Reimposta la tua password
                            </a>
                        @endif
                        </p>
                </div>
                </form>


        </div>
</div>
                                                           
@include('layouts.footer')
@endsection

