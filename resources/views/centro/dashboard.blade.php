@extends('centro.sidebar')
@section('content')

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        
        </div>
        <div class="main-panel">
            
            <div class="content">
                <div class="container-fluid">

                    <h1>Tus comunidades</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">error</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Tienen necesidades urgentes</p>
                                    <h3 class="title"> 1
                                        <small>comunidades</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="#More">Ir a la secci&oacute;n</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Centros de acopio</p>
                                    <h3 class="title">3 <small>centros</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        Que puedes ayudar con lo que tienes
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">directions_bus</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Envios a tu centro</p>
                                    <h3 class="title">2 envios</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        Confirma su recepci&oacute;n m&aacute;s abajo
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">forward</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Envios desde tu centro</p>
                                    <h3 class="title">1 <small>envio en progreso</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        Registra que estan completos m&aacute;s abajo.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!--  Cartas comunidades -->
                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <h1 class="text-center align-middle">Chietla</h1>
                                </div>
                                <div class="card-content">
                                    <h6> 300 habitantes </h6>
                                    <h4 class="title">Necesidades:</h4>
                                    <p class="category">
                                        <span class="text-danger"><i class="fa fa-exclamation"></i> Agua </span> <br>
                                        <span class="text-danger"><i class="fa fa-exclamation"></i> Enlatados </span> <br>
                                        <span class="text-danger"><i class="fa fa-exclamation"></i> Material de construcci&oacute;n </span> <br>
                                        <span class="text-danger"><i class="fa fa-exclamation"></i> Comida para beb&eacute; </span> <br>
                                    </p>
                                    <button>Ver todo</button>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <button class="actualizar">Actualizar</button>
                                        <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <h1 class="text-center align-middle">Tetela del volcan</h1>
                                </div>
                                <div class="card-content">
                                    <h6> 600 habitantes </h6>
                                    <h4 class="title">Necesidades:</h4>
                                    <p class="category">
                                        <span class="text-danger"><i class="fa fa-exclamation"></i> Agua </span> <br>
                                        <span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Enlatados </span> <br>
                                        <span class="text-success"><i class="fa fa-check"></i> Material de construcci&oacute;n </span> <br>
                                        <span class=""><i class="fa fa-ban"></i> Comida para beb&eacute; </span> <br>
                                    </p>
                                    <button>Ver todo</button>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <button>Actualizar</button>
                                        <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <h1 class="text-center align-middle">San Francisco Xochiteopan</h1>
                                </div>
                                <div class="card-content">
                                    <h6> 1000 habitantes </h6>
                                    <h4 class="title">Necesidades:</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-check"></i> Agua </span> <br>
                                        <span class="text-success"><i class="fa fa-check"></i> Enlatados </span> <br>
                                        <span class=""><i class="fa fa-ban"></i> Material de construcci&oacute;n </span> <br>
                                        <span class=""><i class="fa fa-ban"></i> Comida para beb&eacute; </span> <br>
                                    </p>
                                    <button>Ver todo</button>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <button>Actualizar</button>
                                        <i class="material-icons">access_time</i> Actualizado hace 4 minutos
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- Fin carta comunidad -->
                    </div>

                    <div class="row">
                   
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Centros que requieren apoyo</h4>
                                    <p class="category">Solo se muestran solicitudes que puedas atender por ubicaci&oacute;n y recursos</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Centro</th>
                                            <th>Distancia</th>
                                            <th>Categoría requerida</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                        </thead>
                                        <tbody>
                                           <tr>
                                               <td>Chietla principal</td>
                                               <td>23 KM</td>
                                               <td><button class="btn btn-warning">Alimentos</button></td>
                                               <td></td>
                                               <td><button class="btn btn-success">Apoyar</button></td>
                                           </tr>
                                           <tr>
                                               <td>Tetela principal</td>
                                               <td>30 KM</td>
                                               <td><button class="btn btn-danger">Material de construcción</button></td>
                                               <td></td>
                                               <td><button class="btn btn-success">Apoyar</button></td>
                                           </tr>
                                           <tr>
                                               <td>Banco de alimentos</td>
                                               <td>50 KM</td>
                                               <td><button class="btn btn-warning">Agua</button></td>
                                               <td><button class="btn btn-info">Apoyo prometido</button></td>
                                               <td><button class="btn btn-success">Apoyo enviado</button><button class="btn btn-danger">Cancelar envio</button></td>
                                           </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@endsection

@push('scripts')
    <script src="{{asset('js/centro.js')}}"></script>
@endpush
