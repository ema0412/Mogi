@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/goal_setting.css')}}">
@endsection

@section('content')
<div class="background">
    <div class="goal-content">
        <h2 class="goal-title">商品の出品</h2>
        <form method="post" action="/mypage" class="goal-setting">
            @csrf
            @method('patch')
            <div class="goal-setting__form">
                <input type="text" class="goal-setting__input" name="target_weight" value="{{old('target_weight', $weightTarget->target_weight)}}">
                <input type="hidden" name="id" value="{{$weightTarget->id}}">
            </div>
                    <div class="right-contents">
            <p class="message">{{session('message')}}</p>
            <a href="/products/register" class="add-button"><span>+</span>商品を追加</a>
            <div class="product-contents">
                
                <div class="product-content">
                    
                    <img src= alt="商品画像" class="img-content" />
                    <div class="detail-content">                       
                    </div>
                </div>
                
            </div>
         <div class="pagination-content">
        </div>
        </div>
            <div class="goal-setting__form-error">
                @error('target_weight')
                {{$message}}
                @enderror
            </div>
            <div class="goal-setting__button">
                <a href="/weight_logs" class="goal-setting__button-back">戻る</a>
                <button class="goal-setting__button-update" type="submit">更新</button>
            </div>
        </form>
    </div>
</div>
@endsection