@extends('layouts.app')

@section('content')



    <script>


        function calcular_total_ventas(){

            var sum_ventas = 0;
            for (i = 1; i <= 12; i++) {
                if($('#ventas_'+i).val()){
                    sum_ventas += parseFloat($('#ventas_'+i).val());
                }
            }
            $('#total_ventas').val(sum_ventas);

        }

        function calcular_total_compras(){

            var sum_compras = 0;
            for (i = 1; i <= 12; i++) {
                if($('#ventas_'+i).val()){
                    sum_compras += parseFloat($('#compras_'+i).val());
                }
            }
            $('#total_compras').val(sum_compras);

        }
</script>


    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">Plan de marketing
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
                        <span>Plan de marketing</span>
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


                        <form class="register-form" style="display: block;" @if ($action=='new') action="{{url('/save-plan-de-marketing/'.$id)}}" @else action="{{url('/update-plan-de-marketing/'.$id)}}"  @endif  method="post" enctype="multipart/form-data" >
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
                                                                <i class="fa fa-caret-right"></i>
                                                                <span class="caption-subject font-dark bold uppercase">Características del mercado</span>
                                                            </div>
                                                            <textarea class="form-control" rows="13" name="caracteristicas_mercado" id="caracteristicas_mercado">
                                                                 @if ($action=='edit') {{ $PlanDeMarketing->caracteristicas_mercado }}@endif
                                                        </textarea>
                                                        </div>
                                                    <!-- END: PM2 -->
                                                </div>
                                                <div class="tab-pane" id="pm2">
                                                    <!-- BEGIN: PM1 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-hand-stop-o "></i>
                                                            <span class="caption-subject font-dark bold uppercase">Barreras de entrada</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="barreras_entrada" id="barreras_entrada">
                                                            @if ($action=='edit') {{ $PlanDeMarketing->barreras_entrada }}@endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-diamond"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Oportunidades</span>
                                                        </div>
                                                        <textarea class="form-control" rows=10" name="oportunidades" id="oportunidades">
                                                            @if ($action=='edit') {{ $PlanDeMarketing->oportunidades }}@endif
                                                        </textarea>
                                                    </div>
                                                    <!-- END: PM2 -->
                                                </div>
                                                <div class="tab-pane" id="pm3">
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Productos y servicios</span>
                                                        </div>
                                                        <textarea class="form-control" rows="15" name="productos_servicios" id="productos_servicios">
                                                            @if ($action=='edit') {{ $PlanDeMarketing->productos_servicios }}@endif
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pm4">
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-line-chart"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Análisis de la competencia</span>
                                                        </div>
                                                        <textarea class="form-control"  rows="13" name="analisis_competencias" id="analisis_competencias">
                                                            @if ($action=='edit')
                                                                {{ $PlanDeMarketing->analisis_competencias }}
                                                            @else
                                                                <table style="border-color:#3A5E7C; width: 777px;" border="1" cellspacing="5" cellpadding="6">
<tbody>
<tr>
<td style="width: 103px;">&nbsp;</td>
<td style="background-color: #99cc00; color: white; width: 202px; padding: 5px; text-align: center;">Mi empresa</td>
<td style="background-color: #99cc00; color: white; width: 167px; padding: 5px; text-align: center;">Competidor 1</td>
<td style="background-color: #99cc00; color: white; width: 238px; padding: 5px; text-align: center;">Competidor 2</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Producto</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Precio</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Calidad</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Servicio</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Experiencia</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Ubicaci&oacute;n</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">M&eacute;todos venta</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Publicidad</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 103px; padding: 5px;">Imagen</td>
<td style="width: 202px;">&nbsp;</td>
<td style="width: 167px;">&nbsp;</td>
<td style="width: 238px;">&nbsp;</td>
</tr>
</tbody>
</table>
                                                            @endif

                                                                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pm5">
                                                    <!-- BEGIN: PM5 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-users"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Clientes</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="clientes" id="clientes">
                                                        @if ($action=='edit')
                                                                {{ $PlanDeMarketing->productos_servicios }}
                                                        @endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-users"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Proveedores</span>
                                                        </div>
                                                        <textarea class="form-control" rows=10" name="proveedores" id="proveedores">
                                                        @if ($action=='edit')
                                                                {{ $PlanDeMarketing->proveedores }}
                                                            @endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-euro"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Política de precios</span>
                                                        </div>
                                                        <textarea class="form-control" rows=10" name="politica_precios" id="politica_precios">
                                                            @if ($action=='edit'){{ $PlanDeMarketing->politica_precios }}@endif
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pm6">
                                                    <!-- BEGIN: PM5 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Emplazamiento</span>
                                                        </div>
                                                        <input type="text" class="form-control" rows="10" name="ubi_emplazamiento" id="ubi_emplazamiento" @if ($action=='edit') value="{{ $PlanDeMarketing->ubi_emplazamiento }}" @endif>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-bus"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Transporte público</span>
                                                        </div>
                                                        <input type="text" class="form-control" rows=10" name="ubi_transporte" id="ubi_transporte"  @if ($action=='edit') value="{{ $PlanDeMarketing->ubi_transporte }}" @endif>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-map"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plano de situación</span>
                                                        </div>
                                                        @if ($action=='edit')
                                                            @if ($PlanDeMarketing->ubi_plano_src()!='')
                                                                <img src="{{  $PlanDeMarketing->ubi_plano_src() }}">
                                                            @endif
                                                        @endif
                                                        <input type="file" class="form-control" rows=10" name="ubi_plano" id="ubi_plano">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-file-image-o"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Fotografía</span>
                                                        </div>
                                                        @if ($action=='edit')
                                                            @if ($PlanDeMarketing->fotografia_src()!='')
                                                                <img src="{{  $PlanDeMarketing->fotografia_src() }}">
                                                            @endif
                                                        @endif
                                                        <input type="file" class="form-control" rows=10" name="fotografia" id="fotografia">
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="pm7">
                                                    <!-- BEGIN: PM7 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-microphone"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Estrategias de comunicación</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="estrategia_comunicacion" id="estrategia_comunicacion">
                                                            @if ($action=='edit'){{ $PlanDeMarketing->estrategia_comunicacion }}@endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-rocket"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Acciones concretas</span>
                                                        </div>
                                                        <textarea type="text" class="form-control" rows=10" name="acciones_concretas" id="acciones_concretas">
                                                            @if ($action=='edit')
                                                                {{ $PlanDeMarketing->acciones_concretas }}
                                                                @else
                                                                <table style="border-color: #3A5E7C; width: 777px;" border="1" cellspacing="5" cellpadding="6">
