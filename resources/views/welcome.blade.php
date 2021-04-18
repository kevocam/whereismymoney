@extends("layouts.public")

@section("content")

    
<main class="dark:bg-gray-800 bg-white relative">    
    <section>        
            <div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
                <div class="container mx-auto px-6 py-16 hero">
                    <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20 hero__content">
                        <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
                        </span>
                        <h1 class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                            Controla
                            <span class="text-5xl sm:text-6xl text-indigo-300">
                                ingresos y gastos
                            </span>
                        </h1>
                        <p class="text-sm sm:text-base text-gray-700 dark:text-white py-4">
                            Tener el control de tus gastos mensuales te ayuda a obtener información relevante de tu rentabilidad y estabilidad financiera. Te ayudamos con esta herramienta GRATIS. 
                        </p>
                        <div class="flex mt-8">
                            <a href="/register" class="uppercase py-2 px-4 rounded-lg bg-indigo-500 border-2 border-transparent text-white text-md mr-4 hover:bg-indigo-400">
                                Empezar 
                            </a>
                            <a href="#how" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-indigo-500 text-indigo-500 dark:text-white hover:bg-indigo-500 hover:text-white text-md">
                                ¿Cómo funciona?
                            </a>
                        </div>
                    </div>
                    <div class=" sm:block sm:w-1/3 lg:w-3/5 hero__img ">
                        
                        <img src="./img/money.png" alt="">
                    </div>
                </div>
            </div>           
        </section>
        <section>

            <div class="bg-white dark:bg-gray-800 ">
                <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                    <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                        <span id="how" class=" duration-500 block step1__content--title text-4xl font-extrabold dark:text-white sm:text-3xl">
                            Cómo funciona?
                        </span>
                        <span class="block text-indigo-300">
                            Con solo 3 pasos ya tendras en orden tus cuentas financieras
                        </span>
                    </h2>
                    
                </div>
            </div>

        </section>
        <section class="step1">
            <div class="step1__content">
                <h2 class="step1__content--title text-3xl font-extrabold dark:text-white sm:text-3xl">
                    1.- Regístrate en nuestra web    
                </h2>
                <p class="step1__content--content text-sm sm:text-base text-gray-700 dark:text-white">Nuestros servicios son completamente gratis. Si te es de ayuda compartelo </p>
            </div>
            <div class="step1__img">
                <img src="./img/register.png" alt="">
            </div>
        </section>
        <section class="step2">
            
            <div class="step2__content">
                <h2 class="step2__content--title text-3xl font-extrabold  dark:text-white sm:text-3xl">
                    2.- Ya puedes registrar gastos.    
                </h2>
                <p class="step2__content--content text-sm sm:text-base text-gray-700 dark:text-white">
                    Empieza a registrar los gastos, te guardamos la fecha, el concepto. 
                </p>
            </div>
            <div class="step2__img">
                <img src="./img/spend.png" alt="">
            </div>
            

        </section>
        <section class="step3">
            
            <div class="step3__content">
                <h2 class="step3__content--title text-3xl font-extrabold  dark:text-white sm:text-3xl">
                    3.- Configura tus ingresos, sueldo, gastos fijos.
                </h2>
                <p class="step3__content--content text-sm sm:text-base text-gray-700 dark:text-white"> Completa toda la configuracion, fuentes de ingresos (sueldo, proyectos), gastos fijos (agua, luz) </p>
            </div>
            <div class="step3__img">
                <img src="./img/custom.png" alt="">
            </div>
            

        </section>
       
   <section class="mx-auto">

<div class="mx-auto flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10">
    <div class="self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white flex flex-col">
        Ya estas listo para crear tu cuenta 
        <a href="/register" class="text-3xl font-extrabold  mx-auto sm:text-3xl text-indigo-500">
            Registrar cuenta
        </a>

    </div>
    {{-- <div class="mt-8">
        <form action="#" autoComplete="off">
            <div class="flex flex-col mb-2">
                <div class="flex relative ">
                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                            </path>
                        </svg>
                    </span>
                    <input type="text" id="sign-in-email" class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Correo"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <div class="flex relative ">
                        <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z">
                                </path>
                            </svg>
                        </span>
                        <input type="password" id="sign-in-email" class=" rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <div class="flex items-center mb-6 -mt-4">
                       
                    </div>
                    <div class="flex w-full">
                        <button type="submit" class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Registrar
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex items-center justify-center mt-6">
                <a href="#" target="_blank" class="inline-flex items-center text-xs font-thin text-center text-gray-500 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white">
                    <span class="ml-2">
                        Ingresar
                    </span>
                </a>
            </div>
        </div> --}}

   </section>
       
      
</main>  

@endsection

  

