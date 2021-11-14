@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="" class="list-group-item list-group-item-action">Ver</a>
                            <a href="" class="list-group-item list-group-item-action">Crear</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{route('pizza.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre de la pizza</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre de la pizza">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción de la pizza</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-inline">
                                <label for="">Precio (S/.)</label>
                                <input type="number" name="small_price" class="form-control" placeholder="precio de pizza pequeña">
                                <input type="number" name="medium_price" class="form-control" placeholder="precio de pizza mediana">
                                <input type="number" name="large_price" class="form-control" placeholder="precio de pizza grande">
                            </div>
                            <div class="form-group">
                                <label for="category">Categoría</label>
                                <select id="" class="form-control" name="category">
                                    <option value=""></option>
                                    <option value="vegetarian">Vegetariana</option>
                                    <option value="nonvegetarian">No Vegetariana</option>
                                    <option value="traditional">Tradicional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-dark" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
