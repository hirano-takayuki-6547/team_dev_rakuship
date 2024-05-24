@extends('layouts.app')
@push('style')
    <link rel="stylesheet" href="/main/item_buy_form.css">
@endpush
@section('content')
    <script src="https://js.pay.jp/v2/pay.js"></script>

    <div class="container">
        <div class="container">
            <h1>決済情報入力</h1>
            <div class="">
                <div id="card-form-alert" class="" role="alert" style="display: none"></div>
                <div class="input-label">
                    <label for="number-form">カード番号</label>
                    <div id="number-form" class="payment-input"><!-- ここにカード番号入力フォームが生成されます --></div>
                </div>
                <div class="input-label">
                    <label for="expiry-form">有効期限</label>
                    <div id="expiry-form" class="payment-input"><!-- ここに有効期限入力フォームが生成されます --></div>
                </div>
                <div class="input-label">
                    <label for="expiry-form">セキュリティコード</label>
                    <div id="cvc-form" class="payment-input"><!-- ここにCVC入力フォームが生成されます --></div>
                </div>
            </div>
        </div>

        <div>
            <button class="btn" onclick="onSubmit(event)">購入を確定する</button>
        </div>

        <form id="buy-form" method="POST" action="{{ route('item.buy', [$item->id]) }}">
            @csrf
            <input type="hidden" id="card-token" name="card-token">
        </form>
    </div>

    <script>
        const payjp = Payjp('{{ config('payjp.public_key') }}')

        const elements = payjp.elements()

        const numberElement = elements.create('cardNumber')
        const expiryElement = elements.create('cardExpiry')
        const cvcElement = elements.create('cardCvc')
        numberElement.mount('#number-form')
        expiryElement.mount('#expiry-form')
        cvcElement.mount('#cvc-form')

        const onSubmit = (event) => {
            const msgDom = document.getElementById('card-form-alert');
            msgDom.style.display = "none";

            payjp.createToken(numberElement).then(function(r) {
                if (r.error) {
                    msgDom.innerText = r.error.message;
                    msgDom.style.display = "block";
                    return;
                }

                document.querySelector('#card-token').value = r.id;
                document.querySelector('#buy-form').submit();
            })
        }
    </script>
@endsection
