<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="./img/logo.png">

    <title>Registra tus gastos mensuales diarios, GRATIS</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}" >
    <link rel="stylesheet" href="{{ mix('css/style-m.css') }}"  media="(min-width:768px)" >
    <link rel="stylesheet" href="{{ mix('css/style-xl.css') }}"  media="(min-width:1024px)" >


        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <header class="h-24 sm:h-32 flex items-center z-30 w-full">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="uppercase text-gray-800 dark:text-white font-black text-3xl flex items-center">
                    Where is My Money?
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6366F1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                      </svg>

                </div>
                <div id="menuMobile" class="" hidden>
                    <div>
                        @auth
                        <a href="/dashboard" class="py-2 px-6 font-bold flex hover:text-indigo-500">
                            Panel de control
                        </a>
                        @endauth
                        @guest
                        <a href="/login" class="py-2 px-6 font-bold flex hover:text-indigo-500">
                            Ingresar
                        </a>
                        @endguest
                        
                    </div>
                    <div>
                        @guest
                            
                        <a href="/register" class="py-2 px-6 font-bold flex hover:text-indigo-500 ">
                            Registrar
                        </a>
                        @endguest
                    </div>
                </div>
                <div class="flex items-center">

                    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                        @auth
                        <a href="/dashboard" class="py-2 px-6 font-bold flex hover:text-indigo-500">
                            Panel de control
                        </a>
                     @endauth
                     @guest
                     <a href="/login" class="py-2 px-6 font-bold flex hover:text-indigo-500">
                        Ingresar
                    </a>
                    <a href="/register" class="py-2 px-6 font-bold flex hover:text-indigo-500 ">
                        Registrar
                    </a>
                     @endguest
                        
                        
                    </nav>
                    <button id="btn" class="lg:hidden flex flex-col ml-4">
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                    </button>
                </div>
            </div>
        </header>
    </header>
    @yield("content")

    

<footer class="px-3 py-8 bg-white dark:bg-gray-800 text-2 text-gray-500 dark:text-gray-200 transition-colors duration-200">
    <div class="flex flex-col">
        <div class="md:hidden mt-7 mx-auto w-11 h-px rounded-full">
        </div>
        <div class="mt-4 md:mt-0 flex flex-col md:flex-row">
            <nav class="flex-1 flex flex-col items-center justify-center md:items-end md:border-r border-gray-100 md:pr-5">
                <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                    
                </a>
                <a aria-current="page" href="https://twitter.com/kevcamargo" class="hover:text-gray-700 dark:hover:text-white">
                    Contáctame
                </a>
                <a aria-current="page" href="#" class="hover:text-gray-700 dark:hover:text-white">
                    
                </a>
            </nav>
            <div class="md:hidden mt-4 mx-auto w-11 h-px rounded-full">
            </div>
            <div class="mt-4 md:mt-0 flex-1 flex items-center justify-center md:border-r border-gray-100">
                <a class="hover:text-primary-gray-20" href="https://github.com/kevocam">
                    <span class="sr-only">
                        Ver on GitHub
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                        <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                        </path>
                    </svg>
                </a>
                <a class="ml-4 hover:text-primary-gray-20" href="#">
                    <span class="sr-only">
                        
                    </span>
                   
                </a>
            </div>
            <div class="md:hidden mt-4 mx-auto w-11 h-px rounded-full ">
            </div>
            <div class="mt-7 md:mt-0 flex-1 flex flex-col items-center justify-center md:items-start md:pl-5">
                <span class="">
                   V1.0 en un sábado soleado ;) - © 2021
                </span>
                <span class="mt-7 md:mt-1">
                    Created by
                    <a class="underline hover:text-primary-gray-20" href="https://github.com/kevocam">
                        kevin
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>


    <script>
        let btn = document.querySelector("#btn");
        let menu = document.querySelector("#menuMobile")
        btn.addEventListener("click", () =>{
            if(menu.style.display == "block"){
                menu.style.display="none"
            }else{
                menu.style.display="block"
            }
        })
    </script>
</body>
</html>
