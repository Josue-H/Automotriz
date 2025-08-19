@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de una nueva inventarios</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">LLene los datos de a guardar en inventario</h3>
                </div>
                <div class="card-body">
                    <form action= "{{ url('/admin/inventarios/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for = " ">Marca</label><b>*</b>
                                    <input type ="text" value= "{{ old('Marca') }}" name="marca"
                                        class="form-control" required>
                                    @error('marca')
                                        <small style = "color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for = " ">Modelo</label><b>*</b>
                                    <input type ="text" value= "{{ old('modelo') }}" name="modelo" class="form-control"
                                        required>
                                    @error('modelo')
                                        <small style = "color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for = " ">Anio</label><b>*</b>
                                    <input type ="date" value= "{{ old('anio') }}" name="anio" class="form-control"
                                        required step="0.01">
                                    @error('anio')
                                        <small style = "color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="articulo">Precio</label><b>*</b>
                                    <select name="articulo" class="form-control" required>
                                        <option value="" disabled {{ old('articulo') == '' ? 'selected' : '' }}>
                                            Seleccionar...</option>
                                        <option value="Articulo1" {{ old('articulo') == 'Articulo1' ? 'selected' : '' }}>
                                            Articulo1</option>
                                        <option value="Articulo2" {{ old('articulo') == 'Articulo2' ? 'selected' : '' }}>
                                            Articulo2</option>
                                        <option value="Articulo3" {{ old('articulo') == 'Articulo3' ? 'selected' : '' }}>
                                            Articulo3</option>
                                        <option value="Articulo4" {{ old('articulo') == 'Articulo4' ? 'selected' : '' }}>
                                            Articulo4</option>
                                        <option value="Articulo5" {{ old('articulo') == 'Articulo5' ? 'selected' : '' }}>
                                            Articulo5</option>
                                    </select>
                                    @error('articulo')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for = " ">Estado</label><b>*</b>
                                    <input type ="number" value= "{{ old('cantidad') }}" name="cantidad"
                                        class="form-control" required>
                                    @error('cantidad')
                                        <small style = "color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="metodo_pago">Kilometraje</label><b>*</b>
                                    <select name="metodo_pago" class="form-control" required>
                                        <option value="" disabled {{ old('metodo_pago') == '' ? 'selected' : '' }}>
                                            Seleccionar...</option>
                                        <option value="Efectivo" {{ old('metodo_pago') == 'Efectivo' ? 'selected' : '' }}>
                                            Efectivo</option>
                                        <option value="Tarjeta" {{ old('metodo_pago') == 'Tarjeta' ? 'selected' : '' }}>
                                            Tarjeta</option>
                                        <option value="Transferencia"
                                            {{ old('metodo_pago') == 'Transferencia' ? 'selected' : '' }}>Transferencia
                                        </option>
                                        <option value="Otro" {{ old('metodo_pago') == 'Otro' ? 'selected' : '' }}>Otro
                                        </option>
                                    </select>
                                    @error('metodo_pago')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                    <label for = " ">color</label><b>*</b>
                                    <input type ="text" value= "{{ old('color') }}" name="color"
                                        class="form-control" required>
                                    @error('color')
                                        <small style = "color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/inventario') }}" class= "btn btn-secondary">Cancelar</a>
                                    <button type ="submit" class= "btn btn-primary">Registar inventario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
