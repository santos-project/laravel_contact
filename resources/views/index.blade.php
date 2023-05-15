<x-top-layout>
    <header>
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            <div class="flex justify-between gap-x-8">
                <a href="{{ route('about.index') }}" class="text-sm font-semibold leading-6 text-gray-900">About</a>
                <a href="{{ route('contacts.index') }}"
                    class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
            </div>
            <div class="lg:flex lg:flex-1 lg:justify-end">
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-sky-500 py-2 px-8 border border-sky-500 rounded">{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-sky-500 py-2 px-8 border border-sky-500 rounded">Log
                                in</a>
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </header>
</x-top-layout>
