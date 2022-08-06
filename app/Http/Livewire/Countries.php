<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class Countries extends Component
{
    public $continent,$country_name,$capital_city;
    public function render()
    {
        return view('livewire.countries',[
            'continents'=>Continent::orderBy('continent_name','asc')->get(),
            'countries'=>Country::orderBy('country_name','asc')->paginate(5)
        ]);
    }

    public function save(){
        $this->validate([
             'continent'=>'required',
             'country_name'=>'required|unique:countries',
             'capital_city'=>'required'
        ]);

        $save = Country::insert([
              'continent_id'=>$this->continent,
              'country_name'=>$this->country_name,
              'capital_city'=>$this->capital_city,
        ]);

        if($save){
            $this->dispatchBrowserEvent('CloseAddCountryModal');
            // $this->checkedCountry = [];
        }
    }

    public function OpenAddCountryModal()
    {
        $this->continent='';
        $this->country_name='';
        $this->capital_city='';
        $this->dispatchBrowserEvent('OpenAddCountryModal');
    }

    public function CloseAddCountryModal()
    {
        $this->dispatchBrowserEvent('CloseAddCountryModal');
    }
    
    public function OpenEditCountryModal($id)
    {
        $this->dispatchBrowserEvent('OpenEditCountryModal',\compact('id'));
    }
}
