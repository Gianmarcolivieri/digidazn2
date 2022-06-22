
@extends('layouts.app')
@section('content')

<div class="container" style="background: rgb(12, 22, 28)">
    <div class="card1">
        <header class="header">
            <h1>CREA UN ACCOUNT</h1>
            
        
        </header>
            <form method="POST" style="box-sizing:border-box;"action="{{ route('register') }}">
                @csrf
                <main class="primoInput"style="position:relative;">
                    <div>
                        <label for="name"class="label1">{{ __('Nome') }}</label>
                            <input id="name" class="input1"type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                    </div>

                    <div>
                        <label for="surname"class="label1">{{ __('Cognome') }}</label>
                            <input id="surname" class="input1" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"required autocomplete="surname"autofocus>
                            @error('surname')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                    </div>
                    
                    <div>
                        <label for="team_id"class="label1">{{ __('*Squadra del cuore') }}</label>
                            <input id="team_id"class="input1" min="1"max="20" type="number" class="form-control @error('team_id') is-invalid @enderror" name="team_id" value="{{ old('team_id') }}"required autocomplete="team_id" autofocus>
                            @error('team_id')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                    </div>

                    <div>
                        <label for="email"class="label1">{{ __('Email') }}</label>
                            <input id="email"class="input1" type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                    </div>

                    <div>
                        <label for="password"class="label1">{{ __('Password') }}</label>
                            <input id="password"class="input1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete=" new-password">
                            @error('password')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                    </div>

                    <div>
                        <label for="password-confirm"class="label1">{{ __('Conferma la password') }}</label>
                            <input id="password-confirm" class="input1" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          
                    </div>    
        
                    
                    <button type="submit" class="buttonBig"> {{ __('ACCEDI') }}</button>
        
                <div class="reinvent"style="margin-top: 32px;text-align: center;">
                    <p class="remake">Gia abbonato?

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" style="color: rgb(249, 250, 250);">
                            Accedi
                            </a>
                        @endif
                    </p>
                </div>
            </form>



    </div>
</div>

<div class="teams" style="color: white">*Squadra
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
    <ul>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
    </ul>
    <ul>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
    </ul>
    <ul>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
    </ul>
</div>
                                                       
@include('layouts.footer')
@endsection
