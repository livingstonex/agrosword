@include('partials.header')
        <div id="app">
            <div class="tint-overlay" :class="showNavigation ? '': 'active-tint'" @click="toggleMenu"></div>
            @include('partials.dashboard-navbar') 
            <div class="main-wrapper" :class="showNavigation ? 'show-navigation-main': 'hide-navigation-main'">
                <div class="sidebar-wrapper shadow-sm bg-white" :class="showNavigation ? 'show-navigation-sidebar': 'hide-navigation-sidebar'">
                    <span class="fa fa-arrow-left pointer position-absolute close-nav d-block d-md-none" @click="toggleMenu"></span>
                    @include('partials.sidebar')
                </div>
                <div class="main-content p-3 mt-5" :class="showNavigation ? 'show-navigation-content': 'hide-navigation-content'">
                    @yield('content')
                </div>
            </div>
        </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
