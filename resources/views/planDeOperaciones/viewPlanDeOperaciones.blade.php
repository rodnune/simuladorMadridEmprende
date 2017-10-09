@extends('layouts.app')

@section('content')


    <script src="/js/tinymce/tinymce.min.js"></script>
    <script src="/js/tinymce/es.js"></script>
    <script>

        tinymce.init({
            selector:'textarea',
            plugins: "advlist lists code link wordcount textcolor importcss colorpicker table hr",
            // plugins: 'code print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools contextmenu colorpicker textpattern help',

            advlist_bullet_styles: "square",
            toolbar1: "cut copy paste | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code",
            toolbar2: "undo redo | format formatcss formatselect fontselect fontsizeselect | link unlink responsivefilemanager | forecolor backcolor"
        });</script>


    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Dashboard
                <small>dashboard & statistics</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Plan de marketing</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE HEADER-->

            {{--@if(session('mensaje') != "" && session('mensajeType') != "")--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="alert alert-{{ session('mensajeType') }} alert-dismissable">--}}
                            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>--}}
                            {{--{{ session('mensaje') }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endif--}}


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
                                            Plan de marketing
                                    </span>
                                </div>

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#pm1" data-toggle="tab" title="Características del mercado"> PM1 </a>
                                    </li>
                                    <li>
                                        <a href="#pm2" data-toggle="tab" title="Barreras de entrada y oportunidades"> PM2 </a>
                                    </li>
                                    <li>
                                        <a href="#pm3" data-toggle="tab" title="Productos y servicios"> PM3 </a>
                                    </li>
                                    <li>
                                        <a href="#pm4" data-toggle="tab" title="Análisis de la competencia"> PM4 </a>
                                    </li>
                                    <li>
                                        <a href="#pm5" data-toggle="tab" title="Clientes, proveedores y política de precios"> PM5 </a>
                                    </li>
                                    <li>
                                        <a href="#pm6" data-toggle="tab" title="Ubicación"> PM6 </a>
                                    </li>
                                    <li>
                                        <a href="#pm7" data-toggle="tab" title="Estrategia de comunicación"> PM7 </a>
                                    </li>
                                    <li>
                                        <a href="#pm8" data-toggle="tab" title="Plan de ventas"> PM8 </a>
                                    </li>
                                </ul>


                            </div>
                            <div class="portlet-body">


                                <form class="register-form" style="display: block;" @if ($action=='new') action="{{url("/save-plan-de-marketing/".$id)}}" @else action="{{url("/update-plan-de-marketing/".$id)}}"  @endif  method="post">
                                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="portlet light ">
                                            <div class="portlet-body">
                                                <div class="tab-content">


                                                    <div class="tab-pane active" id="pm1">
                                                        <!-- BEGIN: PM1 -->
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-caret-right"></i><span class="uppercase">Características del mercado</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!! $PlanDeMarketing->caracteristicas_mercado !!}
                                                            </div>
                                                        </div>
                                                        <!-- END: PM2 -->
                                                    </div>



                                                    <div class="tab-pane" id="pm2">
                                                        <!-- BEGIN: PM2 -->
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-hand-stop-o "></i><span class="uppercase">Barreras de entrada</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!! $PlanDeMarketing->barreras_entrada !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-diamond"></i><span class="uppercase">Oportunidades</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!! $PlanDeMarketing->oportunidades !!}
                                                            </div>
                                                        </div>
                                                        <!-- END: PM2 -->
                                                    </div>
                                                    <div class="tab-pane" id="pm3">

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-caret-right"></i><span class="uppercase">Productos y servicios</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!! $PlanDeMarketing->productos_servicios !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pm4">

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-line-chart"></i><span class="uppercase">Análisis de la competencia</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!! $PlanDeMarketing->analisis_competencias !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="pm5">
                                                        <!-- BEGIN: PM5 -->


                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-users"></i><span class="uppercase">Clientes</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!  $PlanDeMarketing->clientes !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-users"></i><span class="uppercase">Proveedores</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!  $PlanDeMarketing->proveedores !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-euro"></i><span class="uppercase">Política de precios</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!  $PlanDeMarketing->politica_precios !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pm6">
                                                        <!-- BEGIN: PM5 -->
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-map-marker"></i><span class="uppercase">Emplazamiento</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!  $PlanDeMarketing->ubi_emplazamiento !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-bus"></i><span class="uppercase">Transporte público</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {{ $PlanDeMarketing->ubi_transporte }}
                                                            </div>
                                                        </div>

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-map"></i><span class="uppercase">Plano de situación</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <img src="{{  $PlanDeMarketing->ubi_plano_src() }}">
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-file-image-o"></i><span class="uppercase">Fotografía</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <img src="{{  $PlanDeMarketing->fotografia_src() }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="pm7">
                                                        <!-- BEGIN: PM7 -->

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-microphone"></i><span class="uppercase">Estrategias de comunicación</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!   $PlanDeMarketing->estrategia_comunicacion  !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-rocket"></i><span class="uppercase">Acciones concretas</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!   $PlanDeMarketing->acciones_concretas  !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="pm8">
                                                        <!-- BEGIN: PM8 -->
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-bar-chart"></i><span class="uppercase">Plan de ventas: Coste mensual por unidades</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                {!!   $PlanDeMarketing->coste_mensual_unidades  !!}
                                                            </div>
                                                        </div>
                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-line-chart"></i><span class="uppercase">>Plan de ventas primer año</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <table class="table table-condensed  table-bordered">
                                                                    <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                        <td width="16%">Enero</td>
                                                                        <td width="16%">Febrero</td>
                                                                        <td width="16%">Marzo</td>
                                                                        <td width="16%">Abril</td>
                                                                        <td width="16%">Mayo</td>
                                                                        <td width="16%">Junio</td>
                                                                    </tr>
                                                                    <tr style="text-align: center;">
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_1,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_2,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_3,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_4,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_5,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_6,2)}}
                                                                        </td>
                                                                    </tr>


                                                                    <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                        <td>Julio</td>
                                                                        <td>Agosto</td>
                                                                        <td>Septiembre</td>
                                                                        <td>Octubre</td>
                                                                        <td>Noviembre</td>
                                                                        <td>Diciembre</td>
                                                                    </tr>

                                                                    <tr style="text-align: center;">
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_7,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_8,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_9,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_10,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_11,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->ventas_12,2)}}
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-line-chart"></i><span class="uppercase">Plan de compras/costes primer año</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <table class="table table-condensed  table-bordered">
                                                                    <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                        <td width="16%">Enero</td>
                                                                        <td width="16%">Febrero</td>
                                                                        <td width="16%">Marzo</td>
                                                                        <td width="16%">Abril</td>
                                                                        <td width="16%">Mayo</td>
                                                                        <td width="16%">Junio</td>
                                                                    </tr>
                                                                    <tr style="text-align: center;">
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_1,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_2,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_3,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_4,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_5,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_6,2)}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                        <td>Julio</td>
                                                                        <td>Agosto</td>
                                                                        <td>Septiembre</td>
                                                                        <td>Octubre</td>
                                                                        <td>Noviembre</td>
                                                                        <td>Diciembre</td>
                                                                    </tr>
                                                                    <tr style="text-align: center;">
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_7,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_8,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_9,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_10,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_11,2)}}
                                                                        </td>
                                                                        <td>
                                                                            {{number_format($PlanDeMarketing->compras_12,2)}}
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="portlet box blue-hoki">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-rocket"></i><span class="uppercase">Total de ventas y compras primer año</span> </div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                    <a href="" class="fullscreen" data-original-title="" title=""> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <table class="table table-condensed  table-bordered">
                                                                    <tr>
                                                                        <td></td>
                                                                        <td style="background-color: #99cc00; color: white;text-align: center ">AÑO 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #99cc00; color: white;text-align: center ">Ventas</td>
                                                                        <td class="text-right">{{ number_format($PlanDeMarketing->total_ventas(),2)}} <i class="fa fa-euro"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #99cc00; color: white;text-align: center ">Compras</td>
                                                                        <td class="text-right">{{ number_format($PlanDeMarketing->total_compras(),2)}} <i class="fa fa-euro"></i></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
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


                                        <div class="margiv-top-10 text-center">
                                            <a href="{{url('/edit-plan-de-marketing/'.$id)}}" class="btn green"> Editar </a>
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
