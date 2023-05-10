<div class="wrapper">
        <div class="current-series">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="container">
            <SingleCard v-for="(comic, i) in comics" :key="i" :thumb="comic.thumb" :series="comic.series" />
            <button class="load-more">LOAD MORE</button>
        </div>
    </div>