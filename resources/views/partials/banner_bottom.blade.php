<div class="banner-bottom-container">
        <div class="wrapper">
            <button class="sign-up">SIGN-UP NOW</button>
        </div>
        <div class="wrapper">
            <div class="socials">
                <h2>FOLLOW US</h2>
                @foreach ($icons as $icon)
                    <a href=""><img class="icon" src="{{Vite::asset($icon['icon'])}}"></a>
                @endforeach
            </div>
        </div>


    </div>