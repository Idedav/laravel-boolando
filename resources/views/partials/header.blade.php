@php
    $gen_menu = config('menues.type_menu');
    $icon_menu = config('menues.icon_menu');
@endphp

<header>
    <div class="container">

        <nav>
            <ul>
                @foreach ($gen_menu as $item)
                    <li><a href="#">{{ $item['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div class="logo">
            <img src="img/boolean-logo.png" alt="Logo Boolando">
        </div>

        <div class="icons">
            @foreach ($icon_menu as $item)
                <a href="{{ route($item['name']) }}"><i class="{{ $item['text'] }}"></i></a>
            @endforeach
        </div>

    </div>
</header>
