
<?php
 
namespace App\Http\Livewire;
 
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;
 
class Profileform extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms; 
 
    public function render(): View
    {
        return view('livewire.profile.profileform');
    }
}
