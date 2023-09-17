<?php

namespace App\Livewire\Dashboard\Menu\Trade\Sell\Eur\Ada;

use App\Livewire\Forms\dashboard\menu\trade\buy\Rules;
use GuzzleHttp\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Show extends Component
{

//    public Rules $form;

    public $eur_amount;
    public $ada_amounts;
    public $ada_price;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:1', message: 'The minimum value must be at least 1 €')]
//    #[Rule('max:250000', message: 'The maximum value must be at least 250000 $')]
    public $eur_amounts;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:2', message: 'The minimum value must be at least 2 ada')]
//    #[Rule('max:100', message: 'The maximum value must be at least 100.00 btc')]
    public $ada_amount;

    public function toEUR()
    {
        try {
            if ($this->ada_amount !== null && $this->ada_amount >= 2 && $this->ada_amount <= 100) {
                $this->eur_amount = floatval($this->ada_amount) * $this->ada_price;
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function toADA()
    {
        try {
            if ($this->eur_amounts !== null && $this->eur_amounts >= 1 && $this->eur_amounts <= 250000) {
                $this->ada_amounts = floatval($this->eur_amounts) / $this->ada_price;
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function save()
    {
        $this->validate();
    }

    public function render()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://ticker-api.cointelegraph.com/rates/?full=true');

        $body = $response->getBody();
        $data = json_decode($body, true);
        $this->ada_price = $data['data']['ADA']['EUR']['price'];
        return view('livewire.dashboard.menu.trade.sell.eur.ada.show');
    }
}
