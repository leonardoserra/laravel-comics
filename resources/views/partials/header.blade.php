<div class="header-container">
        <img class="logo" src="../assets/img/dc-logo.png" alt="logo" />
        <nav class="navbar-menu">
            <ol class="categories">
                    @foreach ($categories as $link )
                <li>
                        {{$link['category']}}
                </li>
                    @endforeach
                {{-- <li v-for="(links, i) in categories" :key="i"><a :href="'href'">{{ links.category }}</a>
                </li> --}}
            </ol>
        </nav>
</div>