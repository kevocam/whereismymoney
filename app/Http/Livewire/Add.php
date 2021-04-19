<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wallet;
use App\Models\User;

use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
class Add extends Component
{
    public $balance,$mount, $description, $nombre;
    public $history, $gastos;


    public function updateGastos(){
        $this->gastos = Operation::where('wallet_id', $this->getWalletId())->where("type", 0)->sum("monto");
    }

    public function getWalletId(){
        $getId = User::find(Auth::user()->id);
        return $getId->wallets->id;
    }
    public function updateBalance(){
        $montoWallet = Wallet::find($this->getWalletId());
        $this->balance = $montoWallet->saldo;  
        $this->history();
      
    }
    public function mount(){
        $Getbalance = User::find(Auth::user()->id);
        $this->balance = $Getbalance->wallets->saldo;
        $this->history();
        $this->updateGastos();

   }
    public function clearInputs(){
        $this->mount=" ";
        $this->description=" ";
    }
    public function addIngreso(){
        Operation::create([
            "monto"=>$this->mount,
            "description" =>$this->description,
            "wallet_id"=>$this->getWalletId(),
            "type"=>true
        ]);
        $montoWallet = Wallet::find($this->getWalletId());
        $montoWallet->saldo = $montoWallet->saldo + $this->mount;
        $montoWallet->save();
        $this->clearInputs();
        $this->updateBalance();
        session()->flash('message', 'Ingreso actualizado con éxito.');


    }
    public function addGasto(){       
        Operation::create([
            "monto"=>$this->mount,
            "description" =>$this->description,
            "wallet_id"=>$this->getWalletId(),
            "type"=>false
        ]);
        $montoWallet = Wallet::find($this->getWalletId());
        $montoWallet->saldo = $montoWallet->saldo - $this->mount;
        $montoWallet->save();
        $this->clearInputs();
        $this->updateBalance();
        $this->updateGastos();
        session()->flash('message2', 'Egreso actualizado con éxito.');

    }
    public function history(){
        $this->history = Operation::where('wallet_id', $this->getWalletId())->latest()->take(10)->get();
    }

    public function render()
    {
        return view('livewire.add');
    }
}
