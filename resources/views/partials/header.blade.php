<header>
    <x-layout.container>
        <nav>
            <img src="https://via.placeholder.com/50x50">
            <ul>
                @foreach ($menu as $link)
                    <li>
                        <a href="{{ $link['route'] }}">
                            {{ $link['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </x-layout.container>
</header>
