<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\puesto;

class Puestos extends Component
{
    public $ids;
    public $nombre;
    public $clave;

    public function resetInputFields(){
        $this->nombre = '';
        $this->clave = '';
        $this->ids='';
    }

    public function store(){
        //insert
        $data = array(
            "nombre"=>$this->nombre,
            "clave"=>$this->clave
        );
        puesto::create($data);
        session()->flash('message', 'Registro guardado correctamente');
        $this->resetInputFields();
        $this->emit('addPuesto');
    }

    public function edit($id){
        $edo = puesto::where('id', $id)->first();
        $this->ids = $edo->id;
        $this->nombre = $edo->nombre;
        $this->clave = $edo->clave;
    }

    public function update(){
        $data = array(
            "nombre"=>$this->nombre,
            "clave"=>$this->clave,
        );
        if($this->id){
            puesto::where('id', $this->ids)->update($data);
            session()->flash('message', 'Registro modificado correctamente.');
            $this->resetInputFields();
            $this->emit('updPuesto');
        }
    }

    public function delete($id){
        if($id){
            puesto::where('id', $id)->delete();
            session()->flash('message', 'Registro eliminado correctamente.');            
        }
    }

    public function render()
    {
        $puestos = puesto::all();
        return view('livewire.puestos',['data'=>$puestos]);
    }
}
