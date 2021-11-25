<div>
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-object.section>
                <div class="flex mt-1 py-8 justify-center items-center ">
                    <input type="text" id="password" class="rounded-full py-3 px-6 w-3/4 pl-3 pr-10  border-2 border-gray-200  hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors" placeholder="Search..."> 
                </div>
            </x-object.section>

            <x-object.section>
                <div class="py-3 divide-y-2 divide-black divide-opacity-50 space-y-8">
                    <h1 class="text-5xl uppercase font-bebas px-2 p-1">
                        {{ __('preguntas frecuentes') }}
                    </h1>

                    <!-- 
                        Cards
                     -->
                    <x-object.card>
                        <x-slot name="image">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
                        </x-slot>
                        <x-slot name="name">
                            Khatab wedaa
                        </x-slot>
                        <x-slot name="title">
                            Accessibility tools for designers and developers
                        </x-slot>
                        <x-slot name="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!
                        </x-slot>
                        <x-slot name="date">
                            Mar 10, 2019
                        </x-slot>
                    </x-object.card>

                    <x-object.card>
                        <x-slot name="image">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="avatar">
                        </x-slot>
                        <x-slot name="name">
                            basulto Orlando Ivan
                        </x-slot>
                        <x-slot name="title">
                            Como defendernos de una ataque civerneutico
                        </x-slot>
                        <x-slot name="description">
                            Veremos la importanci de hacer bien los metodos
                        </x-slot>
                        <x-slot name="date">
                            Mar 13, 2021
                        </x-slot>
                    </x-object.card>
                    
                    <x-object.card>
                        <x-slot name="image">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/women/90.jpg" alt="avatar">
                        </x-slot>
                        <x-slot name="name">
                            basulto Orlando Ivan
                        </x-slot>
                        <x-slot name="title">
                            Como defendernos de una ataque civerneutico
                        </x-slot>
                        <x-slot name="description">
                            Veremos la importanci de hacer bien los metodos
                        </x-slot>
                        <x-slot name="date">
                            Mar 13, 2021
                        </x-slot>
                    </x-object.card>

                    <x-object.card>
                        <x-slot name="image">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/men/5.jpg" alt="avatar">
                        </x-slot>
                        <x-slot name="name">
                            basulto Orlando Ivan
                        </x-slot>
                        <x-slot name="title">
                            Como defendernos de una ataque civerneutico
                        </x-slot>
                        <x-slot name="description">
                            Veremos la importanci de hacer bien los metodos
                        </x-slot>
                        <x-slot name="date">
                            Mar 13, 2021
                        </x-slot>
                    </x-object.card>

                    <x-object.card>
                        <x-slot name="image">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/women/24.jpg" alt="avatar">
                        </x-slot>
                        <x-slot name="name">
                            basulto Orlando Ivan
                        </x-slot>
                        <x-slot name="title">
                            Como defendernos de una ataque civerneutico
                        </x-slot>
                        <x-slot name="description">
                            Veremos la importanci de hacer bien los metodos
                        </x-slot>
                        <x-slot name="date">
                            Mar 13, 2021
                        </x-slot>
                    </x-object.card>

                </div>
            </x-object.section>  

        </div>
    </div>
</div>