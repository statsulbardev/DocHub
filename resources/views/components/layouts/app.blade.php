<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'BPS Sulbar KMS' }}</title>

        @vite('resources/js/app.js')

        @livewireStyles

        <style>[x-cloak] { display: none }</style>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200 scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">
        {{ $slot }}

        @livewireScriptConfig

        @stack('scripts')
    </body>
</html>
