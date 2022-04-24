@extends('layouts.app')

@section('content')

  
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <!-- <h2>Checkout form</h2> -->
    <h2>申し込みフォーム</h2>
    <!-- <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
    <p class="lead">これは Bootstrap のフォーム操作によって作成されたサンプルフォームです。各フォームグループは内容を埋めずに提出しようとした際にバリデーションが行われます。</p>
  </div>

    <div class="col-md-8 order-md-1">
      <!-- <h4 class="mb-3">Billing address</h4> -->
      <h4 class="mb-3">請求先</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <!-- <label for="firstName">First name</label> -->
            <label for="firstName">名字</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              <!-- Valid first name is required. -->
              名字を入力してください。
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <!-- <label for="lastName">Last name</label> -->
            <label for="lastName">名前</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              <!-- Valid last name is required. -->
              名前を入力してください。
            </div>
          </div>
        </div>

        <div class="mb-3">
          <!-- <label for="username">Username</label> -->
          <label for="username">ユーザーネーム</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              <!-- Your username is required. -->
              ユーザーネームを入力してください。
            </div>
          </div>
        </div>

        <div class="mb-3">
          <!-- <label for="email">Email <span class="text-muted">(Optional)</span></label> -->
          <label for="email">メールアドレス <span class="text-muted">（オプション）</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            <!-- Please enter a valid email address for shipping updates. -->
            有効なメールアドレスを入力してください。
          </div>
        </div>

        <div class="mb-3">
          <!-- <label for="address">Address</label> -->
          <label for="address">送り先住所</label>
          <!-- <input type="text" class="form-control" id="address" placeholder="1234 Main St" required> -->
          <input type="text" class="form-control" id="address" placeholder="東京都千代田区千代田1-1" required>
          <div class="invalid-feedback">
            <!-- Please enter your shipping address. -->
            送り先住所を入力してください。
          </div>
        </div>

        <div class="mb-3">
          <!-- <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label> -->
          <label for="address2">住所2 <span class="text-muted">（オプション）</span></label>
          <!-- <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"> -->
          <input type="text" class="form-control" id="address2" placeholder="アパートやマンション名">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <!-- <label for="country">Country</label> -->
            <label for="country">国</label>
            <select class="custom-select d-block w-100" id="country" required>
              <!-- <option value="">Choose...</option> -->
              <option value="">選択してください</option>
              <!-- <option>United States</option> -->
              <option>日本</option>
            </select>
            <div class="invalid-feedback">
              <!-- Please select a valid country. -->
              有効な国を選択してください。
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <!-- <label for="state">State</label> -->
            <label for="state">都道府県</label>
            <select class="custom-select d-block w-100" id="state" required>
              <!-- <option value="">Choose...</option> -->
              <option value="">選択してください</option>
              <!-- <option>California</option> -->
              <option>東京都</option>
            </select>
            <div class="invalid-feedback">
              <!-- Please provide a valid state. -->
              有効な都道府県を入力してください。
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <!-- <label for="zip">Zip</label> -->
            <label for="zip">郵便番号</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              <!-- Zip code required. -->
              郵便番号を入力してください。
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <!-- <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label> -->
          <label class="custom-control-label" for="same-address">送り先は請求先と同じ</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <!-- <label class="custom-control-label" for="save-info">Save this information for next time</label> -->
          <label class="custom-control-label" for="save-info">保存して次回からの入力を省略する</label>
        </div>
        <hr class="mb-4">

        <!-- <h4 class="mb-3">Payment</h4> -->
        <h4 class="mb-3">支払い方法</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <!-- <label class="custom-control-label" for="credit">Credit card</label> -->
            <label class="custom-control-label" for="credit">クレジットカード</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <!-- <label class="custom-control-label" for="debit">Debit card</label> -->
            <label class="custom-control-label" for="debit">デビットカード</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <!-- <label class="custom-control-label" for="paypal">PayPal</label> -->
            <label class="custom-control-label" for="paypal">ペイパル</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <!-- <label for="cc-name">Name on card</label> -->
            <label for="cc-name">カードに書かれている名前</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <!-- <small class="text-muted">Full name as displayed on card</small> -->
            <small class="text-muted">カード表面に書かれているフルネーム</small>
            <div class="invalid-feedback">
              <!-- Name on card is required -->
              カードに書かれている名前を入力してください
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <!-- <label for="cc-number">Credit card number</label> -->
            <label for="cc-number">クレジットカード番号</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              <!-- Credit card number is required -->
              クレジットカード番号を入力してください
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <!-- <label for="cc-expiration">Expiration</label> -->
            <label for="cc-expiration">有効期限</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              <!-- Expiration date required -->
              有効期限を入力してください
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              <!-- Security code required -->
              セキュリティコードを入力してください
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button> -->
        <button class="btn btn-primary btn-lg btn-block" type="submit">申込みを続ける</button>
      </form>
    </div>
  </div>

 
</div>



    
</html>




@endsection
