@extends('layouts.login_register')

@section('css')
<link rel="stylesheet" href="{{asset('css/register_step2.css')}}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h1 class="register-form__heading-title">COACHTECH</h1>
        <h2 class="register-form__heading-subtitle">プロフィール設定</h2>
        <h3 class="register-form__heading-step">画像を選択</h3>
    </div>
    <form class="register-form" action="/register/step2" method="post" novalidate>
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="weight" value="{{ old('weight') }}" placeholder="郵便番号を入力"/>
                </div>
                <div class="form__error">
                    @error('weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="target_weight" value="{{ old('target_weight') }}" placeholder="住所を入力"/>
                </div>
                <div class="form__error">
                    @error('target_weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
            </div>
    </form>
</div>
@endsection