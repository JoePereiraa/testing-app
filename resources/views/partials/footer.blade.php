<footer>
    <div class="container-footer">
        <div class="logo">
            <img src="/images/logo-footer.png">
        </div>
        <nav>
            <div class="menu">
                <span>Menu</span>
                <ul>
                    @foreach ($menu as $link)
                        <li>
                            <a href="">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="menu">
                <span>Social Media</span>
                <ul>
                    @foreach ($menu as $link)
                        <li>
                            <a href="">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <div class="copyright">
        <span>Copyright 2023 Joe Dev</span>
    </div>
</footer>
