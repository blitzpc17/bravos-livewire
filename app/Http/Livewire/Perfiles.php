<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\perfil;

class Perfiles extends Component
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
        perfil::create($data);
        session()->flash('message', 'Registro guardado correctamente');
        $this->resetInputFields();
        $this->emit('addPerfil');
    }

    public function edit($id){
        $edo = perfil::where('id', $id)->first();
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
            perfil::where('id', $this->ids)->update($data);
            session()->flash('message', 'Registro modificado correctamente.');
            $this->resetInputFields();
            $this->emit('updPerfil');
        }
    }

    public function delete($id){
        if($id){
            perfil::where('id', $id)->delete();
            session()->flash('message', 'Registro eliminado correctamente.');            
        }
    }
    public function render()
    {
        $perfiles = perfil::all();
        return view('livewire.perfiles',['data'=>$perfiles]);
    }
}