<tbody>
<tr>
<td style="width: 236px;">&nbsp;</td>
<td style="background-color: #99cc00; color: white; width: 122px; text-align: center;padding: 5px;">Periodicidad</td>
<td style="background-color: #99cc00; color: white; width: 95px; text-align: center;padding: 5px;">Duraci&oacute;n</td>
<td style="background-color: #99cc00; color: white; width: 79px; text-align: center;padding: 5px;">Coste</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Venta personal</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Marketing directo</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Telemarketing</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Merchandising</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Publicidad</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">&nbsp; &nbsp; Prensa</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">&nbsp; &nbsp; Radio</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">&nbsp; &nbsp; Televisi&oacute;n</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">&nbsp; &nbsp; Internet</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Concursos</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Premios</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Descuentos</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Paquetes promocionales</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #99cc00; color: white; width: 236px;padding: 5px;">Otras promociones</td>
<td style="width: 122px;">&nbsp;</td>
<td style="width: 95px;">&nbsp;</td>
<td style="width: 79px;">&nbsp;</td>
</tr>
</tbody>
</table>                                             @endif
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="pm8">
                                                    <!-- BEGIN: PM7 -->
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-bar-chart"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plan de ventas: Coste mensual por unidades</span>
                                                        </div>
                                                        <textarea class="form-control" rows="10" name="coste_mensual_unidades" id="coste_mensual_unidades">
                                                            @if ($action=='edit')
                                                                {{ $PlanDeMarketing->coste_mensual_unidades }}
                                                            @else
                                                                <table style="border-color: #3a5e7c; width: 1226px; height: 595px;" border="1" cellspacing="5" cellpadding="6">
