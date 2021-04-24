@extends('backend.layouts.body')

@section('title', 'Admon. Usuarios')

@push('css')
	<!-- Fancy-Buttons CSS -->
	<link href="{{asset('backend/dist/css/fancy-buttons.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('contenido')

	<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Administracion de usuarios</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="index.html">Acceso</a></li>
				<li class="active"><span>Admon. Usuarios</span></li>
			</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
	<!-- /Title -->

	<!-- admon registros -->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h4 class="panel-title txt-dark">Usuarios registrados</h4>					
						</div>				
						<div class="clearfix"></div>
					</div>
					<div  class="panel-wrapper collapse in">
						<div  class="panel-body">

							<div class="table-wrap">
								<div class="table-responsive">
									<div class="pull-right">
										<button class="btn btn-primary btn-lable-wrap left-label" data-toggle="modal" data-target="#myModal"> <span class="btn-label"><i class="fa fa-pencil-square"></i> </span><span class="btn-text">Nuevo registro</span></button>
									</div>
									<br>
									<table class="table table-hover table-bordered display mb-30">
										<thead>
											<tr>
												<th rowspan="2">No.</th>
												<th rowspan="2">Nombre</th>
												<th colspan="2">Opciones</th>
											</tr>
											<tr>								
												<th>Modif.</th>
												<th>Eliminar</th>
											<tr>
										</thead>
										<tbody>
											<tr>
												<td>...</td>
												<td>...</td>
												<td>
													<button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>
												</td>
												<td>
													<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							<div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- admon registros -->


	<!-- modals -->
		<!-- modal add-->
			<!-- sample modal content -->
			<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
						</div>
						<div class="modal-body">
							<h5 class="mb-15">Overflowing text to show scroll behavior</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		<!-- end modal add-->
	<!-- end modals-->

@endsection



@push('js')



@endpush