<?php

namespace App\Livewire\Dashboard\Menu\Trade\Buy;

use App\Livewire\Forms\dashboard\menu\trade\buy\Rules;
use GuzzleHttp\Client;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Show extends Component
{

//    public Rules $form;

    public $usd_amount;
    public $btc_amounts;
    public $btc_price;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:10', message: 'The minimum value must be at least 10 $')]
//    #[Rule('max:250000', message: 'The maximum value must be at least 250000 $')]
    public $usd_amounts;
    #[Rule('nullable')]
    #[Rule('required', message: 'The value of this field is required')]
    #[Rule('numeric', message: 'The value must be a number or a decimal')]
    #[Rule('min:0.000002', message: 'The minimum value must be at least 0.000002 btc')]
//    #[Rule('max:100', message: 'The maximum value must be at least 100.00 btc')]
    public $btc_amount;

    public function toUSD()
    {
        try {
            if ($this->btc_amount !== null && $this->btc_amount >= 0.000002 && $this->btc_amount <= 100) {
                $this->usd_amount = floatval($this->btc_amount) * $this->btc_price;
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function toBTC()
    {
        try {
            if ($this->usd_amounts !== null && $this->usd_amounts >= 10 && $this->usd_amounts <= 250000) {
                $this->btc_amounts = floatval($this->usd_amounts) / $this->btc_price;
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
        $this->btc_price = $data['data']['BTC']['USD']['price'];
        return view('livewire.dashboard.menu.trade.buy.show');
    }
}
