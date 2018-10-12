<!-- Body of the side -->
<body>
    <div class="flex-center position-ref">
        <div class="content">
            @include('layouts.login')
            <div class="title m-b-md">
                @yield('title')
            </div>
            @include('layouts.nav')
            @include('layouts.errors')
            @yield('content')
            <hr>
            @include('version')
        </div>
    </div>
    @include('js.main')
    <script>
        @yield('js')
    </script>
    @include('sweet::alert')

</body>