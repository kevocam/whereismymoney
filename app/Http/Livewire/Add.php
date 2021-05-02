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
    public $history, $gastos,$getId;
    public $user, $userId, $walletId;

    protected $rules = [
        'mount' => 'required|min:1|',
        'description' => 'nullable|max:200',
    ];
    protected $messages = [
        'mount.required' => 'Este campo es obligatorio.',
        'description.max' => 'Tu descripción no debe ser más de 200 palabras. ',
    ];



    public function updateGastos(){
        $this->gastos = Operation::where('wallet_id',$this->walletId)->where("type", 0)->sum("monto");
    }
    public function updateBalance(){
        $montoWallet = Wallet::find($this->walletId);
        $this->balance = $montoWallet->saldo;  
        $this->history();      
    }
    public function mount(){
        $user = User::find(Auth::user()->id);
        $this->balance = $user->wallets->saldo;
        $this->walletId = $user->wallets->id;
        $this->history();
        $this->updateGastos();
        $this->updateBalance();
   }
    public function clearInputs(){
        $this->mount=" ";
        $this->description=" ";
    }
    public function addIngreso(){
        $this->validate();

        Operation::create([
            "monto"=>$this->mount,
            "description" =>$this->description,
            "wallet_id"=>$this->walletId,
            "type"=>true
        ]);
        $montoWallet = Wallet::find($this->walletId);
        $montoWallet->saldo = $montoWallet->saldo + $this->mount;
        $montoWallet->save();
        $this->balance = $montoWallet->saldo;
        $this->clearInputs();
        $this->history();
        $this->balance = $montoWallet->saldo;  
        session()->flash('message', 'Ingreso actualizado con éxito.');
    }
    public function addGasto(){       
        Operation::create([
            "monto"=>$this->mount,
            "description" =>$this->description,
            "wallet_id"=>$this->walletId,
            "type"=>false
        ]);
        $montoWallet = Wallet::find($this->walletId);
        $montoWallet->saldo = $montoWallet->saldo - $this->mount;
        $montoWallet->save();
        $this->clearInputs();
        $this->balance = $montoWallet->saldo;
        $this->updateGastos();
        $this->history();
        session()->flash('message2', 'Egreso actualizado con éxito.');

    }
    public function history(){
        $this->history = Operation::where('wallet_id', $this->walletId)->latest()->take(10)->get();
    }
    public function render()
    {
        return view('livewire.add');
    }
}
