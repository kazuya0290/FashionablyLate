@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  @endsection
</head>
<body>
  <main>
    @section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
       <form class="form" action="/contacts/confirm" method="post">
        @csrf
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
              <input class="form_last_name" type="text" name="last_name" placeholder="山田" value="{{ old('last_name') }}"/>
              <input class="form_first_name" type="text" name="first_name" placeholder="太郎" value="{{ old('first_name') }}"/>
            <div class="form__error">
              @error('last_name')
              {{ $message}}
              @enderror
              @error('first_name')
              {{ $message}}
              @enderror
            </div>
     <div class="form__group">
          <div class="form__group-title">
           <span class="form__label--item">性別</span>
           <span class="form__label--required">※</span>
          </div>
        <div class="form__group-content">
          <div class="form__input--radio">
              <input id="men" type="radio" name="gender" value="1">
              <label for="men" name="gender" value="男性">男性</label>
              <input id="women" type="radio" name="gender" value="2">
              <label for="women" name="gender" value="女性">女性</label>
              <input id="another" type="radio" name="gender" value="3">
              <label for="another" name="gender" value="その他">その他</label>
              <div class="form__error">
                 @error('gender')
              {{ $message}}
              @enderror
              </div>
      </div>
    </div>
  </div>
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
              <input class="mail_form" type="text" name="email" placeholder="test@example.com" value="{{ old ('email') }}"/>
            <div class="form__error">
              @error('email')
                {{ $message }}
                @enderror
            </div>
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
              <input class="first_number" type="text" name="tell" placeholder="090" value="{{ old ('tell') }}"/>-
              <input class="second_number" type="text" name="tell" placeholder="1234" value="{{ old ('tell') }}"/>-
              <input class="third_number" type="text" name="tell" placeholder="5678" value="{{ old ('tell') }}" />
            <div class="form__error">
              @error('tell')
                {{ $message }}
                @enderror
            </div>
            <span class="form__label--item">住所 </span>
            <span class="form__label--required">※ </span>
              <input class="address_form" type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old ('address') }}"/>
            <div class="form__error">
              @error('address')
                {{ $message }}
                @enderror
            </div>
            <span class="form__label--item">建物名</span>
              <input class="building_form" type="text" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old ('building') }}"/>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <select class="contact-form"  name="contact-form">
            <option value="{{ old('contact-form') }}">選択してください</option>
            <option value="商品のお届けについて">1.商品のお届けについて</option>
             <option value="商品の交換について">2.商品の交換について</option>
             <option value="商品トラブル">3.商品トラブル</option>
              <option value="ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
              <option value="その他">5.その他</option>
            </select>
            </div>
            <div class="form__error">
             @error('contact-form')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" >{{ old ('detail') }}</textarea>
              <div class="form__error">
             @error('detail')
                {{ $message }}
                @enderror
            </div>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
    @endsection
  </main>
</body>

</html>