<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sticky</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-main.css') }}" rel="stylesheet">
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/text-animation.js') }}"></script>
</head>

<body class="container-fluid m-0">

    <div class="home-container row m-0"
        style="background-image: url({{ asset('assets/main-page/full-background-croped.png') }} );background-size:cover">
        <div class="col-6"></div>
        <div class="col-6">
            <div class="top-header">
                <x-top-button :text="'whatsapp'" :color="'color-1'" />
                <x-top-button :text="'instagram'" :color="'color-2'" />
                <x-top-button :text="'facebook'" :color="'color-3'" />
            </div>
            <div class="main-content">
                <img class="main-logo" src="{{ asset('assets/main-page/big-logo.png') }}" alt="">
                <div class="main-buttons-container">
                    <div class="regular-buttons-container mt-3">

                        <x-regular-button :text="'Our Art'" :modelId="'our-art-dialog'" elementId="our-art-btn">
                        </x-regular-button>
                        <x-regular-button :text="'Choose Your Style'" :modelId="'customer-flow'"></x-regular-button>
                    </div>
                </div>
                <div class="main-text-style text-center text-light text-bold mt-3">
                    <div>
                        A brand designed QR code attracts customers
                    </div>
                    <div>
                        to quickly and easily access your website,
                    </div>
                    <div>
                        social media, or online ordering system.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row carousel-container">
        <x-carousel :carouselName="'main-carousel'">
            @foreach ($main_stickers as $sticker)
                <img class="item" src="{{ asset('assets/art/' . $sticker->path) }}" />
            @endforeach
        </x-carousel>
    </div>
    {{-- <x-dialog :id="'customer-flow'" /> --}}
    <x-dialog :id="'our-art-dialog'">
        {{-- <div class="animated-text-animation">
            <div id="container">
                <div id="message">
                    <a id="animate" href="#">Transmit</a>
                </div>
            </div>
        </div> --}}
        @foreach ($categories as $category)
            <x-regular-button :text="$category->title" :buttonNumber="$category->button_style"></x-regular-button>
        @endforeach
        <x-carousel class="dinamic-carousel" :carouselName="'dialog-carousel'">
            @foreach ($stickers as $sticker)
                <img class="item" src="{{ asset('assets/art/' . $sticker->path) }}" />
            @endforeach
        </x-carousel>
    </x-dialog>
</body>
</html>
