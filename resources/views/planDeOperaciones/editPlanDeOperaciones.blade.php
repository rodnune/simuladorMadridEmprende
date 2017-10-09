@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="/js/jquery-ui.js"></script>
    <script src="/css/jquery-ui.css"></script>
    <script src="/css/jquery-ui.structure.css"></script>
    <script src="/css/jquery-ui.theme.css"></script>
<script text="javascript">


    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);


    $( function() {
        $( "#fecha_de_operacion" ).datepicker();
    } );


</script>


    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">Plan de operaciones
                <small></small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Plan de operaciones</span>
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
                                    <span class="caption-subject font-blue-madison bold uppercase">
                                            Plan de operaciones
                                    </span>
                                </div>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#pm1" data-toggle="tab" title="Fecha inicio, procesos de fabricación y protocolos "> PO1 </a>
                                    </li>
                                    <li>
                                        <a href="#pm2" data-toggle="tab" title="Análisis interno y condicionantes externos"> PO2 </a>
                                    </li>
                                    <li>
                                        <a href="#pm3" data-toggle="tab" title="Análisis de recursos materiales e inmateriales"> PO3 </a>
                                    </li>
                                </ul>


                            </div>
                            <div class="portlet-body">


                        <form class="register-form" style="display: block;" @if ($action=='new') action="{{url('/save-plan-de-operaciones/'.$id)}}" @else action="{{url('/update-plan-de-operaciones/'.$id)}}"  @endif  method="post" >
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="portlet light ">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="pm1">
                                                    <!-- BEGIN: PM1 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Fecha de inicio de operación</span>
                                                        </div>
                                                        <input type="text" name="fecha_de_operacion" id="fecha_de_operacion" required      @if ($action=='edit') {{ $PlanDeOperaciones->fecha_de_operacion }}@endif>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Procesos de fabricación y protocolos de realización de servicios</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="fabricacion_protocolos" id="fabricacion_protocolos">
                                                            @if ($action=='edit') {{ $PlanDeOperaciones->fabricacion_protocolos }}@endif
                                                        </textarea>
                                                    </div>
                                                    <!-- END: PM2 -->
                                                </div>
                                                <div class="tab-pane" id="pm2">
                                                    <!-- BEGIN: PM1 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Análisis interno</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="analisis_interno" id="analisis_interno">
                                                            @if ($action=='edit') {{ $PlanDeOperaciones->analisis_interno }}@endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Condicionantes externos</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="condicionantes_externos" id="condicionantes_externos">
                                                            @if ($action=='edit') {{ $PlanDeOperaciones->condicionantes_externos }}@endif
                                                        </textarea>
                                                    </div>
                                                    <!-- END: PM2 -->
                                                </div>
                                                <div class="tab-pane" id="pm3">
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Análisis de recursos materiales</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="recursos_materiales" id="recursos_materiales">
                                                            @if ($action=='edit') {{ $PlanDeOperaciones->recursos_materiales }}@endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Análisis de recursos inmateriales</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="recursos_inmateriales" id="recursos_inmateriales">
                                                            @if ($action=='edit') {{ $PlanDeOperaciones->recursos_inmateriales }}@endif
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->

                                        {{--<form role="form" action="#">--}}
                                        <div class="form-body">

                                        </div>


                                                <div class="margiv-top-10">
                                                    <a href="/plan-de-operaciones/{{session()->get('PlanEmpresa')->id}}" class="btn default"> Cancelar </a>
                                                    {{--<a href="javascript:;" class="btn green"> Guardar Cambios </a>--}}
                                                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">Guardar</button>
                                                </div>


                                        </div>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- END CONTENT BODY -->
    </div>
@endsection
