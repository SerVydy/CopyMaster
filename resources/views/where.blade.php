<x-layout title="Где нас найти?">
    <x-section title="Где нас найти?">
        <ul >
            <li>
                <ul class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2">
                    <li><span class="uppercase">адрес:</span> <b class="font-semibold">г. Усть-катав</b></li>
                    <li><span class="uppercase">номер телефона:</span> <b class="font-semibold">+7(919) 123 45 67</b></li>
                    <li><span class="uppercase">email:</span> <b class="font-semibold">copy_master@mail.ru</b></li>
                </ul>
            </li>
            <li>
                <img src="{{ asset('public/map.jpg') }}" alt="" class="h-full w-full object-cover">
            </li>
            
        </ul>
    </x-section>

</x-layout>