<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\estadoViaje as edo;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Validator;

class EstadoViaje extends Component
{
    use WithPagination;
    
    protected $register;

    public $sortBy = 'clave';
    public $sortDirection = 'asc';
    public $search = '';
    public $perPage = 10;

    public $createModal = false;
   // public $editModal = false;
    public $deleteModal = false;

    public $editingRegister;
    public $deletingRegister;
    public $nombre;
    public $clave;

    protected $rules = [
        'clave' => 'required|unique|min:3|max:3',
        'nombre' => 'required|max:15|min:3',
    ];


    public function FetchRegistros(){
        $data = edo::query()      
                ->where('nombre','like', '%'.$this->search.'%')
                ->orwhere('clave','like', '%'.$this->search.'%')
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);

            $this->register = $data;
    }

    public function UpdatingBusqueda(){
        $this->resetPage();
    }

    public function sortBy($field){
        if($this->sortDirection=='asc'){
            $this->sortDirection = 'desc';            
        }else{
            $this->sortDirection = 'asc';
        }
        return $this->sortBy = $field;
    }

    public function AddRegistro(){
        $this->createModal = true;
    }
    public function resetInputFields(){
        $this->ids=null;
        $this->nombre=null;
        $this->clave=null;
    }

    public function SaveRegistro(){
        if($this->createModal){
            //insert      
            $data = $this->validate(
                
                [
                    'clave' => 'unique:estadoviaje,clave|required|min:3|max:3',
                    'nombre' => 'required|min:5|max:15'
                ],
                [
                    'clave.required' => 'El campo Clave es obligatorio.',
                    'clave.unique' => 'Ya existe un registro con esta clave.',
                    'nombre.required' => 'El campo Nombre es obligatorio.',
                    'nombre.min' => 'Ingresar minimo 5 caracteres.',
                ],
            );
            edo::create($data);
            session()->flash('message', 'Registro guardado correctamente');
            $this->resetInputFields();
            $this->FetchRegistros();
            $this->closeModal();
            $this->emit('addEdoViaje');
        }else{
           /* $data = array(
                "nombre"=>$this->editingRegister['nombre'],
                "clave"=>$this->editingRegister['clave']
            );*/
            $data = Validator::make(   
                [
                    'nombre'=>$this->editingRegister['nombre']
                ],             
                [                    
                    'nombre' => 'required|min:5|max:15'
                ],
                [                   
                    'nombre.required' => 'El campo Nombre es obligatorio.',
                    'nombre.min' => 'Ingresar minimo 5 caracteres.',
                ],
               
            )->validate();
            edo::where('id', $this->editingRegister['id'])->update($data);
            session()->flash('message', 'Registro guardado correctamente');
            $this->resetInputFields();
            $this->FetchRegistros();
            $this->closeModal();
            $this->emit('updEdoViaje');
        }
       
    }

    public function EditRegistro($registro){
        $this->editingRegister = $registro;
        $this->createModal = false;
    }

    public function closeModal(){
        $this->createModal = $this->deleteModal = false;
    }


    public function deleteRegister($id){
        edo::where('id', $id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
        $this->resetInputFields();
        $this->FetchRegistros();
        $this->closeModal();
    }



    public function render()
    {
        $this->FetchRegistros();
        return view('livewire.estado-viaje', ['data'=>$this->register]);
    }
}
