
<h1> Home Page </h1>
<h2> No Auth Required </h2>

    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-nav-link>