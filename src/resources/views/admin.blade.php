@extends('layouts.app2')

<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Admin</h2>
      </div>
</div>

<div class="admin__content">
  <form class="create-form">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="content" placeholder="名前やメールアドレスを入力してください">
    </div>
    <select class="gender"  name="gender">
            <option value="">性別</option>
            <option value="全て">全て</option>
             <option value="男性">男性</option>
             <option value="女性">女性</option>
              <option value="その他">その他</option>
    </select>
    <select class="contact-form"  name="contact-form">
            <option value="{{ old('contact-form') }}">お問い合わせの種類</option>
            <option value="商品のお届けについて">1.商品のお届けについて</option>
             <option value="商品の交換について">2.商品の交換について</option>
             <option value="商品トラブル">3.商品トラブル</option>
              <option value="ショップへのお問い合わせ">4.ショップへのお問い合わせ</option>
              <option value="その他">5.その他</option>
      </select>
      <input class="date" type="date"></input>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">検索</button>
    </div>
    <div class="reset-form__button">
      <button class="reset-form__button-submit" type="submit">リセット</button>
    </div>
  </form>
  <div class="admin-table">
    <table class="admin-table__inner">
      <tr class="admin-table__row">
        <th class="admin-table__header">
          <span class="admin-table__header-span">お名前</span>
          <span class="admin-table__header-span">性別</span>
          <span class="admin-table__header-span">メールアドレス</span>
          <span class="admin-table__header-span">お問い合わせの種類</span>
      </tr>
      @foreach ($contacts as $contact)
      <tr class="admin-table__row">
        <td class="admin-table__item">
          <form class="detail-form" action="/contacts/detail" method="post">
            @method('PATCH') @csrf
            <div class="detail-form__item">
              <input
                class="detail-form__item-input"
                type="text"
                name="first_name"
                value="{{ $contact['contacts'] }}"
              />
              <input type="hidden" name="id" value="{{ $contact['id'] }}"/>
            </div>
            <div class="detail-form__button">
              <button class="detail__button-submit" type="submit">詳細</button>
            </div>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection