<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- this is header section --}}
    @section('header')

        <nav
            class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900  w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{ route('student.index') }}" class="flex items-center">
                    <img src="https://picsum.photos/400/400" class="h-6 mr-3 sm:h-9 rounded-full" alt="Flowbite Logo">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap  dark:text-yellow-600 text-red-800">MANDAL
                        ENGLISH HOUSE</span>
                </a>
                <div class="flex md:order-2">
                    <a href="{{ route('student.Request') }}" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply
                        For Admission</a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('student.index') }}"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    @show


    {{-- this is content section --}}
    @section('content')

    @show


    {{-- this is footer section --}}
    @section('footer')

        <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/student" class="flex items-center mb-4 sm:mb-0">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-red-800">MANDAL
                        ENGLISH HOUSE</span>
                </a>
                <ul class="flex flex-wrap space-x-6 mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                  
                    {{-- INSTA  --}}
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">
                            <svg class="w-10 h-10" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="20" fill="#C13584" />
                                <path
                                    d="M24 14.1622C27.2041 14.1622 27.5837 14.1744 28.849 14.2321C30.019 14.2855 30.6544 14.481 31.0773 14.6453C31.6374 14.863 32.0371 15.123 32.457 15.5429C32.877 15.9629 33.137 16.3626 33.3547 16.9227C33.519 17.3456 33.7145 17.981 33.7679 19.1509C33.8256 20.4163 33.8378 20.7958 33.8378 23.9999C33.8378 27.2041 33.8256 27.5836 33.7679 28.849C33.7145 30.019 33.519 30.6543 33.3547 31.0772C33.137 31.6373 32.877 32.0371 32.4571 32.457C32.0371 32.8769 31.6374 33.1369 31.0773 33.3546C30.6544 33.519 30.019 33.7144 28.849 33.7678C27.5839 33.8255 27.2044 33.8378 24 33.8378C20.7956 33.8378 20.4162 33.8255 19.151 33.7678C17.981 33.7144 17.3456 33.519 16.9227 33.3546C16.3626 33.1369 15.9629 32.8769 15.543 32.457C15.1231 32.0371 14.863 31.6373 14.6453 31.0772C14.481 30.6543 14.2855 30.019 14.2321 28.849C14.1744 27.5836 14.1622 27.2041 14.1622 23.9999C14.1622 20.7958 14.1744 20.4163 14.2321 19.1509C14.2855 17.981 14.481 17.3456 14.6453 16.9227C14.863 16.3626 15.123 15.9629 15.543 15.543C15.9629 15.123 16.3626 14.863 16.9227 14.6453C17.3456 14.481 17.981 14.2855 19.151 14.2321C20.4163 14.1744 20.7959 14.1622 24 14.1622ZM24 12C20.741 12 20.3323 12.0138 19.0524 12.0722C17.7752 12.1305 16.9028 12.3333 16.1395 12.63C15.3504 12.9366 14.6812 13.3469 14.0141 14.0141C13.3469 14.6812 12.9366 15.3504 12.63 16.1395C12.3333 16.9028 12.1305 17.7751 12.0722 19.0524C12.0138 20.3323 12 20.741 12 23.9999C12 27.259 12.0138 27.6676 12.0722 28.9475C12.1305 30.2248 12.3333 31.0971 12.63 31.8604C12.9366 32.6495 13.3469 33.3187 14.0141 33.9859C14.6812 34.653 15.3504 35.0633 16.1395 35.3699C16.9028 35.6666 17.7752 35.8694 19.0524 35.9277C20.3323 35.9861 20.741 35.9999 24 35.9999C27.259 35.9999 27.6677 35.9861 28.9476 35.9277C30.2248 35.8694 31.0972 35.6666 31.8605 35.3699C32.6496 35.0633 33.3188 34.653 33.9859 33.9859C34.653 33.3187 35.0634 32.6495 35.37 31.8604C35.6667 31.0971 35.8695 30.2248 35.9278 28.9475C35.9862 27.6676 36 27.259 36 23.9999C36 20.741 35.9862 20.3323 35.9278 19.0524C35.8695 17.7751 35.6667 16.9028 35.37 16.1395C35.0634 15.3504 34.653 14.6812 33.9859 14.0141C33.3188 13.3469 32.6496 12.9366 31.8605 12.63C31.0972 12.3333 30.2248 12.1305 28.9476 12.0722C27.6677 12.0138 27.259 12 24 12Z"
                                    fill="white" />
                                <path
                                    d="M24.0059 17.8433C20.6026 17.8433 17.8438 20.6021 17.8438 24.0054C17.8438 27.4087 20.6026 30.1675 24.0059 30.1675C27.4092 30.1675 30.1681 27.4087 30.1681 24.0054C30.1681 20.6021 27.4092 17.8433 24.0059 17.8433ZM24.0059 28.0054C21.7968 28.0054 20.0059 26.2145 20.0059 24.0054C20.0059 21.7963 21.7968 20.0054 24.0059 20.0054C26.2151 20.0054 28.0059 21.7963 28.0059 24.0054C28.0059 26.2145 26.2151 28.0054 24.0059 28.0054Z"
                                    fill="white" />
                                <path
                                    d="M31.8507 17.5963C31.8507 18.3915 31.206 19.0363 30.4107 19.0363C29.6154 19.0363 28.9707 18.3915 28.9707 17.5963C28.9707 16.801 29.6154 16.1562 30.4107 16.1562C31.206 16.1562 31.8507 16.801 31.8507 17.5963Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>
                    {{-- YOUTUBE  --}}
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6"><svg class="w-10 h-10" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="20" fill="#FF0000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.3005 16.3781C35.6996 16.7772 35.9872 17.2739 36.1346 17.8187C36.9835 21.2357 36.7873 26.6324 36.1511 30.1813C36.0037 30.7261 35.7161 31.2228 35.317 31.6219C34.9179 32.021 34.4212 32.3086 33.8764 32.456C31.8819 33 23.8544 33 23.8544 33C23.8544 33 15.8269 33 13.8324 32.456C13.2876 32.3086 12.7909 32.021 12.3918 31.6219C11.9927 31.2228 11.7051 30.7261 11.5577 30.1813C10.7038 26.7791 10.9379 21.3791 11.5412 17.8352C11.6886 17.2903 11.9762 16.7936 12.3753 16.3945C12.7744 15.9954 13.2711 15.7079 13.8159 15.5604C15.8104 15.0165 23.8379 15 23.8379 15C23.8379 15 31.8654 15 33.8599 15.544C34.4047 15.6914 34.9014 15.979 35.3005 16.3781ZM27.9423 24L21.283 27.8571V20.1428L27.9423 24Z" fill="white"/>
                            </svg></a>
                    </li>
                    {{-- FACEBOOK  --}}
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" id="_24x24_On_Light_Facebook" data-name="24x24/On Light/Facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="0.991" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#4e69a2"/>
                                    <stop offset="1" stop-color="#3b5998"/>
                                  </linearGradient>
                                  <clipPath id="clip-path">
                                    <path id="Shape" d="M11.193,19.929h0V13.159h2.358l.354-2.667H11.193v-1.7c0-.779.231-1.3,1.356-1.3H14V5.106A19.937,19.937,0,0,0,11.887,5,3.269,3.269,0,0,0,8.365,8.525v1.966H6v2.667H8.365v6.709a10,10,0,1,1,2.83.062Z" transform="translate(2 2)" fill="url(#linear-gradient)"/>
                                  </clipPath>
                                </defs>
                                <rect id="view-box" width="24" height="24" fill="none"/>
                                <path id="Shape-2" data-name="Shape" d="M11.193,19.929h0V13.159h2.358l.354-2.667H11.193v-1.7c0-.779.231-1.3,1.356-1.3H14V5.106A19.937,19.937,0,0,0,11.887,5,3.269,3.269,0,0,0,8.365,8.525v1.966H6v2.667H8.365v6.709a10,10,0,1,1,2.83.062Z" transform="translate(2 2)" fill="url(#linear-gradient)"/>
                              </svg>
                        </a>
                    </li>
                    {{-- LOCATION --}}
                    <li>
                        <a href="#" class="hover:underline">
                            <svg class="w-10 h-10" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M498.069 786.871s303.32-237.507 303.32-409.31-135.8-311.076-303.32-311.076-303.32 139.273-303.32 311.076 303.32 409.31 303.32 409.31z m0-682.312c146.614 0 265.466 121.438 265.466 271.239S498.834 741.519 498.834 741.519 232.603 525.598 232.603 375.798s118.852-271.239 265.466-271.239z m0 416.907c52.349 0 94.788-42.438 94.788-94.788v-37.915c0-52.349-42.438-94.788-94.788-94.788s-94.788 42.438-94.788 94.788v37.915c0 52.349 42.438 94.788 94.788 94.788z m-56.873-132.703c0-31.411 25.462-56.873 56.873-56.873s56.873 25.462 56.873 56.873v37.915c0 31.411-25.462 56.873-56.873 56.873s-56.873-25.462-56.873-56.873v-37.915z m246.448 417.066l-113.745 0.415v-0.415H232.663s-39.1 0-37.915-37.915c1.185-37.915 37.915-37.915 37.915-37.915h56.873s18.366-0.593 18.958-18.958c0.593-18.366-18.958-18.958-18.958-18.958h-56.873s-75.83-1.185-75.83 75.83 75.83 75.83 75.83 75.83h132.703v0.882h322.278s39.1 0 37.915 37.621c-1.185 37.621-37.915 37.621-37.915 37.621h-151.66s-18.958 0.298-18.958 18.664c0 18.364 18.958 18.958 18.958 18.958h151.66s75.83 1.175 75.83-75.242-75.83-76.418-75.83-76.418z" fill="#25EF25" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <a href=""
                    class="hover:underline">MandalEnglishHouse™</a>. All Rights Reserved.
            </span>
        </footer>


    @show
</body>

</html>
