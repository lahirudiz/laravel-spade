@props(['to'])

@php
    use Illuminate\Support\Facades\Route;

    // If $to matches a registered route name, use route()
    if (Route::has($to)) {
        $href = route($to);
        $isActive = request()->routeIs($to);
    } else {
        // Otherwise treat it as a raw URL (like "/" or "/about")
        $href = url($to);
        $isActive = request()->is(ltrim($to, '/'));
    }
@endphp

<a href="{{ $href }}"
   class="rounded-md px-3 py-2 text-sm font-medium
          {{ $isActive ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
    {{ $slot }}
</a>
