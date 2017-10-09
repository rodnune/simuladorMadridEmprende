@extends('layouts.app')

@section('content')

    @if( $status == 'ok')
        <script type="text/javascript">

            Command: toastr['success']("Datos guardados correctamente.", "Mi cuenta")

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-top-full-width",
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

        </script>
    @endif

    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Mi cuenta
                <small>mis datos</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Mi cuenta</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->


            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Datos de la cuenta</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Información personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        {{--<form role="form" action="#">--}}
                                            <form class="register-form" style="display: block;" action="{{url("/micuenta/update/".Auth::user()->id)}}" method="post">
                                                {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label">Nombre</label>
                                                <input type="text" name="name"  value="{{ Auth::user()->name }}" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Apellidos</label>
                                                <input type="text" value="{{ Auth::user()->last_name }}" name="last_name" class="form-control" required> </div>
                                            <div class="form-group">
                                                <label class="control-label">E-mail</label>
                                                <input type="text" readonly="readonly" value="{{ Auth::user()->email }}"class="form-control">
                                            </div>
                                            <div class="margiv-top-10">
                                                <a href="{{ route('home') }}" class="btn default"> Cancelar </a>
                                                {{--<a href="javascript:;" class="btn green"> Guardar Cambios </a>--}}
                                                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">Guardar Cambios</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
