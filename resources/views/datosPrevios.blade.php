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
                                            Nuevos
                                        @break

                                        @case('get')
                                            Ver
                                        @break

                                        @endswitch
                                        datos previos
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
                                    <div class="tab-pane active" id="tab_1_1">
                                           

                                             <form class="register-form" style="display: block;" @switch($action) @case('new') action="{{url("/saveDatosPrevios")}}" @break @case('edit') action="{{url("/updateDatosPrevios")}}" @break @endswitch  method="post">
                                                {{ csrf_field() }}
                                                <input name="plan" type="hidden" value="{{$plan}}">
                                            <div class="form-group">
                                                <label class="control-label">Nombre de la empresa</label>

                                                <input type="text" name="empresa"  @switch($action) @case('new')  value="" @break @case('edit')  value="{{$datosPrevios->nombre_empresa}}" @break @case('get') value="{{$datosPrevios->nombre_empresa}}" readonly @endswitch class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                              

                                            @if($action=='new')
                                              <label class="control-label">Número de socios</label>
                                            <select id="numerosocios">
                                                @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                                 @endfor
                                            </select>
                                            @elseif($action=='edit')
                                            <a href='/newSocio/{{$plan}}' class="btn btn-success uppercase"><i class="fa fa-plus"></i> Añadir socio(s)</a>
                                            @endif
                                                   
                                            </div>

                                            <div id="formSocios">
                                                    @if($action == 'new')
                                                <div><h3>Socio 1</h3>

                                                    <div class='form-group'>
                                                        <label style="padding-right : 10px;" class='control-label'>Nombre: </label>
                                                        <input type='text' name='nombre[]'  value='' required>
                                                        <label style="padding-right : 10px;padding-left : 10px;" class='control-label'>Apellidos:</label>
                                                        <input type='text' name='apellido[]'  value='' required>
                                                    </div>

                                                    <div class='form-group'><label class='control-label'>Experiencia</label><textarea type='text' name='experiencia[]' class='form-control' required></textarea></div>
                                                        @endif
                                                </div>


                                                @if($action == 'edit')
                                                    @foreach($socios as $i => $socio)
                                                <div id="header{{$socio->id}}">
                                                    <h3>Socio {{$i+1}}</h3>
                                                </div>
                                                    <div id="socio{{$socio->id}}" class='form-group'>
                                                        <label class='control-label'>Nombre </label>
                                                        <input type='text' name='nombre[]'  value='{{$socio->nombre}}' required> 
                                                        <label class='control-label'>Apellidos</label>
                                                        <input type='text' name='apellido[]'  value='{{$socio->apellidos}}' required>
                                                        <button type="submit" class="socio" style="margin-left : 20px" class="btn btn-danger" value="{{$socio->id}}">
                                                            <i class="fa fa-trash"></i> Eliminar socio</button>
                                                    </div>

                                                    <div id="experiencia{{$socio->id}}" class='form-group'>
                                                        <label class='control-label'>Experiencia</label>
                                                        <textarea type='text' name='experiencia[]' class='form-control' value="{{$socio->experiencia}}" required>{{$socio->experiencia}}</textarea>
                                                    </div>
                                                    @endforeach
                                                    @endif

                                            @if($action == 'get')
                                                    <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>Socios de la empresa </div>
                                      
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Nombre </th>
                                                        <th> Apellidos </th>
                                                        <th> Experiencia </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($socios as $socio)
                                                    <tr>
                                                        <td> {{$socio->nombre}} </td>
                                                        <td> {{$socio->apellidos}} </td>
                                                        <td> {{$socio->experiencia}} </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endif
                             </div>

                                            <div class="form-group">
                                                <label class="control-label">Origen de la idea</label>


                                                @if($action=='new')

                                                <textarea name="origen" class="form-control" required></textarea> 

                                                @else  
                                                <textarea name="origen" value="{{$datosPrevios->origen_idea}}" class="form-control" required @if($action=='get') readonly="readonly" @endif>{{$datosPrevios->origen_idea}}</textarea>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Elementos identificativos</label>

                                                 @if($action=='new')

                                                <textarea name="elementos" class="form-control" required></textarea> 

                                                @else 

                                                <textarea name="elementos" value="{{$datosPrevios->elementos_identificativos}}" class="form-control" required @if($action == 'get') readonly="readonly" @endif>{{$datosPrevios->elementos_identificativos}}</textarea>
                                                @endif

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

        <div id="ajaxResponse"></div>

        <!-- END CONTENT BODY -->
    </div>

    @if($action == 'new')
    <script src="/js/menuSocios.js"></script>

@endif

<script>
    
     $('.socio').click(function (e) {
        e.preventDefault();
        var id = $(this).val();

        $.ajax({
            type: "POST",
            url:  '/deleteSocio',
            data: {id: id},
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

            success: function( id ) {
                $('#socio'+id.id).remove();
                $('#header'+id.id).remove();
                $('#experiencia'+id.id).remove();
            }
        });
    });
</script>
@endsection

