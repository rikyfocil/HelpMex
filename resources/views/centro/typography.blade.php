@extends('centro.sidebar')
@section('content')
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Comunidades </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Comunidad</h4>
                                    <p class="category">Puebla</p>
                                </div>
                                <div class="card-content">
                                    <div id="typography">
                                        <div class="title">
                                            <h1>San Francisco Xochiteopan</h1>
                                        </div>

                                        <!--
                                        <div class="row">
                                            <div class="col-xs-6" style="height:40%">
                                                <div id="map"></div>
                                                    <script>
                                                      function initMap() {
                                                        var xochi = {lat: 18.768, lng: -98.613};
                                                        var map = new google.maps.Map(document.getElementById('map'), {
                                                          zoom: 9,
                                                          center: xochi
                                                        });
                                                        var marker = new google.maps.Marker({
                                                          position: xochi,
                                                          map: map
                                                        });
                                                      }
                                                    </script>
                                                    <script async defer
                                                    src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAsqmKnAuericN8VQ1D_jW3CGvVNJ-bcG8&callback=initMap">
                                                    </script>
                                                </div>
                                            </div>
                                            -->
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="col-xs-12">
                                                    <h2>Centros de acopio que pueden recibir tu donativo</h2>
                                                </div>
                                                <div class="col-md-9">
                                                    <div id="map"></div>    
                                                </div>
                                                <div class="col-md-3">
                                                    <h1>Centro de acopio</h1>
                                                    <p id="infowindow">Da click en un centro de acopio para conocer m&aacute;s.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <br>
                                            <div class="alert alert-warning">
                                                <div class="container-fluid">
                                                  <div class="alert-icon">
                                                    <i class="material-icons">warning</i>
                                                  </div>
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                  </button>
                                                  <b>Situaci&oacute;n grave</b>: Comunidad fuertemente afectada en sismo de 19 de septiembre de 2017.
                                                </div>
                                            </div>
                                            Text <br> Text <br> Text <br> Text
                                            

                                        </div>
                                        <div class="row">
                                            <div class="card card-stats">
                                                <div class="card-header" data-background-color="orange">
                                                    <i class="material-icons">content_copy</i>
                                                </div>
                                                <div class="card-content">
                                                    <p class="category">Used Space</p>
                                                    <h3 class="title">49/50<small>GB</small></h3>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="stats">
                                                        <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

@endsection

