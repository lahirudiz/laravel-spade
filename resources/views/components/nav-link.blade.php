@props(['route'])

@php
    use Illuminate\Support\Facades\Route;

    // If $route matches a registered route name, use route()
    if (Route::has($route)) {
        $href = route($route);
        $isActive = request()->routeIs($route);
    } 
    else {
        // Otherwise treat it as a raw URL (like "/" or "/about")
        $href = url($route);
        $isActive = request()->is(ltrim($route, '/'));
    }
@endphp

<a href="{{ $href }}"
   class="rounded-md px-3 py-2 text-sm font-medium
          {{ $isActive ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
    {{ $slot }}
</a>
