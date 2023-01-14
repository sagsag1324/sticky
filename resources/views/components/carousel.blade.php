<div id="wrapper" class="carousel-container">
    <div id="carousel-{{ $carousel_name }}" class="carousel">
        <div id="content-{{ $carousel_name }}" class="content">
            {{ $slot }}
        </div>
    </div>
    <button id="prev-{{ $carousel_name }}" class="prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
    </button>
    <button id="next-{{ $carousel_name }}" class="next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
    </button>
</div>
<script>
    gap = 16;
    carousel = document.getElementById("carousel-{{ $carousel_name }}");
    content = document.getElementById("content-{{ $carousel_name }}");
    next = document.getElementById("next-{{ $carousel_name }}");
    prev = document.getElementById("prev-{{ $carousel_name }}");
</script>
<script src="{{ asset('js/carousel.js') }}"></script>
