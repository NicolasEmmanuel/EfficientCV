<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use Livewire\Component;
use Forms\Contracts\HasForms;
use Forms\Concerns\InteractsWithForms;

class Profileform extends Component implements HasForms 
{
    use InteractsWithForms; 

    public function mount(Profile $profile):void{

        $this->biography = $profile->biography;

    }

    public function render()
    {
        return view('livewire.profile.profileform');
    }
}
