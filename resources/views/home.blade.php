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
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <section>

    



                <div>
                    <h1 style="text-transform:uppercase;">BENTORNATO/A,<br>  {{ Auth::user()->name }}</h1>
                    <p>Il tuo sport. Insieme a te.</p>
                 
                    <p>Tutta la serie A TIM e molto altro sport a 29.99 £ al mese. Puoi <br> disdire quando vuoi.</p>
                    <div>
                        <button>Riattiva ora</button>
                        {{-- <Button style="text-transform:uppercase;"><a href="{{ route('logout') }}"> NON SEI {{ Auth::user()->name }}? ESCI</Button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> --}}
                            <button><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">Non sei {{ Auth::user()->name }}? ESCI</a>
                                                    
                                                </a></button>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                    </div>
                
                
                
                </div>
    </section>





    <section>

    </section>


    <section>

    </section>

</div>      

@include("layouts.footer")  
@endsection
