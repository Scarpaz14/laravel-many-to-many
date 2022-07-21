@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crea un nuovo categoria</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nome Categoria:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection