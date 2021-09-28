@extends('layouts.app')

@section('content')
         <div class="container mt-5">
        <form action="{{ route('validate.exists') }}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" name="title" value="{{ old('title') }}">
                
                @if($errors->has('title'))
                  <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="d-grid mt-3">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    @endsection