@extends('backend.layouts.body')

@section('title', 'Cat. Perfiles')

@push('css')
	<!-- Fancy-Buttons CSS -->
	<link href="{{asset('backend/dist/css/fancy-buttons.css')}}" rel="stylesheet" type="text/css">
	<!--alerts CSS -->
	<link href="{{asset('backend/vendors/bower_components/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
	@livewireStyles
@endpush

@section('contenido')

	<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Cat. Estados del Viaje</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="index.html">Acceso</a></li>
				<li class="active"><span>Cat. Perfiles</span></li>
			</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
	<!-- /Title -->

	<!-- admon registros -->
	<livewire:perfiles />
	<!-- end admon registros-->

@endsection



@push('js')

<!-- Sweet-Alert  -->
<script src="{{asset('backend/vendors/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
@livewireScripts
<script>
	Livewire.on('addPerfil',()=>{
		$('#myModal').modal('hide');
	});
	Livewire.on('updPerfil',()=>{
		$('#updModal').modal('hide');
	});
</script>

@endpush