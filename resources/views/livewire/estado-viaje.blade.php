<div>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">            
            <button wire:click="AddRegistro()" class="btn btn-primary btn-lable-wrap left-label pull-right"  data-toggle="modal" data-target="#myModal" > <span class="btn-label"><i class="fa fa-pencil-square"></i> </span><span class="btn-text">Nuevo registro</span></button>
            <br>
        </div>

        <div class="col-sm-12"><br></div>

        <div class="col-sm-8">
            <div class="col form-inline">
                Mostrar: &nbsp;
                <select wire:model="perPage" class="form-control">
                    <option>2</option>
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>25</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4">
                <input wire:model.debounce.30ms="search" class="form-control" type="text" placeholder="Buscar...">
        </div>

        <div class="col-sm-12"><br></div>
        
    </div>
    <div class="table-wrap">
        <div class="table-responsive">            
            <table class="table table-hover table-bordered table-bordered display mb-30">
                <thead>
                    <tr>
                        <th rowspan="2">No.</th>
                        <th wire:click="sortBy('clave')" style="cursor:pointer" rowspan="2">
                            Clave
                            @include('backend.extras.dt_sort', ['field'=>'clave'])                            
                        </th>
                        <th wire:click="sortBy('nombre')" style="cursor:pointer"  rowspan="2">
                            Nombre
                            @include('backend.extras.dt_sort', ['field'=>'nombre'])                            
                        </th>
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
                        <td align="center">
                            <button class="btn btn-warning" wire:click.prevent="EditRegistro({{$dt}})" data-toggle="modal" data-target="#editModal" ><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td align="center">
                            <button class="btn btn-danger" wire:click.prevent="deleteRegister({{$dt->id}})"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <p>
            Mostrando Del {{$data->firstItem()}} al {{$data->lastItem()}} de {{$data->total()}} registros
        </p>
    </div>
    @if ($data->lastPage() > 1)
    <div class="row">
		<div class="col-md-12">
        <center>
			<ul class="pagination">
            <li> <a href="{{$data->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a> </li>
                @for($i=1; $i<=$data->lastPage(); $i++)
				
				<li class="{{$data->currentPage()==$i?'active':''}}"> <a href="{{$data->url($i)}}">{{$i}}</a> </li>				
			@endfor
            <li> <a href="{{$data->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a> </li>
            </ul>
		</div>
        </center>
	</div>
    @endif

    <!-- MODALS-->

<!-- modal add-->
	<div wire:ignore.self id="myModal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title" id="myModalLabel">Nuevo estado</h5>
				</div>
				<div class="modal-body">
					<form >
						<div class="form-group">
                            @error('clave') <span class="text-warning">{{ $message }}</span><br> @enderror
							<label for="formGroupExampleInput">Clave</label>                            
							<input type="text" class="form-control" wire:model="clave" placeholder="Ej. 001" maxlength="3">
						</div>
						<div class="form-group">
                            @error('nombre') <span class="text-warning">{{ $message }}</span><br> @enderror
							<label for="formGroupExampleInput2">Nombre</label>
							<input type="text" class="form-control" wire:model="nombre" placeholder="Ej. Nuevo" maxlength="15">
						</div>										
				</div>

				<div class="modal-footer">
						<button id="add-smt" type="button" wire:click.prevent="SaveRegistro()" class="btn btn-success" >Guardar</button>
						<button type="button" class="btn btn-primary cancel" data-dismiss="modal" wire:click.prevent="closeModal()">Cancelar</button>
					</form>	
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<!-- end modal add-->



<!-- modal edit-->
<div wire:ignore.self id="editModal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title" id="myModalLabel">Modificar estado</h5>
				</div>
				<div class="modal-body">
					<form >
						<input type="hidden" wire:model.lazy="editingRegister.id"  />
                      
						<div class="form-group">                        
							<label for="formGroupExampleInput">Clave</label>
							<input type="text" class="form-control" wire:model.lazy="editingRegister.clave"  placeholder="Ej. 001" readonly maxlength="3">
						</div>
						<div class="form-group">
                        @error('nombre') <span class="text-warning">{{ $message }}</span><br> @enderror
							<label for="formGroupExampleInput2">Nombre</label>
							<input type="text" class="form-control" wire:model.lazy="editingRegister.nombre" placeholder="Ej. Nuevo" maxlength="15">
						</div>
										
				</div>
				<div class="modal-footer">
						<button id="add-smt" type="button" wire:click.prevent="SaveRegistro()" class="btn btn-success" >Guardar</button>
						<button type="button" class="btn btn-primary cancel" data-dismiss="modal" wire:click.prevent="closeModal()">Cancelar</button>
					</form>	
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<!-- end modal add-->















</div>
