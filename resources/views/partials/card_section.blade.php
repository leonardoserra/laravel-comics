<div class="cards-wrapper">
        <div class="current-series">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="cards-container">
            @foreach ($comics as $comic)
                
                <div class="card">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                        <div class="title">{{$comic['series']}}</div>
                </div>

            @endforeach
            <button class="load-more">LOAD MORE</button>
        </div>
    </div>