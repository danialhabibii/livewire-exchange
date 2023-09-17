<?php

namespace App\View\composers;

use GuzzleHttp\Client;
use Illuminate\View\View;

class NewCurrency
{
//imePeriod must be one of 1h, 3h, 12h, 24h, 7d, 30d, 3m, 1y, 3y, 5y
    public function compose(View $view)
    {
        $client = new Client();
        $response = $client->get('https://coinranking.com/api/v2/coins?tags[]=meme&limit=5&orderBy=listedAt&orderDirection=desc&timePeriod=24h&referenceCurrencyUuid=yhjMzLPhuIDl');
        $data = json_decode($response->getBody(), true);
        $coins = $data['data']['coins'];
        $names = [];
        foreach ($coins as $coin) {
            $names[] = $coin;
            $view->with([
                'info' => $names,
            ]);
        }


    }

}
