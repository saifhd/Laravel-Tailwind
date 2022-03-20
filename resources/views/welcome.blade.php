<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>
    <body class="bg-gray-50">
        {{-- Start topbar--}}
        <div class="shadow-sm">
            <div class="mx-8 md:mx-16">
                <div class="lg:flex py-4 justify-between border-b-2 space-y-4 lg:space-y-0 border-gray-300">
                    <div class="lg:w-1/2">
                        <div class="flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="px-2 font-bold">Delevery Island Wide</h4>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="flex justify-between">
                            <div class="flex justify-between space-x-2 w-9/12">
                                <div>
                                    <a class="hover:text-gray-600 text-gray-900 font-bold" href="#">Support & Downloads</a>
                                </div>
                                <div>|</div>
                                <div>
                                    <a class="hover:text-gray-600 text-gray-900 font-bold" href="#">Store Location </a>
                                </div>
                                <div>|</div>
                                <div x-cloak x-data="{ show: false }">
                                    <a
                                        class="hover:text-gray-600 text-gray-900 flex items-center font-bold cursor-pointer"
                                        @click="show=!show"
                                        @click.away="show=false"
                                    >
                                        Hello, Sign in
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2" fill viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div
                                        class="card absolute bg-white mt-6 shadow-xl w-64 rounded-md z-10"
                                        x-show="show"

                                    >
                                        <div class="flex-col space-y-4 px-4 py-6">
                                            <div class="border-b-2">
                                                <button class="text-red-500 border-2 border-red-500 rounded-md px-8 py-2 font-bold hover:text-white hover:bg-red-500">Sign In</button>
                                                <div class="text-sm my-2">New customer ?
                                                    <a href="#" class="text-blue-700 hover:text-blue-900">start here</a>
                                                </div>
                                            </div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">My Account</div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">My wish list</div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">My orders</div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">Purchase history</div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">Saved searches</div>
                                            <div class="font-bold hover:text-gray-500 cursor-pointer">Payment options</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between w-3/12">
                                <div class="w-1/2 flex justify-end cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </div>
                                <div class="w-1/2 flex justify-end cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <div class="flex text-gray-200 bg-blue-500 rounded-full h-5 w-5 justify-center text-xs items-center -translate-y-2">
                                        <span>0</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md">
            <div class="lg:flex space-y-4 justify-between px-8 md:px-16 items-center py-6 md:py-11 lg:h-20">
                <div class="">
                    <img src="https://www.metropolitan.lk/img/metrologo.png" class="h-16 mx-auto lg:mx-0" alt="">
                </div>
                <div class="lg:flex space-y-2 lg:space-y-0 lg:w-8/12 ">
                    <div class="flex justify-center items-center lg:w-2/6 ">
                        <div>
                            Shop by category
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 text-sm text-bold h-4 w-4 text-blue-400" fill viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center border-2 border-blue-400 lg:w-4/6 h-12">
                            <div class="mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 " fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <div class="w-7/12 pl-2">
                                <input type="text" placeholder="Search for anything" class="border-none h-9 focus:ring-0 w-full text-gray-600">
                            </div>
                            <div class="flex items-center pr-2">
                                <span class="px-4">|</span>
                                <span class="pr-4">All Categories</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                    </div>
                </div>
                <div class="flex justify-between lg:ml-4">
                    <div class="mr-6">
                        <Button class="button bg-blue-900 text-gray-200 px-8 h-12 hover:bg-blue-800">Search</Button>
                    </div>
                    <div class="flex">
                       <Button class="button text-red-700 hover:bg-gray-200 border border-red-700 px-4 h-12 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                        Call me back</Button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End TopBar --}}

        {{-- Start Nav --}}
        <div class="sm:flex sm:justify-center sm:space-x-10 mt-5 pl-10 sm:pl-0 space-y-4 sm:space-y-0 sticky">
            <div >
                <a class="text-gray-700 hover:text-gray-500 font-bold" href="">About Us</a>
            </div>
            <div>
                <a class="text-gray-800 hover:text-gray-500 font-bold" href="">Careers</a>
            </div>
            <div>
                <a class="text-gray-800 hover:text-gray-500 border-b-4 border-red-800 pb-2 font-bold" href="">Deal Zone</a>
            </div>
            <div>
                <a class="text-gray-800 hover:text-gray-500 font-bold" href="">News & Events</a>
            </div>
            <div>
                <a class="text-gray-800 hover:text-gray-500 font-bold" href="">Contact Us</a>
            </div>
        </div>
        {{-- End Nav --}}


        {{--Start Image Carousel Start --}}
        <div id="carouselExampleCaptions" class="carousel slide relative mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden md:h-128">
                <div class="carousel-item active relative float-left w-full h-full" style="background-image: linear-gradient(to bottom, rgba(76, 102, 173, 0.932), rgba(76, 102, 173, 0.932)),url('https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80'); background-repeat: no-repeat;background-size:cover;">
                    <div class="md:flex pt-10">
                        <div class="w-1/2 flex justify-center mx-auto object-center">
                            <div class="relative">
                                <img class="" src="{{ asset('images/lap.png') }}" class=" " alt="..." />
                                <div class="bg-yellow-600 text-white w-20 rounded-md font-extrabold font-weight-bold text-xl text-center h-16 flex items-center absolute top-2 right-16">20% OFFER</div>
                            </div>
                        </div>
                        <div class="md:w-1/2 my-auto items-center flex-col text-center md:text-left">
                                <h5 class="text-xl text-gray-200 font-bold">Laptop </h5>
                                <h3 class="uppercase text-gray-200 text-4xl font-bold mt-3">Dell INSPIRATION 3306</h3>
                                <p class="text-gray-200 mt-5 md:w-96">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Aperiam necessitatibus atque pariatur voluptates eos facilis
                                    aliquid, a nisi ut incidunt.
                                </p>
                                <h4 class="text-gray-200 mt-5 text-xl font-bold">77,000.00 LKR</h4>
                                <button class="text-gray-200 hover:bg-gray-500 border-2 px-6 py-2 mt-8 mb-10">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full h-full"
                    style="background-image: linear-gradient(to bottom, rgba(76, 102, 173, 0.932), rgba(76, 102, 173, 0.932)),url('https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80'); background-repeat: no-repeat;background-size:cover;">
                    <div class="md:flex pt-10">
                        <div class="w-1/2 flex justify-center mx-auto object-center">
                            <div class="relative">
                                <img class="" src="{{ asset('images/lap.png') }}" class=" " alt="..." />
                                <div
                                    class="bg-yellow-600 text-white w-20 rounded-md font-extrabold font-weight-bold text-xl text-center h-16 flex items-center absolute top-2 right-16">
                                    20% OFFER</div>
                            </div>
                        </div>
                        <div class="md:w-1/2 my-auto items-center flex-col text-center md:text-left">
                            <h5 class="text-xl text-gray-200 font-bold">Laptop </h5>
                            <h3 class="uppercase text-gray-200 text-4xl font-bold mt-3">Dell INSPIRATION 3306</h3>
                            <p class="text-gray-200 mt-5 md:w-96">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam necessitatibus atque pariatur voluptates eos facilis
                                aliquid, a nisi ut incidunt.
                            </p>
                            <h4 class="text-gray-200 mt-5 text-xl font-bold">77,000.00 LKR</h4>
                            <button class="text-gray-200 hover:bg-gray-500 border-2 px-6 py-2 mt-8 mb-10">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full h-full"
                    style="background-image: linear-gradient(to bottom, rgba(76, 102, 173, 0.932), rgba(76, 102, 173, 0.932)),url('https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80'); background-repeat: no-repeat;background-size:cover;">
                    <div class="md:flex pt-10">
                        <div class="w-1/2 flex justify-center mx-auto object-center">
                            <div class="relative">
                                <img class="" src="{{ asset('images/lap.png') }}" class=" " alt="..." />
                                <div
                                    class="bg-yellow-600 text-white w-20 rounded-md font-extrabold font-weight-bold text-xl text-center h-16 flex items-center absolute top-2 right-16">
                                    20% OFFER</div>
                            </div>
                        </div>
                        <div class="md:w-1/2 my-auto items-center flex-col text-center md:text-left">
                            <h5 class="text-xl text-gray-200 font-bold">Laptop </h5>
                            <h3 class="uppercase text-gray-200 text-4xl font-bold mt-3">Dell INSPIRATION 3306</h3>
                            <p class="text-gray-200 mt-5 md:w-96">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam necessitatibus atque pariatur voluptates eos facilis
                                aliquid, a nisi ut incidunt.
                            </p>
                            <h4 class="text-gray-200 mt-5 text-xl font-bold">77,000.00 LKR</h4>
                            <button class="text-gray-200 hover:bg-gray-500 border-2 px-6 py-2 mt-8 mb-10">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- Image Carousel --}}

        {{-- Start section 1 --}}
        <div class="md:flex bg-white">
            <div class="md:w-1/2 bg-cover flex h-96 md:h-128" style="background-image:url('https://media.istockphoto.com/photos/got-to-get-to-those-deadlines-picture-id1186079169?b=1&k=20&m=1186079169&s=170667a&w=0&h=1K1Euh1UhMOl7oUAAjYbckG_AO-FP0tS-1ex6inqeqw=');background-repeat: no-repeat;">
                <div class="mt-auto ml-16 mb-16">
                    <h1 class="uppercase text-white text-6xl font-bold">Why</h1>
                    <h1 class="uppercase text-white text-6xl font-bold mt-4">m-center</h1>

                </div>

            </div>
            <div class="md:w-1/2 pl-4 pr-4 lg:pl-16 lg:pr-32 flex-col my-10 md:my-auto">
                {{-- <div> --}}
                    <h3 class="text-gray-500 font-bold text-xl">Refresh your Space</h3>
                    <h5 class="text-gray-500 mt-2">Home Store</h5>
                    <p class="text-gray-500 mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora rem magni
                        consequuntur molestias vitae quaerat eligendi fuga itaque qui iure. Distinctio saepe
                        explicabo expedita, temporibus illum quos nihil neque hic.Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Cupiditate officiis commodi optio a ducimus atque ipsam
                    </p>

                    <button class="text-gray-500 border-2 border-gray-500 px-5 py-3 mt-12 hover:bg-gray-500 hover:text-white mb-4">Read Now</button>
                {{-- </div> --}}
            </div>

        </div>
        {{-- End section1 --}}

        {{-- Start section 2 --}}
        <div class="flex-col">
            <div class="flex justify-center space-x-4 md:mt-8">
                <div>
                    <a href="#" class="text-gray-600 font-bold hover:text-red-600">Featured Items</a>
                    <div class="h-1 w-16 bg-red-600 rounded-lg mx-auto mt-1"></div>
                </div>
                <span>|</span>
                <a href="#" class="text-gray-400 font-bold hover:text-red-600">Best Seller</a>
                <span>|</span>
                <a href="#" class="text-gray-400 font-bold hover:text-red-600">Special</a>
            </div>
            <div class="flex justify-center mt-6">
                <p class="text-gray-600 text-center md:w-1/2 px-4 md:px-0 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium autem temporibus, ratione quibusdam sit sunt repudiandae harum sequi odio ducimus </p>
            </div>
            <div
                class="mt-10 grid lg:grid-cols-4 md:grid-cols-2 gap-10 px-16 md:px-32 lg:px-48"
                x-data="{
                    isChecked:1,
                    products:[
                        {
                            id:1,
                            category:'Speakers',
                            name:'JBL Charge 3',
                            isfavourit:1,
                            image_path:'images/jbl.png'
                        },
                        {
                            id:2,
                            category:'Speakers',
                            name:'JBL Charge 3',
                            isfavourit:0,
                            image_path:'images/jbl.png'
                        },
                        {
                            id:3,
                            category:'Speakers',
                            name:'JBL Charge 3',
                            isfavourit:0,
                            image_path:'images/jbl.png'
                        },
                        {
                            id:4,
                            category:'Speakers',
                            name:'JBL Charge 3',
                            isfavourit:0,
                            image_path:'images/jbl.png'
                        }
                    ]
                }"
            >
                <template x-for="product in products">
                    <div class="flex-col">
                        <div class="card bg-white py-6 rounded-md shadow-xl"
                            :class="{'border border-red-700' : isChecked==product.id}"
                            @click="isChecked=product.id"
                        >
                            <img class="w-full h-64" src="{{ asset('') }}" :src="product.image_path" alt="" srcset="">
                            <h3 class="text-gray-600 px-6" x-text="product.category"></h3>
                            <div class="flex justify-between px-6 mt-4">
                                <h3 class="font-extrabold text-gray-800" x-text="product.name"></h3>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" :fill="product.isfavourit==1 ?'#dc2626':'none'" viewBox="0 0 24 24" stroke="#dc2626"
                                    stroke-width="2"
                                    @click="product.isfavourit= product.isfavourit==0 ? 1 : 0"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                        </div>
                        <button
                            class="text-white bg-blue-600 w-full text-center rounded-md py-3 mt-6"
                            x-show="isChecked==product.id"
                        >
                            Add to Cart
                        </button>
                    </div>
                </template>
            </div>
        </div>
        {{-- End section 2 --}}

        {{-- Section 3 --}}
        <div class="md:flex md:h-128 mt-10" style="background-image: linear-gradient(to bottom, #794cceec, rgba(91,60,130,255)),url('https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80'); background-repeat: no-repeat;background-size:cover;">
            <div class="md:w-1/2 flex justify-center overflow-hidden relative">
                <img class="md:translate-y-24 relative" src="{{ asset('images/phone.png') }}" alt="" srcset="">
                <div class="text-white bg-yellow-600 w-28 h-12 px-5 py-3 text-center absolute top-20">40% OFF</div>
            </div>
            <div class="md:w-1/3 flex-col my-auto text-center md:text-left md:mx-auto">
                <h3 class="text-white text-xl">Phones</h3>
                <h1 class="uppercase text-white font-bold text-5xl mt-3">Get Your Best Phone Deals</h1>
                <p class="text-white mt-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, perspiciatis.
                    Reiciendis pariatur tenetur magni accusamus sit recusandae eveniet optio nulla?
                    Omnis assumenda deleniti dolor aspernatur! Temporibus repellendus culpa sapiente reprehenderit?
                </p>
                <button class="text-white border-2 px-6 py-3 mb-5 md:mb-0 hover:bg-violet-600 mt-9" >Buy Now</button>
            </div class="w-1/2">
        </div>
        {{-- End Section 3 --}}

        {{-- start Section 4 --}}
        <div class="flex-col">
            <div class="mt-8 text-center">

                <h3 class="text-black font-bold text-xl">
                    Freequently purchased items
                </h3>
                <div class="bg-red-700 h-1 w-16 mt-3 mx-auto"></div>
            </div>
            <div class="flex justify-center mt-6">
                <p class="text-gray-600 text-center md:w-1/2 px-4 md:px-0 ">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Laudantium autem temporibus, ratione quibusdam sit sunt repudiandae harum sequi odio ducimus </p>
            </div>
            <div class="mt-10 grid lg:grid-cols-4 md:grid-cols-2 gap-10 px-16 md:px-32 lg:px-48" x-data="{
                                isChecked:1,
                                products:[
                                    {
                                        id:1,
                                        category:'Speakers',
                                        name:'JBL Charge 3',
                                        isfavourit:1,
                                        image_path:'images/jbl.png'
                                    },
                                    {
                                        id:2,
                                        category:'Speakers',
                                        name:'JBL Charge 3',
                                        isfavourit:0,
                                        image_path:'images/jbl.png'
                                    },
                                    {
                                        id:3,
                                        category:'Speakers',
                                        name:'JBL Charge 3',
                                        isfavourit:0,
                                        image_path:'images/jbl.png'
                                    },
                                    {
                                        id:4,
                                        category:'Speakers',
                                        name:'JBL Charge 3',
                                        isfavourit:0,
                                        image_path:'images/jbl.png'
                                    }
                                ]
                            }">
                <template x-for="product in products">
                    <div class="flex-col">
                        <div class="card bg-white py-6 rounded-md shadow-xl"
                            :class="{'border border-red-700' : isChecked==product.id}" @click="isChecked=product.id">
                            <img class="w-full h-64" src="{{ asset('') }}" :src="product.image_path" alt="" srcset="">
                            <h3 class="text-gray-600 px-6" x-text="product.category"></h3>
                            <div class="flex justify-between px-6 mt-4">
                                <h3 class="font-extrabold text-gray-800" x-text="product.name"></h3>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    :fill="product.isfavourit==1 ?'#dc2626':'none'" viewBox="0 0 24 24" stroke="#dc2626"
                                    stroke-width="2" @click="product.isfavourit= product.isfavourit==0 ? 1 : 0">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                        </div>
                        <button class="text-white bg-blue-600 w-full text-center rounded-md py-3 mt-6"
                            x-show="isChecked==product.id">
                            Add to Cart
                        </button>
                    </div>
                </template>
            </div>
        </div>
        {{-- end Section 4 --}}

        {{-- start footer --}}
        <footer class="mt-10">
            <div class="md:flex px-8  py-4 md:py-0 md:px-16" style="background-color: #366cac">
                <div class="md:w-1/2 md:border-r md:border-gray-500 md:pr-16 pb-8">
                    <img class="h-20 w-40 mt-6" src="https://www.metropolitan.lk/img/metrologo.png" alt="" srcset="">
                    <p class="text-gray-300 mt-8">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut harum a illo.
                        Laudantium veritatis nobis, reiciendis blanditiis consequatur fuga impedit
                         possimus laboriosam enim culpa vero? Fugit perspiciatis sunt fuga minima.
                    </p>
                    <div class="flex lg:w-1/2 justify-between mt-8">
                        <a class="text-gray-300 hover:text-white" href="#">Privacy</a>
                        <a class="text-gray-300 hover:text-white" href="#">Legal Agreement</a>
                    </div>
                    <p class="text-gray-300 mt-12 text-sm hidden md:block">All Rights Reserved Yamaha (Pvt) ltd 2022</p>
                </div>
                <div class="md:w-1/2 md:pl-16 pb-8">
                    <h1 class="text-white font-bold text-2xl mt-6">Our Newsletter</h1>
                    <p class="text-gray-100 mt-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                        libero dolore ex
                        consectetur natus incidunt, id doloremque iure sint tempore
                    </p>
                    <div class="flex py-5 px-3 mt-8 border border-gray-100 items-center justify-between h-12 ">
                        <input type="text" placeholder="Enter Your Email Here" class="focus:ring-0 border-none placeholder-gray-200 text-gray-100 w-full"
                            style="background-color: #366cac;"
                        >
                        <button class="px-4 text-gray-100 hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                strokeWidth={2}>
                                <path strokeLinecap="round" strokeLinejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                    </div>
                    <p class="text-gray-300 mt-12 text-sm md:hidden">All Rights Reserved Yamaha (Pvt) ltd 2022</p>
                </div>

            </div>
        </footer>

        {{-- end footer --}}

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </body>
</html>
