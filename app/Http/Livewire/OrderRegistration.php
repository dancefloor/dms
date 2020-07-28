<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class OrderRegistration extends Component
{
    public $uid;
    public $user;
    
    public function mount($id = null)
    {
        $this->uid = $id;                  
    }

    public function updatedUid($value)
    {        
        $this->user = User::find($value);
    }
    
    public function render()
    {
        return view('livewire.order-registration');
    }
}
