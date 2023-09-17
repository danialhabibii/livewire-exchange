<div wire:submit="save" class="trade_form_container">
    <form class="trade_form">
        <select wire:model.live="form.wallet" class="select_wallet">
            <option value="#">DogeCoin Wallet: 1,384.00</option>
        </select>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Price DOGE</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$doge_amount ? $usd_amount : 0}} USD</span>
                </div>
            </div>
            <input wire:key="toUSD" wire:model.live="doge_amount" wire:keyup="toUSD" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('doge_amount')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Amount USD</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$usd_amounts ? $doge_amounts : 0}} DOGE</span>
                </div>
            </div>
            <input wire:key="toDOGE" wire:model.live="usd_amounts" wire:keyup="toDOGE" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('usd_amounts')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="buy_currency">Buy</button>
    </form>
</div>
