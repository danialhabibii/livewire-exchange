<?php

namespace App\View\Components\dashboard\News\NewIcon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewICon extends Component
{
    /**
     * Create a new component instance.
     */

    public $icon;
    public $symbol;
    public $name;
    public $timestamp;
    public $price;
    public $rank;
    public $market;
    public $volume;

    /**
     * @param $icon
     * @param $symbol
     * @param $name
     * @param $timestamp
     * @param $price
     * @param $rank
     * @param $market
     * @param $volume
     */
    public function __construct($icon, $symbol, $name, $timestamp, $price, $rank, $market, $volume)
    {
        $this->icon = $icon;
        $this->symbol = $symbol;
        $this->name = $name;
        $this->timestamp = $timestamp;
        $this->price = $price;
        $this->rank = $rank;
        $this->market = $market;
        $this->volume = $volume;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.news.new-icon.new-i-con');
    }
}
