<div wire:submit="save" class="trade_form_container">
    <form class="trade_form">
        <select wire:model.live="form.wallet" class="select_wallet">
            <option value="#">BinanceCoin Wallet: 1,384.00</option>
        </select>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Price BNB</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$bnb_amount ? $usd_amount : 0}} USD</span>
                </div>
            </div>
            <input wire:key="toUSD" wire:model.live="bnb_amount" wire:keyup="toUSD" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('bnb_amount')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <div class="trade_form_input_container">
            <div class="trade_form_input_label">
                <span>Amount USD</span>
                <div>
                    <span>Receive:</span>
                    <span class="trade_receive_amount">{{$usd_amounts ? $bnb_amounts : 0}} BNB</span>
                </div>
            </div>
            <input wire:key="toBNB" wire:model.live="usd_amounts" wire:keyup="toBNB" class="wallet_input" type="number"
                   placeholder="0.0">
            @error('usd_amounts')
            <span class="warning">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="sell_currency">Sell</button>
    </form>
</div>
