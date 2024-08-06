@extends('layouts.app3')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
     <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  @endsection
</head>
<body>
  <main>
    @section('content')
    <div class="login-container">
    <h1>Login</h1>
   
  <form method="POST" class="form" action="/admin"> 
    @csrf 
    <div class="form-group">
      <label class="email_label" for="email">メールアドレス</label>
      <input type="text" name="userid" value="{{ old('userid') }}">
      <div class="form__error">
             @error('userid')
            {{ $message }}
            @enderror
            </div>
    </div>
    <div class="form-group">
      <label class="password_label" for="password">パスワード</label>
      <input type="password" id="password" name="password" value="{{ old('password') }}">
      <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
            </div>
    </div>
    <button type="submit">ログイン</button>
  </form>
  @endsection
  </main>
</body>
</html>