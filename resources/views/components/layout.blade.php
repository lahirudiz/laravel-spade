@props(['title' => 'Default Title', 'description' => 'Default description'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | {{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-full">
    <nav class="bg-black">
        <x-navigation>{{ $slot }}</x-navigation>
    </nav>
    <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    </div>
</body>
</html>