@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- お気に入り情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- お気に入り一覧 --}}
            @include('users.favorites')
            {{-- お気に入り／お気に入り解除ボタン --}}
            @include('microposts_favorite.favorite_button')
        </div>
    </div>
@endsection
