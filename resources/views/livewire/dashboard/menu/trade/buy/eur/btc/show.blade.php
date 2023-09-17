<div wire:submit="save" class="trade_form_container">
    <form class="trade_form">
        <select wire:model.live="form.wallet" class="select_wallet">
            <option value="#">Bitcoin Wallet: 1,384.00</option>
        </select>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Price BTC</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$btc_amount ? $eur_amount : 0}} EUR</span>
                </div>
            </div>
            <input wire:key="toEUR" wire:model.live="btc_amount" wire:keyup="toEUR" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('btc_amount')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Amount EUR</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$eur_amounts ? $btc_amounts : 0}} BTC</span>
                </div>
            </div>
            <input wire:key="toBTC" wire:model.live="eur_amounts" wire:keyup="toBTC" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('eur_amounts')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="buy_currency">Buy</button>
    </form>
</div>
