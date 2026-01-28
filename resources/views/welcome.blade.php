<x-layout>
    <main class="py-10">
        <h1>
            Habitos!
        </h1>

        @auth
            <p>
                @dd(auth()->user()->email)
                Bem Vindo, {{ auth()->user()->name }}
            </p>
        @endauth
    </main>
</x-layout>
