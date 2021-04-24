<?php

namespace App\Http\Livewire;

use App\estadoViaje;
use Livewire\Component;

class Edoviaje extends Component
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
        estadoViaje::create($data);
        session()->flash('message', 'Registro guardado correctamente');
        $this->resetInputFields();
        $this->emit('addEdoViaje');
    }

    public function edit($id){
        $edo = estadoViaje::where('id', $id)->first();
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
            estadoViaje::where('id', $this->ids)->update($data);
            session()->flash('message', 'Registro modificado correctamente.');
            $this->resetInputFields();
            $this->emit('updEdoViaje');
        }
    }

    public function delete($id){
        if($id){
            estadoViaje::where('id', $id)->delete();
            session()->flash('message', 'Registro eliminado correctamente.');            
        }
    }

    public function render()
    {
        $estados = estadoViaje::all();
        return view('livewire.edoviaje',['data'=>$estados]);
    }
}
