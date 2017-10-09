@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                @if (session()->get('PlanEmpresa'))
                    Empresa seleccionada: <b>{{ session()->get('PlanEmpresa')->name }}</b>
                @endif
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
                        <span> <b> @if (session()->get('PlanEmpresa')){{ session()->get('PlanEmpresa')->name }}@endif</b></span>
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


                                    </span>
                                </div>
                            </div>
                            <div class="portlet-body">


                                Plan de empresa
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- END CONTENT BODY -->
    </div>
@endsection
