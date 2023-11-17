@php
    $info_menu = config('menues.info_menu');
    $social_menu = config('menues.social_menu');
@endphp

<footer>
    <div class="container">

        <div class="reference">
            <h3>Boolando s.r.l.</h3>
            <div class="links">
                @foreach ($info_menu as $item)
                    <a href="#">{{ $item['text'] }}</a>
                @endforeach
            </div>
        </div>

        <div class="socials">
            <h4>Trovaci anche su</h4>
            <div class="icon">
                @foreach ($social_menu as $item)
                    <a href="#"><i class="fa-brands {{ $item['text'] }}"></i></a>
                @endforeach
            </div>
        </div>

    </div>
</footer>
