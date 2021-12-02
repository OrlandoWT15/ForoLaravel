<div>
     <!-- table -->
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Numero de megusta</th>
                            <th class="px-4 py-3">Reportes</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Publicación</th>
                            <th class="px-4 py-3">Comentarios</th>
                            <th class="px-4 py-3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                    <p class="font-semibold text-black">Sufyan</p>
                                    
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Report </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_public()"  class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_comment()" class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="flex justify-start  px-4 py-3 text-sm border">
                                <div class="px-4 text-green-500 "
                                >
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>

                                <div class=" text-red-500 "
                                >
                                    <i class="fas fa-times-circle fa-2x"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                    <p class="font-semibold text-black">Sufyan</p>
                                    
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Report </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_public()"  class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_comment()" class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="flex justify-start  px-4 py-3 text-sm border">
                                <div class="px-4 text-green-500 "
                                >
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>

                                <div class=" text-red-500 "
                                >
                                    <i class="fas fa-times-circle fa-2x"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                    <p class="font-semibold text-black">Sufyan</p>
                                    
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Report </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_public()"  class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_comment()" class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="flex justify-start  px-4 py-3 text-sm border">
                                <div class="px-4 text-green-500 "
                                >
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>

                                <div class=" text-red-500 "
                                >
                                    <i class="fas fa-times-circle fa-2x"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                    <p class="font-semibold text-black">Sufyan</p>
                                    
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Report </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_public()"  class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_comment()" class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="flex justify-start  px-4 py-3 text-sm border">
                                <div class="px-4 text-green-500 "
                                >
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>

                                <div class=" text-red-500 "
                                >
                                    <i class="fas fa-times-circle fa-2x"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                    <p class="font-semibold text-black">Sufyan</p>
                                    
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-ms font-semibold border">22</td>
                            <td class="px-4 py-3 text-xs border">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Report </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">6/4/2000</td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_public()"  class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <button wire:click="show_comment()" class="border-black bg-default text-white h-full w-full rounded-full">
                                    ver
                                </button>
                            </td>
                            <td class="flex justify-start  px-4 py-3 text-sm border">
                                <div class="px-4 text-green-500 "
                                >
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>

                                <div class=" text-red-500 "
                                >
                                    <i class="fas fa-times-circle fa-2x"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
     <!-- Modal-->

     
     
</div>

{{--Ventana Modal Publicaciones--}}
    <x-jet-dialog-modal wire:model="show_publications">
		<x-slot name="title">  
            <div class="px-6 py-4 flex flex-row-reverse justify-between">
                <h1 class="text-5xl uppercase font-bebas px-2 p-1">
                    PUBLICACIÓN
                </h1>
                
                <button wire:click="cancelar()" type="button">
                    <i class="fas fa-times-circle fa-2x"></i>
                </button>
                    
                
            </div>
            
        </x-slot>

		<x-slot name="content">
        <div class="py-3 justify-start items-start inline-flex">
                    <!-- 
                        Descrip
                        -->
    
                    <div class="max-w-2xl  px-4 py-4 mx-auto bg-white rounded-lg shadow-md ">
                        <div class="flex items-center justify-between">
                            <div class="flex items-start justify-center">
                            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
                                <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Victor Omar</a>
                            </div>
                            <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                        </div>
    
                        <div class="mt-2">
                            <a  href="#" class="text-2xl font-bold tracking-wide text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" >Accessibility tools for designers and developers</a>
                            <div class="px-7 overflow-x-hidden overflow-y-auto" style="max-height: 40vh;">
                    
                            <p class="mt-2 text-gray-600 dark:text-gray-300 text-justify">
                                What is Lorem Ipsum?
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    
                                Why do we use it?
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
    
    
                                Where does it come from?
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            </div>
                        </div>
    
                        
                    </div>
    
                     
     
            </div>
            
		</x-slot>

        <x-slot name="footer">
            
	    </x-slot>
	    

	</x-jet-dialog-modal>
    {{--Fin de la ventana publicaciones--}}

    {{--Ventana Modal Comentarios--}}
    <x-jet-dialog-modal wire:model="show_comment">
		<x-slot name="title">  
            <div class="px-6 py-4 flex flex-row-reverse justify-between">
                    <h1 class="text-5xl uppercase font-bebas px-2 p-1">
                        COMENTARIOS
                    </h1>
                    
                    <button wire:click="cancelar()" type="button">
                        <i class="fas fa-times-circle fa-2x"></i>
                    </button>
                        
                    
            </div>
        </x-slot>

		<x-slot name="content">
            <div class="py-3 justify-start items-start inline-flex">
                <div class="px-7 overflow-x-hidden overflow-y-auto" style="max-height: 62vh;">
                    <div class="divide-y-2 divide-black divide-opacity-50">
                        <div class="max-w-xl  px-2 py-2 mx-auto bg-white rounded-sm shadow-md ">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start justify-center">
                                <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="avatar">
                                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Basulto Orlando Ivan</a>
                                </div>
                                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                            </div>
        
                            <div class="mt-2">
                                <p class="mt-2 text-gray-600 dark:text-gray-300">orem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
        
                            <div class="flex justify-end">
                                <button class="text-red-500 rounded-full h-16 w-16 flex items-center justify-center text-2xl ml-2 py-2 px-2 ">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="max-w-xl  px-2 py-2 mx-auto bg-white rounded-sm shadow-md ">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start justify-center">
                                <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
                                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Victor Omar</a>
                                </div>
                                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 12, 2019</span>
                            </div>
        
                            <div class="mt-2">
                                <p class="mt-2 text-gray-600 dark:text-gray-300">orem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
        
                            <div class="flex justify-end">
                                <button class="text-red-500 rounded-full h-16 w-16 flex items-center justify-center text-2xl ml-2 py-2 px-2 ">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="max-w-xl  px-2 py-2 mx-auto bg-white rounded-sm shadow-md ">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start justify-center">
                                <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/men/41.jpg" alt="avatar">
                                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Luis Angel</a>
                                </div>
                                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                            </div>
        
                            <div class="mt-2">
                                <p class="mt-2 text-gray-600 dark:text-gray-300">orem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
        
                            <div class="flex justify-end">
                                <button class="text-red-500 rounded-full h-16 w-16 flex items-center justify-center text-2xl ml-2 py-2 px-2 ">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="max-w-xl  px-2 py-2 mx-auto bg-white rounded-sm shadow-md ">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start justify-center">
                                <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://randomuser.me/api/portraits/women/90.jpg" alt="avatar">
                                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">Michell Sanchez</a>
                                </div>
                                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Mar 10, 2019</span>
                            </div>
        
                            <div class="mt-2">
                                <p class="mt-2 text-gray-600 dark:text-gray-300">orem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
        
                            <div class="flex justify-end">
                                <button class="text-red-500 rounded-full h-16 w-16 flex items-center justify-center text-2xl ml-2 py-2 px-2 ">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
     
            </div>
            
		</x-slot>

        <x-slot name="footer">
            
	    </x-slot>
	    

	</x-jet-dialog-modal>
