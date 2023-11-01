<!DOCTYPE html>
<html lang="en">
<head>
    @include('meal-custom-layout.header')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

{{--            @auth--}}
                @include('meal-custom-layout.navbar')
                @include('meal-custom-layout.sidebar')
                @include('meal-custom-layout.alert')
{{--            @endauth--}}

    {{--        @include('custom-layout.alert')--}}
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>

{{--                @yield('modal')--}}
            </div>
        </div>
    </div>

@include('meal-custom-layout.footer')
</body>
</html>
