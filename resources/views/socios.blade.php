@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Socios
                <small>Socios del plan de empresa</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Añadir socios</span>
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
                                   
                                  
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active" id="tab_1_1">
                                           

                                             <form class="register-form" style="display: block;" action="/saveSocio" method="post">
                                                {{ csrf_field() }}
                                                <input name="plan" type="hidden" value="{{$plan}}">
                                            <div class="form-group">
                                              

                                              <label class="control-label">Número de socios</label>
                                            <select id="numerosocios">
                                                @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                 @endfor
                                            </select>
                                           
                                                   
                                            </div>

                                            <div id="formSocios">
                                                  
                                                <div><h3>Socio 1</h3>

                                                    <div class='form-group'>
                                                        <label style="padding-right : 10px;" class='control-label'>Nombre: </label>
                                                        <input type='text' name='nombre[]'  value='' required>
                                                        <label style="padding-right : 10px;padding-left : 10px;" class='control-label'>Apellidos:</label>
                                                        <input type='text' name='apellido[]'  value='' required>
                                                    </div>

                                                    <div class='form-group'><label class='control-label'>Experiencia</label><textarea type='text' name='experiencia[]' class='form-control' required></textarea></div>
                                                      
                                                </div>


                                              

                                                  

                                            </div>

                                            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">Guardar socios</button>
                                        </form>
                                    
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

    <script src="/js/menuSocios.js"></script>


@endsection