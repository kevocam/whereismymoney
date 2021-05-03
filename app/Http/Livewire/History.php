<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Operation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class History extends Component
{
    
    use WithPagination;
    public $modalOpen = false;
    public $modalDelete = false;
    protected $rules = [
        'mountEdit' => 'required|min:1|',
        'descripcionEdit' => 'nullable|max:200',
    ];
    protected $queryString = ['search'];

    public $mount, $description, $date,$idDelete, $search;

    public $mountEdit, $descripcionEdit, $dateEdit,$dataEdit, $idEdit;


    public function render()
    {   return view('livewire.history',[
            'historys' => Operation::where('wallet_id', $this->getWalletId())->where('description', 'like', '%'.$this->search.'%')->orderBy('id','desc')->paginate(10),

        ]);
    }
    public function destroy(){
        Operation::find($this->idDelete)->delete();
        session()->flash('message', 'Borrado con exito.');
        $this->modalDelete= false;

    }

    public function delete($id){
        $this->idDelete=$id;
        $this->modalDelete = true;
    }
    public function closeModalEdit(){
        $this->modalOpen= false;
    }
    public function openModalEdit(){
        $this->modalOpen= true;
    }
    public function getWalletId(){
        $getId = User::find(Auth::user()->id);
        return $getId->wallets->id;
    }
    public function closeModalDelete(){
        $this->modalDelete = false;

    }
    public function update($idE){

        $this->openModalEdit();
        $this->idEdit= $idE;
        $this->dataEdit = Operation::find($this->idEdit);        
        $this->mountEdit = $this->dataEdit->monto;
        $this->descripcionEdit = $this->dataEdit->description;
        $this->dateEdit = $this->dataEdit->created_at;
    }    
    public function store(){   
        $this->validate();
        $record = Operation::find($this->idEdit);
        $record->update([
            'monto' => $this->mountEdit,
            'description' => $this->descripcionEdit
        ]);

        session()->flash('message', 'Registro modificado con éxito.');
        $this->closeModalEdit();
    }

}

