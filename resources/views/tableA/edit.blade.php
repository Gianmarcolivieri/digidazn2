@extends('layouts.app')

@section('content')
<div class="container">
   <a class="btn btn-primary float-end mb-3" href="{{ route('tableA.index') }}">Torna alla tabella</a>
    <form action="{{ route('teams.update', $team)}}" method="POST">
        @csrf

        @method('PUT')
           <div class="form-group my-4">
              <label for="logo">Logo></label>
              <input type="file" class="form-control" id="logo" name="logo"  value="{{ $team->logo }}">
           </div>
            @error('logo')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
           <div class="form-group my-4">
              <label for="position">Posizione in classifica:</label>
              <input type="number" min="1" max="20" class="form-control" id="position" name="position"  value="{{ $team->position }}">
           </div>
           @error('position')
                <div class="alert alert-danger">
                       {{ $message }}
                 </div>
            @enderror
           <div class="form-group my-4">
              <label for="point">Punti:</label>
              <input type="number" min="20" max="114" class="form-control" id="point" name="point" value="{{ $team->point }}">
           </div>
           @error('point')
                 <div class="alert alert-danger">
                       {{ $message }}
                </div>
            @enderror
           <div class="form-group my-4">
              <label for="win">Vittorie</label>
              <input type="text" max="38"  class="form-control" id="win" name="win"   value="{{ $team->win }}">
           </div>
           @error('win')
                <div class="alert alert-danger">
                  {{ $message }}
                 </div>
            @enderror
           <div class="form-group my-4">
              <label for="draw">Pareggi</label>
              <input type="number"max="38" class="form-control" id="draw" name="draw"  value="{{ $team->draw }}">
           </div>
           @error('draw')
                   <div class="alert alert-danger">
                      {{ $message }}
                   </div>
           @enderror
           <div class="form-group my-4">
              <label for="lose">Sconfitte</label>
              <input type="number"max="38" class="form-control" id="lose" name="lose"  value="{{ $team->lose }}">
           </div>
           @error('lose')
                  <div class="alert alert-danger">
                      {{ $message }}
                 </div>
            @enderror
          
           {{-- <div class="form-group my-4">
              <label for="image">IMAGE</label>
              <input type="file" class="form-control" id="image" name="image">
           </div> --}}
    
           <button type="submit" class="btn btn-primary">Conferma</button>
     </form>
    </div>

    @endsection

