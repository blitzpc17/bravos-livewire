<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\ocupacion;

class Ocupaciones extends Component
{
    public $ids;
    public $nombre;
    public $clave;

    public function resetInputFields(){
        $this->nombre = '';
        $this->ids='';
    }

    public function store(){
        //insert
        $data = array(
            "nombre"=>$this->nombre,
        );
        ocupacion::create($data);
        session()->flash('message', 'Registro guardado correctamente');
        $this->resetInputFields();
        $this->emit('addOcupacion');
    }

    public function edit($id){
        $edo = ocupacion::where('id', $id)->first();
        $this->ids = $edo->id;
        $this->nombre = $edo->nombre;
    }

    public function update(){
        $data = array(
            "nombre"=>$this->nombre,
        );
        if($this->id){
            ocupacion::where('id', $this->ids)->update($data);
            session()->flash('message', 'Registro modificado correctamente.');
            $this->resetInputFields();
            $this->emit('updOcupacion');
        }
    }

    public function delete($id){
        if($id){
            ocupacion::where('id', $id)->delete();
            session()->flash('message', 'Registro eliminado correctamente.');            
        }
    }

    public function render()
    {
        $ocupaciones = ocupacion::all();
        return view('livewire.ocupaciones',['data'=>$ocupaciones]);
    }
}
