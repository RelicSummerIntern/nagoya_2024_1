<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>決済画面</title>
    <?php
        $store = App\Models\Store::where('id', $storeClothes->store_id)->first();
    ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .header-container img {
            max-height: 150px; /* 画像の最大高さを指定 */
            object-fit: contain;
        }
        .store-info {
            text-align: right;
        }
        .payment-method-section {
            display: none; /* 初期状態では隠す */
        }
        .cash-payment-options {
            display: none; /* 現金支払い時のみ表示 */
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-blue-100">
        @include('layouts.navigation')

        <main class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="header-container">
                <!-- 左上の画像 -->
                <div>
                    <img src="{{ asset($storeClothes->picture) }}" alt="Selected Image">
                </div>

                <!-- 右上の服屋の名前と金額 -->
                <div class="store-info">
                    <h2 id="store-name" class="text-xl font-semibold text-gray-800">{{$store->name}}</h2>
                    <p id="store-amount" class="text-lg font-medium text-gray-600">金額: ¥3000</p>
                </div>
            </div>

            <!-- 支払い方法の選択 -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">支払い方法</label>
                <select id="payment-method" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="" selected disabled>選択してください</option>
                    <option value="credit">クレジットカード支払い</option>
                    <option value="paypay">PayPay支払い</option>
                </select>
            </div>
    


            <!-- クレジットカード支払いセクション -->
            <div id="credit-section" class="payment-method-section">
                <div class="bg-white shadow rounded-lg p-6">
                <p>クレジットカード支払いを選択しました。</p>

                    <form>
                        <div class="mb-4">
                            <label for="card_number" class="block text-sm font-medium text-gray-700">カード番号</label>
                            <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="card_expiry" class="block text-sm font-medium text-gray-700">有効期限</label>
                            <input type="text" id="card_expiry" name="card_expiry" placeholder="MM/YY" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="card_cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                            <input type="text" id="card_cvc" name="card_cvc" placeholder="123" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <!-- 金額入力 -->
                        <div class="mb-4">
                            <label for="card_amount" class="block text-sm font-medium text-gray-700">金額</label>
                            <input type="text" id="card_amount" name="card_amount" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-600">
                        </div>
                    </form>
                </div>
            </div>

            <!-- PayPay支払いセクション -->
            <div id="paypay-section" class="payment-method-section">
                <p>PayPay支払いを選択しました。</p>
                <!-- 金額入力 -->
                <div class="mb-4">
                    <label for="paypay_amount" class="block text-sm font-medium text-gray-700">金額</label>
                    <input type="text" id="paypay_amount" name="paypay_amount" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-600">
                </div>
            </div>

            <!-- 提出ボタン -->
            <div>
                <a href= " {{ route('point') }}"  class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                    決済を完了する
                </a>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('payment-method').addEventListener('change', function() {
            const selectedMethod = this.value;
            const amount = document.getElementById('store-amount').textContent.replace('金額: ¥', '');
            
            // 全ての支払い方法セクションを非表示にする
            document.querySelectorAll('.payment-method-section').forEach(section => {
                section.style.display = 'none';
            });


            // 選択された支払い方法のセクションを表示する
            if (selectedMethod === 'credit') {
                document.getElementById('credit-section').style.display = 'block';
                document.getElementById('card_amount').value = amount;
            } else if (selectedMethod === 'paypay') {
                document.getElementById('paypay-section').style.display = 'block';
                document.getElementById('paypay_amount').value = amount;
            }
        });

        // 初期表示で金額を入力フィールドに反映
        document.addEventListener('DOMContentLoaded', function() {
            const amount = document.getElementById('store-amount').textContent.replace('金額: ¥', '');
            document.getElementById('amount').value = amount;
        });
    </script>
</body>
</html>
