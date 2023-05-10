<div class="banner-bonus-container">
    @foreach ($items as $item)
        
        <div class="card" v-for="(card, i) in items" :key="i">
            <img src="{{Vite::asset($item['icon'])}}" alt="{{$item['title']}}" />
            <a href="{{$item['title']}}">
                <h4 class="title">{{$item['title']}}</h4>
            </a>
        </div>
    @endforeach
</div>