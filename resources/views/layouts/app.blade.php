<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Office</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />

    <link rel="stylesheet" href="{{asset('backend/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{--chosen select plugin--}}
{{--    <link rel="stylesheet" href="{{asset('chosen/docsupport/style.css')}}">--}}
    <link rel="stylesheet" href="{{asset('chosen/docsupport/prism.css')}}">
    <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">

    <style>
        .small-box{
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            color: white;
        }
        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 0px;
            border: 0px;
        }
        .navbar.fixed-top + .page-body-wrapper {
            padding-top: 0px;
        }
        .nav-link:hover{
            background-color: transparent;
        }
        .nav-item:hover{
            background-color: transparent;
        }
        .nav > li > a:focus, .nav > li > a:hover {
            text-decoration: none;
            background-color: transparent;
        }
        .box{
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid black;
        }
        .circle {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            border-radius: 25px;
            display: block;
            cursor: pointer;
        }
        .selectedColor {
            outline: 3px solid black;
        }

    </style>
</head>
<body>
<div class="container-scroller" id="app">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="#">
                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo"/> </a>
            <a class="navbar-brand brand-logo-mini" href="#">
                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo"/> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                         aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{asset('backend/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{asset('backend/assets/images/faces/face8.jpg')}}" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->fname??""}}</p>
                            <p class="font-weight-light text-muted mb-0">{{Auth::user()->email??""}}</p>
                        </div>
                        <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i
                                class="dropdown-item-icon ti-dashboard"></i></a>
                        <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                        <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                        <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}<i class="dropdown-item-icon ti-power-off"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <img class="img-xs rounded-circle" src="{{asset('backend/assets/images/faces/face8.jpg')}}" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">{{Auth::user()->fname??""}}</p>
                            <p class="designation">Super Admin</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Menu principal</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Cat??gorie</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('category.index')}}">Cat??gories principales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('subcategory.index')}}">Sous-cat??gories</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Des produits</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="products">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('product.create')}}">Ajouter un produit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('product.index')}}">Tous les produits</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('order.type')}}" class="nav-link" aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Commandes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Param??tres</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="settings">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('general.settings')}}">R??glages G??n??raux</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('settings.pages')}}">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('settings.slides')}}">Diapositives</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('settings.colors')}}">Couleurs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Utilisateurs</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('simple.users')}}">Utilisateurs Simples</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('pro.users')}}">PRO Utilisateurs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('click_concept.index')}}" class="nav-link" aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Click Concept</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shipping_source.index')}}" class="nav-link" aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Source d'exp??dition</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">

            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? ikaedigital.com 2022</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
{{--chosen select plugin--}}
<script src="{{asset('chosen/docsupport/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('chosen/chosen.jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('chosen/docsupport/prism.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('chosen/docsupport/init.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- plugins:js -->
<script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('backend/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('backend/assets/js/shared/off-canvas.js')}}"></script>
<script src="{{asset('backend/assets/js/shared/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('backend/assets/js/demo_1/dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="{{asset('backend/assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif

    $(document).ready(function() {
        $('.summernote').summernote();
    });

    function orderStatus(userid){
        let _token = $('meta[name="csrf-token"]').attr('content');
        var select = document.getElementById("admin_status");
        var statusValue = select.options[select.selectedIndex].value;

        $.ajax({
            url: "{{route('order.status')}}",
            type: "POST",
            data: {
                id: userid,
                status: statusValue,
                _token: _token,
            },
            success: function (response){
                toastr.info("Statut modifi?? avec succ??s");
            }
        });
    }

    function ordersType(){
        // let _token = $('meta[name="csrf-token"]').attr('content');
        var select = document.getElementById("order_type");
        var order_type = select.options[select.selectedIndex].value;
        console.log('order_type');
        window.location="{{route('order.type')}}/?order_type="+order_type;
    }



</script>

@yield('script')
</body>
</html>
