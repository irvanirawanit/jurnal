<!doctype html>
<html class="h-full bg-white">

<head>
    <title>Pembayaran </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-full">
<div class="flex flex-col h-full">
        <div
            class="bg-indigo-700 sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8 justify-between w-full">
            <div class="logo">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
            </div>
            <div class="gap-x-4 x lg:gap-x-6">

                <div class="flex items-center gap-x-4 lg:gap-x-6">
                    <button type="button" class="-m-2.5 p-2.5 text-white hover:text-gray-300">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Separator -->
                    <div class=" block h-6 w-px bg-gray-200/60" aria-hidden="true"></div>
                    <!-- Profile dropdown -->
                    <div class="relative">
                        <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button"
                            aria-expanded="false" aria-haspopup="true">

                            <img class="h-9 w-9 rounded-full bg-gray-50"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                            <span class="flex items-center">
                                <span class="ml-4 text-white flex flex-col text-left">
                                    <span class="text-sm font-semibold  " aria-hidden="true">14 Mei 2022</span>
                                    <span class="text-sm font-normal " aria-hidden="true">Tom Cook</span>
                                </span>

                                <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-1">
            <nav class="bg-gray-800 h-full">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class=" space-y-1 pt-4">
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">
                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white"
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path
                                            d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                                        <path
                                            d="M64 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16h80V400c0-26.5 21.5-48 48-48s48 21.5 48 48v64h80c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64zM0 64C0 28.7 28.7 0 64 0H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm88 40c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V104zM232 88h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V104c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V232zm144-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V232c0-8.8 7.2-16 16-16z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                        <path
                                            d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path
                                            d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path
                                            d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5V80C0 53.5 21.5 32 48 32H197.5c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-whitlase group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path
                                            d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                    </svg>


                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-white group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                                        <path
                                            d="M0 32C0 14.3 14.3 0 32 0H48c44.2 0 80 35.8 80 80V368c0 8.8 7.2 16 16 16H608c17.7 0 32 14.3 32 32s-14.3 32-32 32H541.3c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16H253.3c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16H144c-44.2 0-80-35.8-80-80V80c0-8.8-7.2-16-16-16H32C14.3 64 0 49.7 0 32zM432 96V56c0-4.4-3.6-8-8-8H344c-4.4 0-8 3.6-8 8V96h96zM288 96V56c0-30.9 25.1-56 56-56h80c30.9 0 56 25.1 56 56V96 320H288V96zM512 320V96h16c26.5 0 48 21.5 48 48V272c0 26.5-21.5 48-48 48H512zM240 96h16V320H240c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-whitlase group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path
                                            d="M448 416l0-64L64 352l0 64 384 0zm0 64L64 480c-35.3 0-64-28.7-64-64l0-64c0-35.3 28.7-64 64-64l384 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64zM288 160c0 35.3-28.7 64-64 64L64 224c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l144 0 16 0 144 0c44.2 0 80 35.8 80 80l0 16 38.1 0c21.4 0 32.1 25.9 17 41L433 239c-9.4 9.4-24.6 9.4-33.9 0L329 169c-15.1-15.1-4.4-41 17-41l38.1 0 0-16c0-8.8-7.2-16-16-16l-80 0 0 64z" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-whitlase group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"
                                        fill="none">
                                        <path
                                            d="M10 14.5C10.275 14.5 10.5 14.275 10.5 14V5H8C7.44687 5 7 4.55313 7 4V1.5H2C1.725 1.5 1.5 1.725 1.5 2V14C1.5 14.275 1.725 14.5 2 14.5H10ZM0 2C0 0.896875 0.896875 0 2 0H7.17188C7.70312 0 8.2125 0.209375 8.5875 0.584375L11.4156 3.4125C11.7906 3.7875 12 4.29688 12 4.82812V14C12 15.1031 11.1031 16 10 16H2C0.896875 16 0 15.1031 0 14V2Z"
                                            fill="white" />
                                        <path d="M2 7.58887V7H4.4157V7.58887H3.54906V10H2.86803V7.58887H2Z" fill="white" />
                                        <path
                                            d="M5.01439 10H4.27196L5.23628 7H6.15595L7.12028 10H6.37785L5.70658 7.75586H5.68426L5.01439 10ZM4.91531 8.81934H6.46716V9.37012H4.91531V8.81934Z"
                                            fill="white" />
                                        <path
                                            d="M8.12717 7L8.64911 7.94775H8.67143L9.19895 7H9.97209L9.10964 8.5L10 10H9.20733L8.67143 9.04199H8.64911L8.11321 10H7.32612L8.2123 8.5L7.34845 7H8.12717Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class=" px-4 hover:bg-indigo-700 text-white group flex gap-x-3 text-sm leading-6 font-semibold  py-2">

                                    <svg class="h-6 w-6 shrink-0 text-whitlase group-hover:text-white fill-white "
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"
                                        fill="none">
                                        <path
                                            d="M10 14.5C10.275 14.5 10.5 14.275 10.5 14V5H8C7.44687 5 7 4.55313 7 4V1.5H2C1.725 1.5 1.5 1.725 1.5 2V14C1.5 14.275 1.725 14.5 2 14.5H10ZM0 2C0 0.896875 0.896875 0 2 0H7.17188C7.70312 0 8.2125 0.209375 8.5875 0.584375L11.4156 3.4125C11.7906 3.7875 12 4.29688 12 4.82812V14C12 15.1031 11.1031 16 10 16H2C0.896875 16 0 15.1031 0 14V2Z"
                                            fill="white" />
                                        <path
                                            d="M6.01528 8.75V5.25938C6.01528 5.11875 6.11862 5 6.25148 5C8.07754 5 9.55818 6.56719 9.55818 8.5C9.55818 8.64062 9.44599 8.75 9.31313 8.75H6.01528ZM2 9.25C2 7.35469 3.33006 5.78594 5.05575 5.53594C5.19156 5.51562 5.3067 5.63125 5.3067 5.77656V9.5L7.61697 11.9453C7.71587 12.05 7.70849 12.2219 7.59482 12.3062C7.01615 12.7437 6.30757 13 5.5429 13C3.58692 13 2 11.3219 2 9.25ZM9.77075 9.5C9.90804 9.5 10.0158 9.62188 9.99809 9.76562C9.88442 10.6391 9.48732 11.4156 8.90717 11.9891C8.8186 12.0766 8.67984 12.0703 8.59422 11.9781L6.25148 9.5H9.77075Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </li>


                        </ul>
                    </li>


                </ul>
            </nav>
            <main class="pt-1 flex-1">

                <!-- Main tab -->
                <div class="main-tab flex justify-between border-b border-indigo-700 rounded-tl-md rounded-tr-md ">
                    <nav class=" flex space-x-1 " aria-label="Tabs">
                        <a href="#"
                            class="bg-gray-300 text-gray-600 px-3 py-2 rounded-tl-md rounded-tr-md ml-1">Dashboard</a>
                        <a href="#"
                            class="bg-indigo-700 font-semibold text-white px-3 py-2 rounded-tl-md rounded-tr-md "><span>Pembayaran
                            </span><i class="fa-solid fa-x ml-3 text-xs"></i></a>
                    </nav>
                    <div class="mr-1 flex items-center bg-gray-200 px-3 ">
                        <span class="pr-2">2</span> <i class="fa-solid fa-chevron-down text-gray-500 text-xs"></i>
                    </div>
                </div>

                <!-- Sub tab -->
                <div class="flex justify-between border-b border-gray-300">
                    <nav class=" flex space-x-1 mt-1 " aria-label="Tabs">
                        <a href="#" class="bg-green-500 text-white px-3 py-1 rounded-tl-md rounded-tr-md ml-1"><i
                                class="fa-solid fa-list"></i></a>
                        <a href="#"
                            class="bg-gray-300 text-gray-600 px-3 py-1 rounded-tl-md rounded-tr-md border-t-2 border-indigo-700 "><span>Data
                                Baru </span><i class="fa-solid fa-x ml-3 text-xs font-bold"></i></a>
                    </nav>
                    <nav class=" flex space-x-1 mt-1 mr-1 mb-1" aria-label="Tabs">
                        <button class="px-2 py-0 border border-indigo-700 rounded-md "><i
                                class="fa-solid fa-gear text-indigo-700"></i></button>
                        <button class="px-2 py-0 border bg-orange-400 border-orange-400 rounded-md "><i
                                class="fa-regular fa-lightbulb text-white"></i></button>
                    </nav>
                </div>

                <!-- Main Content -->
                <div class="flex gap-x-4">
                    <div class="flex-1 ">
                        <div class="flex justify-between pl-10 mt-1">
                            <div class="kas flex items-center">
                                <div class=" w-28"><span>Kas/Bank </span><span class=" text-red-600">*</span></div>
                                <div
                                    class="flex justify-between items-center border border-gray-300 bg-white w-60 rounded-md">
                                    <div class="p-1">
                                        <div class="border border-blue-400 bg-blue-200 text-xs px-1 py-1 rounded-sm">
                                            <span class="pr-2 text-blue-700">Kas Kecil</span>
                                            <i class="fa-solid fa-x text-xs font-normal text-[10px] text-blue-900"></i>
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-search text-gray-500 px-2"></i>
                                </div>
                            </div>
                            <div class="bukti flex items-center">
                                <div class=" flex items-center ">
                                    <span class="w-20">No Bukti # </span><span class=" text-red-600">*</span>
                                    <button type="button"
                                        class="mx-2 group relative inline-flex h-5 w-10 flex-shrink-0 cursor-pointer items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
                                        role="switch" aria-checked="false">
                                        <span class="sr-only">Use setting</span>
                                        <span aria-hidden="true"
                                            class="pointer-events-none absolute h-full w-full rounded-md bg-white"></span>
                                        <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                        <span aria-hidden="true"
                                            class="bg-indigo-600 pointer-events-none absolute mx-auto h-4 w-9 rounded-full transition-colors duration-200 ease-in-out"></span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true"
                                            class="translate-x-5 pointer-events-none absolute left-0 inline-block h-5 w-5 transform rounded-full border border-gray-200 bg-white shadow ring-0 transition-transform duration-200 ease-in-out"></span>
                                    </button>

                                </div>
                                <select
                                    class="block w-40 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option>Kas Kecil</option>
                                    <option>Deposito Bank</option>
                                    <option>Kas Besar</option>
                                </select>

                            </div>
                        </div>
                        <div class="flex justify-between pl-10 mt-1">
                            <div class="tanggal flex items-center">
                                <div class=" w-28"><span>Tanggal </span> <span class=" text-red-600">*</span></div>

                                <div class="relative mt-2 flex items-center"><input type="text" name="search" id="search"
                                        class="block w-full rounded-md border-0 py-1.5 pr-8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5"><i
                                            class="fa-solid fa-calendar-alt px-1 inline-flex items-center  text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bukti flex items-center">

                                <select
                                    class="block w-40 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                    <option>Ambil</option>
                                    <option>Favorit</option>
                                    <option>Pencatatan beban</option>
                                </select>

                            </div>
                        </div>

                        <div class="ml-1 flex mt-3">
                            <nav class="flex flex-col space-y-2 ">
                                <button class="border border-l-2 border-l-indigo-700 p-2 rounded-l-md border-r-white">
                                    <i class="fa-solid fa-file text-indigo-700"></i>
                                </button>
                                <button class="border border-l-2 p-2 rounded-l-md">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </nav>
                            <div class="flex-1 border border-gray-300 rounded-md rounded-tl-none">
                                <div class="px-4">
                                    <div class="flex items-center justify-between">
                                        <div class=" w-1/3">
                                            <div>
                                                <label for="search"
                                                    class="hidden text-sm font-medium leading-6 text-gray-900">Quick
                                                    search</label>
                                                <div class="relative mt-2 flex items-center">
                                                    <input type="text" name="search" id="search"
                                                        class="block w-full rounded-md border-0 py-1.5 pr-8 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5">

                                                        <i
                                                            class="fa-solid fa-search px-1 inline-flex items-center text-xs text-gray-400"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                            <span>1 Rincian Pembayaran </span> <span class=" text-red-600">*</span>
                                        </div>
                                    </div>
                                    <div class="mt-8 flow-root">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                <table class="min-w-full divide-y divide-gray-300">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="py-3.5 pl-4 pr-3 w-6 text-left text-sm font-semibold bg-gray-300 text-gray-900 sm:pl-3">
                                                            </th>
                                                            <th scope="col"
                                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold bg-gray-300 text-gray-900 sm:pl-3">
                                                                Akun</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold bg-gray-300 text-gray-900">
                                                                Nama Akun</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold bg-gray-300 text-gray-900">
                                                                Nilai</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white">
                                                        <tr class="even:bg-gray-50">
                                                            <td>
                                                                <i class="fa-solid fa-bars text-gray-400"></i>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-600 sm:pl-3">
                                                                112345</td>
                                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-600">
                                                                Persediaan barang jadi</td>
                                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-600">
                                                                2.000.000</td>
                                                        </tr>

                                                        <!-- More people... -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex justify-end mt-4 ">
                            <div class="flex gap-x-4 border border-gray-300 rounded-md px-5 py-5 border-b-2 border-b-indigo-700">
                                <div class="w-40">
                                    <div class="mb-2 text-sm">Total Debit: </div>
                                    <div class="font-bold">Rp 56.456.780</div>
                                </div>
                                <!-- Separator -->
                                <div class=" block h-full w-px bg-gray-300/60" aria-hidden="true"></div>

                                <div class="w-40">
                                    <div class="mb-2 text-sm">Total Credit: </div>
                                    <div class="font-bold">Rp 56.456.780</div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <nav class=" flex flex-col space-y-3 mt-1 mr-1 mb-1" aria-label="Tabs">
                        <button class="mb-5 px-3 py-3 border bg-blue-500 border-blue-500 rounded-md text-white">
                            <i class="fa-regular fa-floppy-disk text-2xl"></i> <i
                                class="fa-solid fa-chevron-down pl-2 text-xs"></i></button>

                        <button class="px-3 py-3 border bg-blue-200 border-blue-500 rounded-md text-blue-500 ">
                            <i class="fa-solid fa-print text-2xl"></i> <i
                                class="fa-solid fa-chevron-down pl-2 text-xs"></i></button>

                        <button class="px-3 py-3 border bg-blue-200 border-blue-500 rounded-md blue-500 text-blue-500 ">
                            <i class="fa-solid fa-paperclip text-2xl"></i> <i
                                class="fa-solid fa-chevron-down pl-2 text-xs"></i></button>

                        <button class="px-3 py-3 border bg-green-300 border-green-500 rounded-md text-green-600">
                            <i class="fa-solid fa-briefcase text-2xl"></i> <i
                                class="fa-solid fa-chevron-down pl-2 text-xs"></i></button>

                    </nav>

                </div>
            </main>
        </div>
    </div>
</body>

</html>