@if (count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $favorite)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($favorite->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{-- お気に入り投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $favorite->user->name, ['user' => $favorite->user->id]) !!}
                        <span class="text-muted">posted at {{ $favorite->created_at }}</span>
                    </div>
                    <div>
                        {{-- お気に入り内容 --}}
                        <p class="mb-0">{!! nl2br(e($favorite->content)) !!}</p>
                    　　{{-- お気に入り／お気に入り解除ボタン --}}
                        @include('microposts_favorite.favorite_button')
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $favorites->links() }}
@endif