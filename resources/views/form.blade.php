@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form
            action="{{ route('new.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="border border-light">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Ciudad*</label>
                <select class="form-control" name="city" required>
                    @foreach ($cities as $key => $city)
                    <option value="{{ isset($key) ? $key : Null }}">
                        {{ isset($city) ? $city : "Sin opciones" }}
                    </option>
                    @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Compañía*</label>
                <select class="form-control" name="company" required>
                    @foreach ($companies as $key=> $company)
                    <option value="{{ isset($key) ? $key : Null }}">
                        {{ isset($company) ? $company : Null }}
                    </option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Nombre del Projecto</label>
              <input type="text" class="form-control" name="name" placeholder="Example" required>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Fecha de Ejecución</label>
              <input type="date" class="form-control" name="execution_date" required placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_active">
                <label class="form-check-label" for="gridCheck">
                  Está Activo
                </label>
              </div>
            </div>
            <div class="form-group">
                @csrf
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
    </div>
</div>
@endsection