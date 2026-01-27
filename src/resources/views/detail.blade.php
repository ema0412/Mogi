@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<div class="detail-content">
    <div class="detail-group">
        <h2 class="detail-title">出品</h2>
        <form class="detail-form" action="/update" method="post" novalidate>
            @csrf
            @method('patch')
            <div class="detail-form__group">
                <div class="detail-form__heading">
                    <span class="detail-form__heading-name">日付</span>
                </div>
            </div>
            <div class="detail-form__group">
                <div class="detail-form__heading">
                    <span class="detail-form__heading-name">金額</span>
                </div>
                <div class="detail-form__content-unit">

            </div>
            <div class="detail-form__group">
                <div class="detail-form__heading">
                    <span class="detail-form__heading-name">商品説明</span>
                </div>
                <div class="detail-form__content-unit">
             <div class="detail-form__group">
                <div class="detail-form__heading">
                    <span class="detail-form__heading-name">商品の情報</span>
                </div>
                <div class="detail-form__content-time">

            </div>
            <div class="detail-form__group">
                <div class="detail-form__heading">
                    <span class="detail-form__heading-name">商品へのコメント</span>
                </div>
                <div class="detail-error">
                    @error('exercise_content')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="detail-form__button">
                <div class="detail-form__button-back">
                    <a class="detail-form__button-back--link" href="/weight_logs">戻る</a>
                </div>
                <div class="detail-form__button-update">
                    <button class="detail-form__button-update--submit" type="submit">更新</button>
                </div>
            </div>
        </form>
        <form class="detail-form__button-delete" action="/delete" method="post">
            @method('delete')
            @csrf
            <button class="detail-form__button-delete--submit" type="submit">
                <img src="{{asset('image/trashbox.png')}}" alt="ゴミ箱" class="detail-form__button-delete--img">
            </button>
        </form>
    </div>
</div>
@endsection