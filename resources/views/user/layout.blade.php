@include('user.partials.head')
@include('user.partials.header')

<main id="main">
    <div class="margin_auto">
        <section id="content">
            @include('user.partials.left_menu')
            @yield('content')
        </section>
    </div>
</main>
@stack('scripts')
@include('user.partials.footer')
