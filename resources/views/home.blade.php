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
                        <span>Dashboard</span>
                    </li>
                </ul>

            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
@if (session()->has('mensaje'))

    <div class="row">

        {{ session()->get('mensaje') }}
    </div>
    @endif


                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Listado de planes de empresa</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Nombre </th>
                                    <th>  </th>
                                    <th>  </th>
                                    <th>
                                        {{--{{ session()->get('key') }} --}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{--{{dd($PlanesEmpresa)}}--}}
                                    @foreach ($PlanesEmpresa as $P)
                                        <tr>
                                            <td> {{ $P->id }} </td>
                                            <td> {{ $P->name }} </td>
                                            <td>
                                                <a href="{{url("/deletePlanEmpresa/".$P->id )}}"  data-toggle="confirmation" data-original-title="¿Estás seguro?"  class="btn btn-danger uppercase">Eliminar</a>
                                            </td>
                                            <td>
                                                <a href="{{url("/editPlanEmpresa/".$P->id )}}" class="btn btn-info uppercase">Editar</a>
                                            </td>

                                            <td>
                                                <a href="{{url("/selectPlanEmpresa/".$P->id )}}" class="btn purple uppercase">Seleccionar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row text-center">
                        <a href="{{url("/newPlanEmpresa" )}}" class="btn btn-success uppercase">Nuevo plan de empresa</a>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET-->


        </div>

        <!-- END CONTENT BODY -->
    </div>
@endsection
