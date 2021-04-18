<div class="dashboard">

    <div class="dashboard__balance">
        <div class=" shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800 dashboard__balance--item">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-green-300">
                    {{-- <svg fill="currentColor"  class="text-purple-500 h-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin"  class="text-purple-500 h-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 6v2m0 8v2" />
                      </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    Balance general
                </p>
            </div>
            <div class="flex flex-col justify-start">
                
                <p  class="text-gray-700 dark:text-gray-100 text-4xl text-left font-bold my-1">
                   {{$balance}}
                    <span class="text-sm">
                        $
                    </span> 
                </p>
               {{--  <div class="flex items-center text-green-500 text-sm">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                    <span>
                        5.5%
                    </span>
                    <span class="text-gray-400">
                        vs last month
                    </span>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="dashboard__stadistics">
        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-800 dashboard__stadistics--item ">
            <div class="flex items-center">
                <span class="rounded-xl relative p-2 bg-purple-200">
                   
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google-analytics" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="10" y="9" width="4" height="12" rx="1.105" />
                        <rect x="17" y="3" width="4" height="18" rx="1.105" />
                        <circle cx="5" cy="19" r="2" />
                      </svg>
                </span>
                <p class="text-md text-black dark:text-white ml-2">
                    Gastos 
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="text-gray-700 dark:text-gray-100 text-4xl text-left font-bold my-1">
                    {{$gastos}}
                    <span class="text-sm">
                        $
                    </span>
                </p>
              {{--   <div class="flex items-center text-green-500 text-sm">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                    <span>
                        5.5%
                    </span>
                    <span class="text-gray-400">
                        vs last month
                    </span>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="dashboard__input">
        <div class="px-4 py-5 sm:px-6 w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                Manten al día tu billetera. 
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
                Ingersa los ingresos que percibiste, con el boton verde y los gastos con el boton morado  <a href="">aqui.</a> 
            </p>
        </div>
        <div class="dashboard__input--mount">
            <div class=" relative ">
                <input wire:model="mount" type="number" step="0.01" id="rounded-email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="100.0"/>
            </div>
        </div>
        <div class="dashboard__input--description">
            <label class="text-gray-700" for="name">
                <textarea wire:model="description" class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="comment" placeholder="Descripcion del movimiento (opcional)" name="comment" rows="5" cols="20">
                </textarea>
            </label>

        </div>
        <div>

            @if (session()->has('message'))
                <p class="text-green-500">
                    {{ session('message') }}
                </p>
            @endif
            @if (session()->has('message2'))
                <p class="text-purple-500">
                    {{ session('message2') }}
                </p>
            @endif



            
        </div>
        <div class="dashboard__input--buttons">

            <button wire:click="addIngreso" type="button" class="py-2 px-4 flex justify-center items-center  bg-green-500 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-1/2 mx-2 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                
                <svg wire:click="addIngreso" height="40" width="40" type="button"  xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                  </svg>
                Ingreso
            </button>

            <button wire:click="addGasto" height="40" width="40" type="button" class="py-2 px-4 flex justify-center items-center  bg-indigo-500 hover:bg-indigo-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-1/2 mx-2 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                  </svg>
                Gasto
            </button>
            
        </div>
    </div>
    <div class="dashboard__history">
        <div class="container flex flex-col mx-auto w-full items-center justify-center">
            <div class="px-4 py-5 sm:px-6 w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                    Últimos movimientos
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
                    Puedes todo el historial  <a href="">aqui.</a> 
                </p>
            </div>
            <ul class="flex flex-col">
                @foreach ($history as $data)
                <li class="border-gray-400 flex flex-row mb-2">
                    <div class="shadow border select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                        <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                            <a href="#" class="block relative">
                                @if ($data->type  === 1)
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trending-up" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <polyline points="3 17 9 11 13 15 21 7" />
                                    <polyline points="14 7 21 7 21 14" />
                                  </svg>  
                                  @else
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trending-down" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <polyline points="3 7 9 13 13 9 21 17" />
                                    <polyline points="21 10 21 17 14 17" />
                                  </svg> 
                                @endif  
                                
                            </a>
                        </div>
                        <div class="flex-1 pl-1 md:mr-16">
                            <div class="font-medium dark:text-white">
                                {{$data->monto}}
                            </div>
                            <div class="text-gray-600 dark:text-gray-200 text-sm">
                                {{$data->description}}
                            </div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-200 text-xs">
                            {{$data->updated_at->diffForHumans()}}
                        </div>
                        <button class="w-24 text-right flex justify-end">
                            <svg width="12" fill="currentColor" height="12" class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                </path>
                            </svg>
                        </button>  
                        
                    </div>
                </li>
                @endforeach              
            </ul>
        </div>
    </div>

    

    
</div>
