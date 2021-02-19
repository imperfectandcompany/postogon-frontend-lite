      <div class="px-4 py-4 transition bg-white border-b">
         <div class="flex">
		 <div class="relative" x-data="{ open: false }">
            <div class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600"
			@click="open = !open" @click.away="open = false" :class="{'border-indigo-700 transform transition duration-300 ': open}"
			x-transition:enter-end="transform opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="transform opacity-100 scale-100"
			>
               <div class="my-1 select-none">?</div>
            </div>
			<div class="absolute shadow-lg z-10 inset-y-1 text-center bg-white opacity-100 mt-5 ml-6" x-show="open" x-transition:enter="transition duration-200 ease-in-out transform" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all transform ease-in duration-300" x-transition:leave-start="translate-y-0 opacity-100 scale-100" x-transition:leave-end="translate-y-full opacity-0 scale-95" style="display: none;">
          <ul>
            <li class="font-medium">
              <a href="#" class="flex block bg-white px-4 shadow py-2 items-center transform text-sm text-gray-700 hover:bg-gray-100 duration-200 border-transparent">
                <div class="mr-3">
				<svg class="w-6 h-6" fill="none" stroke="#000000" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div class="select-none">View profile</div>
              </a>
            </li>

            <li class="font-medium">
              <a href="#" class="block flex px-4 shadow border-b bg-white py-2 items-center transform text-sm text-gray-700 transition-colors hover:bg-gray-100 duration-200  ">
                <div class="mr-3 text-red-600">
				<svg class="w-6 h-6" viewBox="0 0 24 24"><path d="M9.602 3.7c-1.154 1.937-.635 5.227 1.424 9.025.93 1.712.697 3.02.338 3.815-.982 2.178-3.675 2.799-6.525 3.456-1.964.454-1.839.87-1.839 4.004h-1.995l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 3.321 0 5.97 2.117 5.97 6.167 0 3.555-1.949 6.833-2.383 7.833h-2.115c.392-1.536 2.499-4.366 2.499-7.842 0-5.153-5.867-4.985-7.369-2.458zm13.398 15.3h-3v-3h-2v3h-3v2h3v3h2v-3h3v-2z"/></svg>               
			   </div>
                <div class="select-none">Add to feed 2</div>
              </a>
            </li>
            <li class="font-medium">
              <a href="#" class="block flex px-4 shadow border-b bg-white py-2 items-center transform text-sm text-gray-700 transition-colors hover:bg-gray-100 duration-200  ">
                <div class="mr-3 text-red-600">
				<svg class="w-6 h-6" viewBox="0 0 24 24"><path d="M19.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-5v-1h5v1zm-7.18 4h-14.815l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 6.751 0 7.506 7.595 3.64 13.679-1.292 2.031-2.64 3.63-2.64 5.821 0 1.747.696 3.331 1.82 4.5z"/></svg>			   </div>
                <div class="select-none">Remove from feed 2</div>
              </a>
            </li>				
          </ul>
        </div>
		</div>
			
			
			
			
            <div>
               <div class="flex items-center transition duration-500 transform hover:-translate-y-1">
                  <p class="mr-1 font-bold cursor-pointer hover:underline">Profile</p>
                  <svg class="h-5 w-5 leading-none transition cursor-pointer fill-current title-font hover:text-gray-700" viewBox="0 0 24 24">
                     <path d="M12 6c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm2.656 1.999c.121.108.237.223.344.344l-.582.583-.166-.178-.179-.166.583-.583zm-1.326-.78c.154.054.305.117.449.189l-.322.76-.26-.12-.187-.069.32-.76zm-1.573-.219h.486v.824l-.243-.009-.243.009v-.824zm-1.063.209l.315.762-.207.076-.242.11-.314-.762c.144-.07.295-.132.448-.186zm-2.286 2.012l.76.32-.119.26-.07.188-.76-.32c.054-.155.117-.304.189-.448zm-.408 1.534h.824l-.009.243.009.243h-.824v-.486zm.396 1.997c-.07-.145-.133-.295-.187-.45l.763-.315.076.208.109.24-.761.317zm.879 1.314l-.344-.343.65-.652.166.178.179.166-.651.651zm.473-5.318l-.166.178-.582-.583c.107-.121.223-.236.344-.344l.583.583-.179.166zm.922 6.033c-.154-.054-.305-.117-.449-.189l.322-.76.26.12.188.07-.321.759zm1.573.219h-.486v-.825l.243.009.243-.009v.825zm1.062-.21l-.314-.763.207-.076.242-.11.314.762c-.144.071-.295.134-.449.187zm-1.305-1.79c-1.105 0-2-.895-2-2 0-.407.121-.784.329-1.1l.724.724.522-.522-.731-.733c.326-.232.724-.369 1.156-.369 1.105 0 2 .896 2 2s-.895 2-2 2zm2.656.997l-.583-.583.179-.166.166-.178.582.583c-.107.122-.223.237-.344.344zm.936-1.221l-.76-.321.119-.259.07-.189.76.321c-.054.153-.117.304-.189.448zm.408-1.535h-.824l.009-.243-.009-.243h.824v.486zm-.21-1.548l-.763.315-.076-.208-.109-.242.762-.314c.07.145.132.296.186.449zm.21 12.307h5v2h-5v-2zm-13 0h5v2h-5v-2zm-2-22v21h22v-21h-22zm11 17c-3.316 0-6-2.684-6-6 0-3.317 2.684-6 6-6s6 2.684 6 6-2.684 6-6 6z"></path>
                  </svg>
               </div>
               <div class="flex items-center mt-1 text-xs text-gray-600">
                  <p>16 March 2021</p>
                  <p class="ml-1 mr-1">•</p>
                  <p>9:44 pm</p>
               </div>
            </div>
            <div class="flex flex-col flex-shrink-0 ml-auto leading-none text-center">
               <div>
                  <svg class="h-4 leading-none text-gray-500 cursor-pointer fill-current title-font hover:text-gray-700" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM52 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM30 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path>
                  </svg>
               </div>
            </div>
         </div>
         <div class="mt-4 mb-4">
            <p class="ml-5 mr-5 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <div class="flex flex-row-reverse mt-1">
               <p class="text-xs text-gray-400 transition hover:text-gray-500">Yale '22, Studying Engineering 💻</p>
            </div>
         </div>
         <div class="flex flex-row-reverse items-center mt-4">
            <div class="mx-auto text-sm font-bold transition duration-200 border-none cursor-pointer">
               <svg class="w-4 h-4" fill="none" stroke="#000000" viewBox="0 0 24 24">
                  <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <span class="">95</span>
            </div>
            <div class="mx-auto text-sm font-bold transition duration-200 border-none cursor-pointer">
               <svg class="w-4 h-4" fill="#000000" viewBox="0 0 24 24">
                  <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 11v4h2.953l1.594 2h-6.547v-6h-2l3-4 3 4h-2zm6 2v-4h-2.922l-1.594-2h6.516v6h2l-3 4-3-4h2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <span class="">24</span>
            </div>
            <div class="mx-auto text-sm font-bold transition duration-200 border-none cursor-pointer">
               <svg class="w-4 h-4" fill="none" stroke="#000000" viewBox="0 0 24 24">
                  <path d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <span class="">12</span>
            </div>
         </div>
      </div>