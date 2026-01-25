<x-layout>
    <main class="py-10">
        <section class="mt-4"> <h1>Faça seu login!</h1>

            <form action="/login" method="POST">
                @csrf

                <input type="email" name="email" placeholder="Digite seu e-mail" class="bg-white p-2 border-2" value="{{ old('email') }}">

                <input type="password" name="password" placeholder="Digite sua senha" class="bg-white p-2 border-2">

                <button type="submit" class="bg-white border-2 px-4 py-2">Entrar</button>

                <div>
                    @error('email')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }} </p>
                    @enderror
                </div>
            </form>
        </section>
    </main>
</x-layout>
