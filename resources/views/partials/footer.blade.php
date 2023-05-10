<div class="footer-container">
    <div class="links-wrapper">
        <div class="footer-links">
            @foreach ($footer_categories as $category)
                
            <div class="category">
                <h3>{{ $category['category'] }}</h3>
                <ul>
                @foreach ($category['links'] as $c =>$link)
                    <li><a href="{{$category['links'][$c]}}">{{$category['links'][$c]}}</a>
                    </li>
                @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    <div class="img-wrapper">
        <img class="logo-bg" src="{{Vite::asset('/resources/img/dc-logo-bg.png')}}" alt="logo-bg" />
    </div>
</div>