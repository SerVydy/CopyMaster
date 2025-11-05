<x-layout title="Регистрация">
    <x-section title="Регистрация">
        <form action="" class="grid gap-y-6 shadow-lg p-8 w-full lg:w-2/3 justify-self-center">
            <x-form.div title="name">
                <input type="text" name="name" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="surname">
                <input type="text" name="surname" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="patronymic">
                <input type="text" name="patronymic" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="login">
                <input type="text" name="login" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="email">
                <input type="email" name="email" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="password">
                <input type="password" name="password" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div title="password_again">
                <input type="password" name="password_confirmation" class="border border-gray-200 p-1">
            </x-form.div>
            <x-form.div title="согласие с правилами регистрации" class="grid-cols-2">
                <input type="checkbox" name="rules" class="border border-gray-200 p-1">
            </x-form.div>
            <x-form.button>Login</x-form.button>
        </form>
    </x-section>
</x-layout>