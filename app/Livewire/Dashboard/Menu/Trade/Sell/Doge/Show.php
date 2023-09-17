<?php

namespace App\Livewire\Dashboard\Menu\Trade\Sell\Doge;

use App\Livewire\Forms\dashboard\menu\trade\buy\Rules;
use GuzzleHttp\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Show extends Component
{

//    public Rules $form;

    public $usd_amount;
    public $doge_amounts;
    public $doge_price;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:1', message: 'The minimum value must be at least 1 $')]
//    #[Rule('max:250000', message: 'The maximum value must be at least 250000 $')]
    public $usd_amounts;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:5', message: 'The minimum value must be at least 5 doge')]
//    #[Rule('max:100', message: 'The maximum value must be at least 100.00 btc')]
    public $doge_amount;

    public function toUSD()
    {
        try {
            if ($this->doge_amount !== null && $this->doge_amount >= 5 && $this->doge_amount <= 100) {
                $this->usd_amount = floatval($this->doge_amount) * $this->doge_price;
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function toDOGE()
    {
        try {
            if ($this->usd_amounts !== null && $this->usd_amounts >= 1 && $this->usd_amounts <= 250000) {
                $this->doge_amounts = floatval($this->usd_amounts) / $this->doge_price;
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
        $this->doge_price = $data['data']['DOGE']['USD']['price'];
        return view('livewire.dashboard.menu.trade.sell.doge.show');
    }
}
