@extends('layouts.app')

@section('content')
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
                        <span>Nuevo plan de empresa</span>
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
                                    
                                        @if ($action=='edit')
                                            Editar
                                        @else
                                            Nuevo
                                        @endif
                                        plan de empresa 
                                    </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                        {{--<form role="form" action="#">--}}
                                        <form class="register-form" style="display: block;" @if ($action=='new') action="{{url("/savePlanEmpresa")}}" @else action="{{url("/updatePlanEmpresa/".$id)}}"  @endif  method="post">

                                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label">Nombre</label>
                                                <input type="text" name="name"  placeholder="Nombre del nuevo plan de empresa"  @if ($action=='new')  value="" @else  value="{{ $PlanEmpresa->name }}"   @endif class="form-control" required>
                                            </div>
                                            <div class="margiv-top-10">
                                                <a href="{{ route('home') }}" class="btn default"> Cancelar </a>
                                                {{--<a href="javascript:;" class="btn green"> Guardar Cambios </a>--}}
                                                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">Guardar</button>
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
