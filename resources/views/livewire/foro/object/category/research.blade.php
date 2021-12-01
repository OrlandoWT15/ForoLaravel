<div>
    <x-object.container> 
        <x-object.section>
            <div class="py-3 divide-y-2 divide-black divide-opacity-50 space-y-8">
                <h1 class="text-5xl uppercase font-bebas px-2 p-1">
                    {{ __('busqueda de academias') }}
                </h1>
    
                <!-- 
                    Cards
                    -->
                <x-object.card :link="route('discover')">
                    <x-slot name="image">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
                    </x-slot>
                    <x-slot name="name">
                        Victor Omar
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
    
                <x-object.card :link="route('discover')">
                    <x-slot name="image">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="avatar">
                    </x-slot>
                    <x-slot name="name">
                        Basulto Orlando Ivan
                    </x-slot>
                    <x-slot name="title">
                        Como defendernos de una ataque civerneutico
                    </x-slot>
                    <x-slot name="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cum, blanditiis provident maxime odit sapiente impedit, sint quasi nemo ipsum, excepturi laboriosam aliquam error eum nam ratione nisi modi corrupti.
                    </x-slot>
                    <x-slot name="date">
                        Mar 13, 2021
                    </x-slot>
                </x-object.card>
                
                <x-object.card :link="route('discover')">
                    <x-slot name="image">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/women/90.jpg" alt="avatar">
                    </x-slot>
                    <x-slot name="name">
                        Armando Zamudio
                    </x-slot>
                    <x-slot name="title">
                        Como vencer al Cov?
                    </x-slot>
                    <x-slot name="description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius ea deleniti asperiores nesciunt architecto voluptatem minima obcaecati ipsum. Deleniti ipsam tempora fuga corporis repellendus quas aliquid ratione, unde voluptas provident.
                    </x-slot>
                    <x-slot name="date">
                        Mar 13, 2021
                    </x-slot>
                </x-object.card>
    
                <x-object.card :link="route('discover')">
                    <x-slot name="image">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/men/5.jpg" alt="avatar">
                    </x-slot>
                    <x-slot name="name">
                        Levi Tazas 
                    </x-slot>
                    <x-slot name="title">
                        Como no reprobar Matematicas
                    </x-slot>
                    <x-slot name="description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus alias labore porro iure. Voluptates maxime, praesentium ab mollitia reprehenderit, optio odio quae excepturi itaque esse fugit placeat quibusdam perspiciatis a.
                    </x-slot>
                    <x-slot name="date">
                        Mar 13, 2021
                    </x-slot>
                </x-object.card>
    
                <x-object.card :link="route('discover')">
                    <x-slot name="image">
                        <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/women/24.jpg" alt="avatar">
                    </x-slot>
                    <x-slot name="name">
                        Sampedro del Monte Everest
                    </x-slot>
                    <x-slot name="title">
                        La superficie de un pino dedo en X y Y
                    </x-slot>
                    <x-slot name="description">
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, animi. Doloremque laudantium, sint vero voluptas eius tempore, dignissimos quae, nihil quam quia aliquam? Magnam laudantium eius, a laboriosam rerum inventore.
                    </x-slot>
                    <x-slot name="date">
                        Mar 13, 2021
                    </x-slot>
                </x-object.card>
    
            </div>
        </x-object.section>  
    </x-object.container>
</div>

