 @extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Datos previos
                <small>Datos previos del plan de empresa</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Nuevos datos previos</span>
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

                                        @switch($action) 

                                        @case('edit')
                                            Editar
                                        @break

                                        @case('new')
                                            Nuevo
                                        @break

                                        @case('get')
                                            Ver
                                        @break

                                        @endswitch
                                        plan de operaciones
                                    </span>

                                    <span>
                                  
                                     @if($action == 'edit')                                          
                                            <form method="post" action="{{url("/deleteDatosPrevios")}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                  <input type="hidden" name="plan" value="{{$plan}}">
                                                 
                                                

                                                <button type="submit" class="btn btn-danger uppercase">Eliminar datos previos</button>
                                            </form>
                                              
                                              @endif
                                         </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="form-body" id="tab_1_1">
      

                                             <form class="form-horizontal form-bordered" style="display: block;" @switch($action) @case('new') action="{{url("/savePlanOperaciones")}}" @break @case('edit') action="{{url("/updatePlanOperaciones")}}" @break @endswitch  method="post">
                                                {{ csrf_field() }}
                                                <input name="plan" type="hidden" value="{{$plan}}">
                                              
                                            <div class="form-group">
                                                <label class="control-label">Fecha de inicio de operación</label>
                                                <div class="input-append date" id="datetimepicker" data-date-format="dd-mm-yyyy">
                                                    <input class="span2" size="16" type="text">
                                                        <span class="add-on"><i class="icon-th"></i></span>
                                                </div>  
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Análisis interno</label>

                                            
                                                    <div class="summernote"></div>
                                            

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Condicionantes Externos</label>

                                            
                                                    <div class="summernote"></div>
                                            

                                            </div>

                                              

                                            <div class="form-group">
                                                <label class="control-label">Recursos materiales</label>

                                            
                                                    <div class="summernote"></div>
                                            

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Recursos inmateriales</label>

                                            
                                                    <div class="summernote"></div>
                                            

                                            </div>

                                            @if($action == 'get')
                                                  <a href="/editDatosPrevios/{{$plan}}" type="submit" class="btn btn-success uppercase"><i class="fa fa-pencil"></i> Gestionar</a>
                                                  @else
                                                  <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">Guardar cambios</button>
                                                  @endif



                                     
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

    <script>

        $('.summernote').summernote({
                height : "200px",
                lang : 'es-ES'
        });

       


               $('#datetimepicker').datetimepicker({
                format: 'yyyy-mm-dd',
                startView : 'decade',
                minView : 'month',
                language : 'es'
            });


        $('#datetimepicker').datetimepicker('show');

        $('#datetimepicker').datetimepicker().on('changeDate', function(ev){
                    date = new Date(ev.date);
                    date = date.getDate()+'-' + (date.getMonth()+1) + '-'+date.getFullYear();

                    console.log(date);
                    
                $('.span2').val(date);
});
 



    </script>


@endsection

