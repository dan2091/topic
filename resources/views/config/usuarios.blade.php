@extends('layouts.default')

@section('title', 'Blank Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Configuraci&oacute;n</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Usuarios</a></li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">{{Lang::choice("dictionary.user",2)}} <small>@lang("dictionary.user_description")</small></h1>
	<!-- end page-header -->
	
    <!-- begin panel -->
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" title="@lang('buttons.expand')" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" title="@lang('buttons.reload')" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    </div>
                    <h4 class="panel-title">{{Lang::choice("dictionary.list",1)}}</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group row m-b-15 m-l-10">
                        <div class="row col-md-12">
                            <button type="button" class="btn btn-primary"><i class="fa fa-user-plus"></i> @lang("buttons.add")</button>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <div class="row col-md-12">
                            <table id="tbl_listado_usuario" class="table table-hover">
                                <thead>
                                <tr>
                                    <th style='width:5%'></th>
                                    <th>{{Lang::choice("dictionary.user",count($users))}}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if( count($users) > 0 )
                                        @php $colors = array('grey','purple','primary','info','success','lime','danger','warning','yellow','inverse') @endphp
                                        @foreach( $users as $key=>$user )
                                            @php $n = rand(0,count($colors)-1); @endphp
                                            <tr>
                                                <td><label style="cursor:default" disabled class="btn btn-circle btn-{{$colors[$n]}}">{{$user->nombre_usuario[0]}}</label></td>
                                                <td>{{$user->nombre_usuario}}<br><small>{{$user->email}}</small></td>
                                                <td><span id='span_options' style='display:none;'>
                                                    <button type='button' id='spn_edit_{{$user->id}}' name='spn_edit_{{$user->id}}' 
                                                        class='btn btn-warning btn-sm btn-circle btn-icon' title='@lang("buttons.edit")' 
                                                        onmouseover='$(this).tooltip("show");'><i class='fa fa-pencil-alt'></i></button>&nbsp;&nbsp;
                                                    <button type='button' id='spn_pkey_{{$user->id}}' name='spn_pkey_{{$user->id}}' 
                                                        class='btn btn-success btn-sm btn-circle btn-icon' title='@lang("buttons.change_pass")' 
                                                        onmouseover='$(this).tooltip("show");'><i class='fa fa-key'></i></button></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
	<!-- end panel -->
@endsection
@push('scripts')
	<!--<script src="/assets/plugins/moment/moment.js"></script>-->
	<script>
		$(document).ready(function() {
            load_user_edit();
        });
        function load_user_edit(){
            var lang = $('#hd_app_language').val();
            
            if( lang == 'es')
                var table =  $('#tbl_listado_usuario').addClass( 'nowrap' ).DataTable({
                    "language": { "url": "../assets/json/spanish_lang.json" }
                });
            else
                var table = $('#tbl_listado_usuario').addClass( 'nowrap' ).DataTable();
 
                new $.fn.dataTable.Buttons( table, {
                    buttons: [
                        'copy', 'excel', 'pdf'
                    ]
                } );
                 /*{
                dom:"<'row'<'col-md-6'Bl><'col-md-6'f>>" +
                "<'row'<'col-md-12't>>" +
                "<'row'<'col-md-6'i><'col-md-6'p>>",
                "bPaginate": true,
                "bStateSave": false,
                "bAutoWidth": false,
                "bScrollAutoCss": true,
                "bProcessing": true,
                "bRetrieve": true,
                "aLengthMenu": [[10,25, 50, 100, -1], [10,25, 50, 100, "Todos"]],
                "lengthChange": false,
                "sScrollXInner": "110%",
                "sScrollY": "390px",
                "fnInitComplete": function() {
                    this.css("visibility", "visible");
                },
                paging: true,
                searching: true,
                responsive: true,
                orderClasses: true,
                "bFilter": false,
                "sScrollX": "100%",
                */
            
            $('#tbl_listado_usuario tr').hover(function() {
                $(this).find( "span" ).css( "display", "inline" );
            }, function() {
                $(this).find( "span" ).css( "display", "none" );
            });
            TableManageButtons.init();
            
        }
	</script>
@endpush