<?php

namespace App\View\composers;

use App\Livewire\Dashboard\Menu\Trade\Buy\Show;
use Illuminate\View\View;
use GuzzleHttp\Client;
use Livewire\Component;
use Livewire\Livewire;

class currency
{
    public function compose(View $view)
    {
        $client = new Client();

        $response = $client->request('GET','https://ticker-api.cointelegraph.com/rates/?full=true');

        $body = $response->getBody();
        $data = json_decode($body,true);
        $view->with([
           'data'=>$data,
        ]);
    }

}
