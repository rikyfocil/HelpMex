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
                <a class="navbar-brand" href="#"> Notifications </a>
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
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Notifications</h4>
                    <p class="category">Handcrafted by our friend
                        <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                        <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
                    </p>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Notifications Style</h5>
                            <div class="alert alert-info">
                                <span>This is a plain notification</span>
                            </div>
                            <div class="alert alert-info">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>This is a notification with close button.</span>
                            </div>
                            <div class="alert alert-info alert-with-icon" data-notify="container">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <i data-notify="icon" class="material-icons">add_alert</i>
                                <span data-notify="message">This is a notification with close button and icon.</span>
                            </div>
                            <div class="alert alert-info alert-with-icon" data-notify="container">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <i data-notify="icon" class="material-icons">add_alert</i>
                                <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Notification states</h5>
                            <div class="alert alert-info">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>
                                    <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                            </div>
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>
                                    <b> Success - </b> This is a regular notification made with ".alert-success"</span>
                            </div>
                            <div class="alert alert-warning">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>
                                    <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                            </div>
                            <div class="alert alert-danger">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>
                                    <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                            </div>
                            <div class="alert alert-primary">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span>
                                    <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="places-buttons">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <h5>Notifications Places
                                    <p class="category">Click to view notifications</p>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endcontent
    