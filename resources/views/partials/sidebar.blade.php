<aside id="logo-sidebar" class="fixed top-2 left-0 z-40 w-60 h-screen pt-16 transition-transform -translate-x-full bg-gradient-to-r    from-gray via-blue-500 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-500 dark:focus:ring-blue-500 font-medium  border-r border-gray-200 sm:translate-x-0 dark:bg-gray-500 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-4 py-2 pb-4 overflow-y-auto bg-gradient-to-r from-blue-500 via-blue-500 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg">
        <ul class="space-y-2 font-medium">
             <li>
                <a href="dashboard" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90  flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                 <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20 20C20 20.5523 19.5523 21 19 21H5C4.44772 21 4 20.5523 4 20V11H1L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11H20V20ZM18 19V9.15745L12 3.7029L6 9.15745V19H18ZM12 17L8.64124 13.6412C7.76256 12.7625 7.76256 11.3379 8.64124 10.4592C9.51992 9.58056 10.9445 9.58056 11.8232 10.4592L12 10.636L12.1768 10.4592C13.0555 9.58056 14.4801 9.58056 15.3588 10.4592C16.2374 11.3379 16.2374 12.7625 15.3588 13.6412L12 17Z"></path></svg>
                 <span class="ms-3 font-extrabold">Tableau de bord</span>
                </a>
             </li>

           {{-- <hr> --}}

          <li>
             <button type="button" class="cursor-pointer group rounded-md ont-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center w-full p-2 text-base text-gray-900 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 2.04935V13H21.9506C21.4489 18.0533 17.1853 22 12 22C6.47715 22 2 17.5228 2 12C2 6.81462 5.94668 2.55107 11 2.04935ZM13 0.542847C18.5535 1.02121 22.9788 5.4465 23.4571 11H13V0.542847Z"></path></svg>
                      <span class="cursor-pointer group block rounded-md ont-bold shadow-2xl hover:scale-110 transition active:scale-90 flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-extrabold">Données de base</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                   </svg>
             </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 font-extrabold">

                   <li>
                      <a href="anneeScolaire" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center w-full p-2 text-gray-900 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 ">Année scolaire</a>
                   </li>

                   <li>
                      <a href="classe" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center w-full p-2 text-gray-900 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Classe</a>
                   </li>
                </ul>
          </li>

          <li>
             <button type="button" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center w-full p-2 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-one">
                <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 16C17.6569 16 19 17.3431 19 19C19 20.6569 17.6569 22 16 22C14.3431 22 13 20.6569 13 19C13 17.3431 14.3431 16 16 16ZM6 12C8.20914 12 10 13.7909 10 16C10 18.2091 8.20914 20 6 20C3.79086 20 2 18.2091 2 16C2 13.7909 3.79086 12 6 12ZM14.5 2C17.5376 2 20 4.46243 20 7.5C20 10.5376 17.5376 13 14.5 13C11.4624 13 9 10.5376 9 7.5C9 4.46243 11.4624 2 14.5 2Z"></path></svg>
                      <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-extrabold">Traitements</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                   </svg>
             </button>
                <ul id="dropdown-one" class="hidden py-2 space-y-2 font-extrabold">
                   <li>
                      <a href="{{ route('add_eleve') }}" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 dark:text-whith-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                         <span class="ms-3 font-extrabold">Elève</span>
                        </a>
                   </li>

                   <li>
                        <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 dark:text-whith-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                         <span class="ms-3 font-extrabold">prof</span>
                        </a>
                   </li>

                   <li>
                      <a href="cours" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M13 21V23.5L10 21.5L7 23.5V21H6.5C4.567 21 3 19.433 3 17.5V5C3 3.34315 4.34315 2 6 2H20C20.5523 2 21 2.44772 21 3V20C21 20.5523 20.5523 21 20 21H13ZM7 19V17H13V19H19V16H6.5C5.67157 16 5 16.6716 5 17.5C5 18.3284 5.67157 19 6.5 19H7ZM7 5V7H9V5H7ZM7 8V10H9V8H7ZM7 11V13H9V11H7Z"></path>
                         </svg>
                         <span class="ms-3 font-extrabold">Cours</span>
                        </a>
                   </li>

                   <li>
                      <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6 4V8H18V4H20.0066C20.5552 4 21 4.44495 21 4.9934V21.0066C21 21.5552 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5551 3 21.0066V4.9934C3 4.44476 3.44495 4 3.9934 4H6ZM9 17H7V19H9V17ZM9 14H7V16H9V14ZM9 11H7V13H9V11ZM16 2V6H8V2H16Z"></path></svg>
                         <span class="flex-1 ms-3 whitespace-nowrap font-extrabold">Evaluation</span>
                      </a>
                   </li>


                </ul>
          </li>

          {{-- <hr> --}}

          <li>
             <button type="button" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center w-full p-2 text-base text-gray-900  rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-two" data-collapse-toggle="dropdown-two">
                <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z"></path></svg>
                      <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-extrabold">Administration</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                   </svg>
             </button>
                <ul id="dropdown-two" class="hidden py-2 space-y-2 font-extrabold">

                   <li>
                      <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 dark:text-whith-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 14.252V22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"></path></svg>
                         <span class="ms-3 font-extrabold">Utilisateur</span>
                      </a>
                   </li>

                   <li>
                      <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 px-8 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="shrink-0 w-5 h-5 text-white transition duration-75 dark:text-whith-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                         </svg>
                         <span class="ms-3 font-extrabold">Rôle</span>
                        </a>
                   </li>
                </ul>
          </li>

          {{-- <hr> --}}

          <li>
                <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                   <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5 3V19H21V21H3V3H5ZM19.9393 5.93934L22.0607 8.06066L16 14.1213L13 11.121L9.06066 15.0607L6.93934 12.9393L13 6.87868L16 9.879L19.9393 5.93934Z"></path></svg>
                   <span class="flex-1 ms-3 whitespace-nowrap font-extrabold">Statistiques</span>
                </a>
             </li>

             {{-- <hr> --}}

             <li>
                <a href="#" class="cursor-pointer group font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                   <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.29117 20.8242L2 22L3.17581 16.7088C2.42544 15.3056 2 13.7025 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.2975 22 8.6944 21.5746 7.29117 20.8242Z"></path></svg>
                   <span class="flex-1 ms-3 whitespace-nowrap font-extrabold">Notifications</span>
                </a>
             </li>
             {{-- <hr> --}}

             <li>
                <a href="#" class="cursor-pointer group  font-bold shadow-2xl hover:scale-110 transition active:scale-90 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                   <svg class="shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                   </svg>
                   <span class=" flex-1 ms-3 whitespace-nowrap font-extrabold">Déconnexion</span>
                </a>
                {{-- class="cursor-pointer group block px-5 py-2 rounded-md bg-black text-white text-4xl font-bold shadow-2xl hover:scale-110 transition active:scale-90" --}}
          </li>

       </ul>
    </div>
 </aside>

