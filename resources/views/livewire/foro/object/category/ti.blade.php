<div>
    <x-object.container>
        <x-object.section>
            <h1 class="text-5xl uppercase font-bebas px-2 p-1">
                {{ __('carreras') }}
            </h1>
        </x-object.section>
        <x-object.section>
            <div class="justify-center items-center">

                <div class=" h-20 mx-4 my-4 rounded-lg bg-indigo-500 ">
                    <p class="mt-2 p-2 font-bebas text-2xl text-default">Tecnologías de la Información (TI)</p>
                </div>          
                <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default">
                    <p class="mt-2 p-2 font-bebas text-2xl text-white">TSU</p>
                </div>
                <a href="{{ route('research') }}">
                    <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default bg-opacity-25">
                        <p class="mt-2 p-2 font-bebas text-2xl text-default">Desarrollo de Software Multiplataforma</p>
                    </div>
                </a>
                <a href="{{ route('research') }}">
                    <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default bg-opacity-25">
                        <p class="mt-2 p-2 font-bebas text-2xl text-default">Infrestructura de Redes Digitales</p>
                    </div>
                </a>
                <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default">
                    <p class="mt-2 p-2 font-bebas text-2xl text-white">ING</p>
                </div>
                <a href="{{ route('research') }}">
                    <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default bg-opacity-25">
                        <p class="mt-2 p-2 font-bebas text-2xl text-default">Desarrollo y Gestion de Software</p>
                    </div>
                </a>
                <a href="{{ route('research') }}">
                    <div class="  h-20 mx-4 my-4 rounded-lg overflow-hidden bg-default bg-opacity-25">
                        <p class="mt-2 p-2 font-bebas text-2xl text-default">Redes Inteligentes y Ciberseguridad</p>
                    </div>
                </a>
                
            </div>
        </x-object.section>

    </x-object.container>
</div>
