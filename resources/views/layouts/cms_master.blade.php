<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ubold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('logo/logo.svg')}}">

        <link href="{{ asset('admin/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />

          <link href="{{ asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

        <link href="{{ asset('admin/assets/plugins/bootstrap-sweetalert/sweet-alert.css')}}" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin/assets/js/modernizr.min.js')}}"></script>
        @yield('stylesheets')
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--UBold-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('admin/assets/images/logo_dark.png')}}" alt="" height="20" class="logo-lg">
                            <img src="{{ asset('admin/assets/images/logo_sm.png')}}" alt="" height="24" class="logo-sm">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">

                        
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    
                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                    </a> 


                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{url('home')}}"><i class="md md-dashboard"></i>Dashboard</a>
                             
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Location Type</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Location Type</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('location_type/create')}}">Create</a></li>
                                            <li><a href="{{url('location_type')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Location Details</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Location Details</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('location_details/create')}}">Create</a></li>
                                            <li><a href="{{url('location_details')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Location</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Location </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('location/create')}}">Create</a></li>
                                            <li><a href="{{url('location')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Life Guard Provider</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Life Guard Provider</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('lifeguard/create')}}">Create</a></li>
                                            <li><a href="{{url('lifeguard')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Safety Message</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Safety Message </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('safety_message/create')}}">Create</a></li>
                                            <li><a href="{{url('safety_message')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Amenity</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Amenity </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('amenity/create')}}">Create</a></li>
                                            <li><a href="{{url('amenity')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Activity</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Activity </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('activity/create')}}">Create</a></li>
                                            <li><a href="{{url('activity')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Location Image</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Location Image</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('location_image/create')}}">Create</a></li>
                                            <li><a href="{{url('location_image')}}">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


      <!-- content-->
      @yield('content')
       <!-- End content-->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                       &copy; <?php echo date("Y"); ?> Powered by <a href="http://www.230i.com" target="_blank">230 Interactive.</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{ asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
        
        <script src="{{ asset('admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/plugins/switchery/js/switchery.min.js')}}"></script>

        <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>

        <!-- Sweet-Alert  -->
        <script src="{{ asset('admin/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
        <script src="{{ asset('admin/assets/pages/jquery.sweet-alert.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{ asset('admin/assets/js/jquery.app.js')}}"></script>

        <script type="text/javascript" src="{{ asset('admin/assets/plugins/parsleyjs/parsley.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
         <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

        @yield('scripts')

    </body>
</html>
