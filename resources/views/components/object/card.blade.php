@props(['link'])

<div class="max-w-6xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-between">
        <div class="flex items-start justify-center">
            {{$image}}
            <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200">{{$name}}</a>
        </div>
        <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">{{ __('Mas tarde') }}</a>
    </div>

    <div class="mt-2">
        <a  href="{{$link}}" class="text-2xl font-bold tracking-wide text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" >{{$title}}</a>
        <p class="mt-2 text-gray-600 dark:text-gray-300">{{$description}}</p>
    </div>

    <div class="flex items-center justify-between mt-4">
        <a  href="{{$link}}" class="text-blue-600 dark:text-blue-400 hover:underline" >{{ __('Continua leyendo') }}</a>

        <div class="flex items-center">
            
            <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{ $date }}</span>
        </div>
    </div>
</div>