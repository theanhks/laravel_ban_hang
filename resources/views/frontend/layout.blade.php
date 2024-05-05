@include('frontend.partials.head')
@include('frontend.partials.header')

<main id="main">
    <div class="margin_auto">
        <section id="content">
            @include('frontend.partials.left_menu')
            @yield('content')
        </section>
    </div>
</main>
@stack('scripts')
@include('frontend.partials.footer')