<tbody>
<tr style="height: 11px;">
<td style="width: 414px; height: 11px;">&nbsp;</td>
<td style="background-color: #99cc00; color: white; width: 217px; text-align: center; padding: 5px; height: 11px;">Coste por unidad</td>
<td style="background-color: #99cc00; color: white; width: 236px; text-align: center; padding: 5px; height: 11px;">Precio de venta por unidad</td>
<td style="background-color: #99cc00; color: white; width: 369px; text-align: center; padding: 5px; height: 11px;">
<p>Ingresos por</p>
<p>unidades</p>
</td>
<td style="background-color: #99cc00; color: white; width: 239px; text-align: center; padding: 5px; height: 11px;">
<p>Coste menusal de producci&oacute;n</p>
</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto A</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto B</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto C</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto D</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto E</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto F</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto G</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto H</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto I</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="background-color: #99cc00; color: white; width: 414px; padding: 5px; height: 18px;">Producto J</td>
<td style="width: 217px; height: 18px;">&nbsp;</td>
<td style="width: 236px; height: 18px;">&nbsp;</td>
<td style="width: 369px; height: 18px;">&nbsp;</td>
<td style="width: 239px; height: 18px;">&nbsp;</td>
</tr>
</tbody>
</table>
                                                            @endif
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-line-chart"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plan de ventas primer año</span>
                                                        </div>
                                                        <table class="table table-condensed  table-bordered">
                                                            <thead>
                                                            <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                <td>Enero</td>
                                                                <td>Febrero</td>
                                                                <td>Marzo</td>
                                                                <td>Abril</td>
                                                                <td>Mayo</td>
                                                                <td>Junio</td>
                                                            </tr>
                                                            </thead>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required  type="number" step="any" name="ventas_1" id="ventas_1" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_1}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_2" id="ventas_2" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_2}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_3" id="ventas_3" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_3}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_4" id="ventas_4" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_4}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_5" id="ventas_5" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_5}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_6" id="ventas_6" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_6}}@endif">
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <table class="table table-condensed table-bordered">
                                                            <thead>
                                                            <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                <td>Julio</td>
                                                                <td>Agosto</td>
                                                                <td>Septiembre</td>
                                                                <td>Octubre</td>
                                                                <td>Noviembre</td>
                                                                <td>Diciembre</td>
                                                            </tr>
                                                            </thead>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();"  required  type="number" step="any" name="ventas_7" id="ventas_7" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_7}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();" required   type="number" step="any" name="ventas_8" id="ventas_8" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_8}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();"  required  type="number" step="any" name="ventas_9" id="ventas_9" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_9}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();"  required  type="number" step="any" name="ventas_10" id="ventas_10" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_10}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();"  required  type="number" step="any" name="ventas_11" id="ventas_11" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_11}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="calcular_total_ventas();" onchange="calcular_total_ventas();"  required  type="number" step="any" name="ventas_12" id="ventas_12" value="@if ($action=='edit'){{$PlanDeMarketing->ventas_12}}@endif">
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-line-chart"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plan de compras/costes primer año</span>
                                                        </div>
                                                        <table class="table table-condensed  table-bordered">
                                                            <thead>
                                                            <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                <td>Enero</td>
                                                                <td>Febrero</td>
                                                                <td>Marzo</td>
                                                                <td>Abril</td>
                                                                <td>Mayo</td>
                                                                <td>Junio</td>
                                                            </tr>
                                                            </thead>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <input required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_1" id="compras_1" value="@if ($action=='edit'){{$PlanDeMarketing->compras_1}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_2" id="compras_2" value="@if ($action=='edit'){{$PlanDeMarketing->compras_2}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_3" id="compras_3" value="@if ($action=='edit'){{$PlanDeMarketing->compras_3}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input  required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();" type="number" step="any" name="compras_4" id="compras_4" value="@if ($action=='edit'){{$PlanDeMarketing->compras_4}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"   type="number" step="any" name="compras_5" id="compras_5" value="@if ($action=='edit'){{$PlanDeMarketing->compras_5}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input  required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();" type="number" step="any" name="compras_6" id="compras_6" value="@if ($action=='edit'){{$PlanDeMarketing->compras_6}}@endif">
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <table class="table table-condensed table-bordered">
                                                            <thead>
                                                            <tr style="background-color: #99cc00; color: white;text-align: center ">
                                                                <td>Julio</td>
                                                                <td>Agosto</td>
                                                                <td>Septiembre</td>
                                                                <td>Octubre</td>
                                                                <td>Noviembre</td>
                                                                <td>Diciembre</td>
                                                            </tr>
                                                            </thead>
                                                            <tr style="text-align: center;">
                                                                <td>
                                                                    <input required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"   type="number" step="any" name="compras_7" id="compras_7" value="@if ($action=='edit'){{$PlanDeMarketing->compras_7}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input  required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_8" id="compras_8" value="@if ($action=='edit'){{$PlanDeMarketing->compras_8}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"   type="number" step="any" name="compras_9" id="compras_9" value="@if ($action=='edit'){{$PlanDeMarketing->compras_9}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required  onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"   type="number" step="any" name="compras_10" id="compras_10" value="@if ($action=='edit'){{$PlanDeMarketing->compras_10}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_11" id="compras_11" value="@if ($action=='edit'){{$PlanDeMarketing->compras_11}}@endif">
                                                                </td>
                                                                <td>
                                                                    <input required   onkeyup="calcular_total_compras();" onchange="calcular_total_compras();"  type="number" step="any" name="compras_12" id="compras_12" value="@if ($action=='edit'){{$PlanDeMarketing->compras_12}}@endif">
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                    <div class="form-group col-md-3">

                                                        <div class="caption margin-bottom-10">
                                                            <i class="fa fa-caret-right"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Total de ventas y compras primer año</span>
                                                        </div>
                                                        <table class="table table-condensed  table-bordered">
                                                            <tr>
                                                                <td></td>
                                                                <td style="background-color: #99cc00; color: white;text-align: center ">AÑO 1</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #99cc00; color: white;text-align: center ">Ventas</td>
                                                                <td><input type="text" readonly value="@if ($action=='edit'){{ number_format($PlanDeMarketing->total_ventas(),2)}}@endif" id="total_ventas" style="width: 100%;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #99cc00; color: white;text-align: center ">Compras</td>
                                                                <td><input type="text" readonly value="@if ($action=='edit'){{ number_format($PlanDeMarketing->total_compras(),2)}}@endif" id="total_compras" style="width: 100%;"></td>
                                                            </tr>
                                                        </table>

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
                                                    <a href="/plan-de-marketing/{{session()->get('PlanEmpresa')->id}}" class="btn default"> Cancelar </a>
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
