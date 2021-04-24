<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h4 class="panel-title txt-dark">Visualizacion de perfiles</h4>					
						</div>				
						<div class="clearfix"></div>
					</div>
					<div  class="panel-wrapper collapse in">
						<div  class="panel-body">
                            @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{session('message')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
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
												<th rowspan="2">Clave</th>
												<th rowspan="2">Nombre</th>
												<th colspan="2">Opciones</th>
											</tr>
											<tr>								
												<th>Modif.</th>
												<th>Eliminar</th>
											<tr>
										</thead>
										<tbody>
											@foreach($data as $dt)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$dt->clave}}</td>
												<td>{{$dt->nombre}}</td>
												<td>
													<button class="btn btn-warning" data-toggle="modal" data-target="#updModal" wire:click.prevent="edit({{$dt->id}})" ><i class="fa fa-pencil-square-o"></i></button>
												</td>
												<td>
													<button class="btn btn-danger" wire:click.prevent="delete({{$dt->id}})"><i class="fa fa-trash-o"></i></button>
												</td>
											</tr>
											@endforeach
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
			<div wire:ignore.self id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h5 class="modal-title" id="myModalLabel">Nuevo perfil</h5>
						</div>
						<div class="modal-body">
							<form >
								
                              
								<div class="form-group">
									<label for="formGroupExampleInput">Clave</label>
									<input type="text" class="form-control" wire:model="clave" id="addClave" name="addClave" placeholder="Ej. 001">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Nombre</label>
									<input type="text" class="form-control" wire:model="nombre" id="addNombre" name="addNombre" placeholder="Ej. Nuevo">
								</div>
												
						</div>
						<div class="modal-footer">
								<button id="add-smt" type="button" wire:click.prevent="store()" class="btn btn-success" >Guardar</button>
								<button type="button" class="btn btn-primary cancel" data-dismiss="modal">Cancelar</button>
							</form>	
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		<!-- end modal add-->
		<!-- modal updt-->
		<!-- sample modal content -->	
			<div wire:ignore.self id="updModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h5 class="modal-title" id="modalMdtit">Modificar perfil</h5>
						</div>
						<div class="modal-body">
							<form>
                                <input type="hidden" name="mdId" wire:model="id" />
								<div class="form-group">
									<label for="formGroupExampleInput">Clave</label>
									<input type="text" class="form-control" id="mdClave" name="mdClave" wire:model="clave" placeholder="Ej. 001" readonly>
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Nombre</label>
									<input type="text" class="form-control" id="mdNombre" name="mdNombre" wire:model="nombre" placeholder="Ej. Nuevo">
								</div>
												
						</div>
						<div class="modal-footer">
								<button id="upd-smt" type="button" wire:click.prevent="update()" class="btn btn-success" >Guardar</button>
								<button type="button" class="btn btn-primary cancel" data-dismiss="modal">Cancelar</button>
							</form>	
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->


		<!-- end modal updt-->
	<!-- end modals-->