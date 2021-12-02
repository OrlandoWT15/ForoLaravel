<div>
    <!-- table -->
   <section class="container mx-auto p-6 font-mono">
       <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
           <div class="w-full overflow-x-auto">
               <table class="w-full overflow-hidden">
                   <thead>
                       <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                           <th class="px-4 py-3">Nombre</th>
                           <th class="px-4 py-3">Fecha</th>
                           <th class="px-4 py-3">Petición</th>
                       </tr>
                   </thead>
                   <tbody class="bg-white">
                       <tr class="text-gray-700">
                           <td class="px-4 py-3 border">
                               <div class="flex items-center text-sm">
                                   <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                   <img class="object-cover w-full h-full rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="" loading="lazy" />
                                   <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                   </div>
                                   <div>
                                   <p class="font-semibold text-black">Khatab Wedaa</p>
                                   
                                   </div>
                               </div>
                           </td>
                          
                           <td class="px-4 py-3 text-sm border">1/11/2021</td>
                            <td class="px-6 py-3 text-sm border">
                                <div>
                                        <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
                                        wire:click="open_modal()">
                                            <i class="fa fa-folder-open fa-2x " aria-hidden="true"></i>
                                            
                                        </div>
                                       
                                </div>
                               
                            </td>
                       </tr>
                       
                       <tr class="text-gray-700">
                           <td class="px-4 py-3 border">
                               <div class="flex items-center text-sm">
                                   <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                   <img class="object-cover w-full h-full rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="" loading="lazy" />
                                   <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                   </div>
                                   <div>
                                   <p class="font-semibold text-black">Khatab Wedaa</p>
                                   
                                   </div>
                               </div>
                           </td>
                          
                           <td class="px-4 py-3 text-sm border">1/11/2021</td>
                                <td class="px-6 py-3 text-sm border">
                                    <div>
                                            <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
                                            wire:click="open_modal()">
                                                <i class="fa fa-folder-open fa-2x " aria-hidden="true"></i>
                                            </div>
                                           
                                    </div>
                            
                                </td>
                       </tr>


                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                <p class="font-semibold text-black">Khatab Wedaa</p>
                                
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-4 py-3 text-sm border">1/11/2021</td>
                        <td class="px-6 py-3 text-sm border">
                            <div>
                                    <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
                                    wire:click="open_modal()">
                                    <i class="fa fa-folder-open fa-2x " aria-hidden="true"></i>
                                    </div>
                                
                            </div>
                    
                        </td>
                    </tr>
               </table>
           </div>
       </div>
   </section>
   <!-- Modal-->
{{--Ventana Modal de marca--}}
    <x-modal.confirmation wire:model="is_show">
            <x-slot name="title">  
            </x-slot>
            <x-slot name="content">
                <div class="flex items-center justify-center content-center">
                    
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-full max-w-md  mx-auto bg-white shadow-md rounded-md px-6 py-4 my-6">
                        <div class="sm:flex sm:justify-between">
                            <div class="flex items-center">
                                <img class="h-12 w-12 rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="">
                                <div class="ml-2">
                                    <h3 class="text-lg text-gray-800 font-medium">Khatab Wedaa</h3>
                                    <span class="text-gray-600">Khatabwedaa@test.com</span>
                                </div>
                            </div>

                        </div>
                        
                        <div class="mt-3">
                            <h4 class="text-gray-600 text-sm">Fecha: </h4>
                            <span class="mt-2 text-xl font-medium text-gray-800">1/11/2021</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-sm text-gray-600">Descripción de Petición: </h4>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac mattis felis. Praesent lacinia eget diam ut consectetur. Vivamus in nunc quis est iaculis rhoncus. Fusce vestibulum in urna sit amet cursus. Duis sed sagittis sem, quis laoreet neque. Duis vitae justo vitae erat accumsan imperdiet. Aliquam porta quam et eros consectetur fringilla. Aenean id nulla sem. Ut lobortis tincidunt nulla sit amet varius. Donec ac mauris sed odio imperdiet lacinia. Sed sed leo varius, tincidunt lectus at, bibendum felis. Curabitur id vehicula magna, quis ullamcorper ante.
                        </div>
                        <div class="mt-4">
                            <h4 class="text-sm text-gray-600">250 Following</h4>
                            <div class="flex items-center overflow-hidden mt-2">
                                <img class="inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                                <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                
                <x-buttons.red @Click="show = !show">
                    {{__('Aceptar Petición!')}}
                </x-buttons.red>
            </x-slot>
    </x-modal.confirmation>
        {{--Fin de la ventana modal de Peticiones--}}
   
</div>
