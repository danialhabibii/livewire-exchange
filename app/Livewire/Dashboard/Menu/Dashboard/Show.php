<?php

namespace App\Livewire\Dashboard\Menu\Dashboard;

use GuzzleHttp\Client;
use Livewire\Component;

class Show extends Component
{

    public $status = true;
    public $balance;
    public $btc;


    public function convert(){
        $this->status = !$this->status;
    }
    public function render()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://ticker-api.cointelegraph.com/rates/?full=true');

        $body = $response->getBody();
        $data = json_decode($body, true);
        $price = $data['data']['BTC']['USD']['price'];
        $this->balance = auth()->user()->balance;
        $this->btc = floatval($this->balance) / $price;

        return view('livewire.dashboard.menu.dashboard.show');
    }
}
