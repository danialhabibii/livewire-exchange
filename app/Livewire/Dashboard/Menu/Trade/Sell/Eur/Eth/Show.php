<?php

namespace App\Livewire\Dashboard\Menu\Trade\Sell\Eur\Eth;

use App\Livewire\Forms\dashboard\menu\trade\buy\Rules;
use GuzzleHttp\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Show extends Component
{

//    public Rules $form;

    public $eur_amount;
    public $eth_amounts;
    public $eth_price;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:1', message: 'The minimum value must be at least 1 €')]
//    #[Rule('max:250000', message: 'The maximum value must be at least 250000 $')]
    public $eur_amounts;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:0.00003', message: 'The minimum value must be at least 0.00003 eth')]
//    #[Rule('max:100', message: 'The maximum value must be at least 100.00 btc')]
    public $eth_amount;

    public function toEUR()
    {
        try {
            if ($this->eth_amount !== null && $this->eth_amount >= 0.00003 && $this->eth_amount <= 100) {
                $this->eur_amount = floatval($this->eth_amount) * $this->eth_price;
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function toETH()
    {
        try {
            if ($this->eur_amounts !== null && $this->eur_amounts >= 1 && $this->eur_amounts <= 250000) {
                $this->eth_amounts = floatval($this->eur_amounts) / $this->eth_price;
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
        $this->eth_price = $data['data']['ETH']['EUR']['price'];
        return view('livewire.dashboard.menu.trade.sell.eur.eth.show');
    }
}
