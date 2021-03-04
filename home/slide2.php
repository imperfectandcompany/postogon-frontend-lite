
	<div id="<?php echo $postid;?>" style="overflow-hidden h-auto">
	<div class="bg-white rounded p-2 mb-2 shadow  md:px-4 md:py-4 hidden lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-b  border-6" id="normalpost">

         <div class="flex" >
		 <div class="relative" x-data="{ open: false }">
            <div class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600"
			@click="open = !open" @click.away="open = false" :class="{'border-red-400 bg-red-200 text-red-400 hover:bg-red-300 transform transition duration-300 ': open}"
			x-transition:enter-end="transform opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="transform opacity-100 scale-100"
			>
               <div class="my-1 select-none">?</div>
            </div>
			
			<div class="absolute mt-6 ml-4 shadow-lg z-10 inset-y-1 text-center" x-show="open" x-transition:enter="transition duration-200 ease-in-out transform" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all transform ease-in duration-300" x-transition:leave-start="translate-y-0 opacity-100 scale-100" x-transition:leave-end="translate-y-full opacity-0 scale-95" style="display: none;">
	  <div class='bg-white shadow rounded'>           
		   <div class='mr-2 ml-2'>
                <p class='text-blue-600 '>@Profile</p>
                <p class='text-gray-400 text-xs	mb-3'>Yale '22, Studying Engineering 💻</p>                


					
	  <div class='flex items-center  mt-4'>

            <div class='mx-2'>
                <p class='text-purple-900 font-bold'>289</p>
                <p class='text-purple-300'>Posts</p>                
            </div>
            <div class='mx-2'>
                <p class='text-purple-900 font-bold'>2.3k</p>
                <p class='text-purple-300'>Followers</p>                
            </div>
            <div class='mx-2'>
                <p class='text-purple-900 font-bold'>12%</p>
                <p class='text-purple-300'>Activity</p>                
            </div>
            <div class='mx-4'>
                <button class="bg-green-400 text-green-100 px-4 py-1 rounded focus:outline-none">Profile
				</button>              
            </div>
        </div>
		            </div>
		
		
		
		
		</div>
        </div>
		
		</div>
			
			
			
			
            <div>
               <div class="flex items-center transition duration-500 transform hover:-translate-y-1">
                  <p class="mr-1 font-bold cursor-pointer hover:underline">Profile</p>

               </div>
               <div class="flex items-center mt-1 text-xs text-gray-600">
                  <p>16 March 2021</p>
                  <p class="ml-1 mr-1">•</p>
                  <p>9:44 pm</p>
               </div>
            </div>
            <div class="flex flex-col flex-shrink-0 ml-auto leading-none text-center">
               <div>
			   
			   
			   
			     <div x-data="{ open: false }" class="relative">
			    <button x-on:click="open = true" class="overflow-hidden focus:outline-none">
	 
                  <svg class="h-4 leading-none text-gray-500 cursor-pointer fill-current title-font hover:text-gray-700" viewBox="0 0 60 60" xmlns="https://www.w3.org/2000/svg">
                     <path d="M8 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM52 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zM30 22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path>
                  </svg>
				  </button>
<div x-show.transition="open" x-on:click.away="open = false" class="absolute right-0 w-40 z-20 mt-2 py-2 bg-white border rounded shadow-xl">   
      <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Edit</a>
      <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Archive</a>
      <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Swap feeds</a>	 	  
      <div class="py-2">
        <hr></hr>
    </div>
                    <div class="flex  justify-center">

		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }"  @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
</svg>
							</div>

						<div x-data="{ items: ['Check out this postogon: https://postogon.com/home/lite/copytoclipboardexample'] }">
						<button class="focus:outline-none"
		x-on:click="$dispatch('notice', {type: 'saved', text: '⌨️ Copied to clipboard'})"  @click="$clipboard(items)"
		> 
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }"  @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
						   <svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
							</div>
	</button>
	</div>   


		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
								</div>



						
                    </div>
  </div>				  
				  </div>
				  
				  
               </div>
            </div>
         </div>
         <div class="mt-4 mb-4">
         		 <p class="ml-5 mr-5 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased"
   x-data="{ isCollapsed: false, maxLength: 140, originalContent: '', content: '' }"
   x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
   >
    <span x-text="isCollapsed ? originalContent : content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
    <button class="text-blue-600 hover:text-blue-400 focus:text-blue-500 transition focus:outline-none"
      @click="isCollapsed = !isCollapsed"
      x-show="originalContent.length > maxLength"
      x-text="isCollapsed ? 'Show less' : 'Show more'"
    ></button>
  </p>
		 </div>
		 
            <div class="flex flex-row-reverse">
               <p class="text-xs text-gray-400 transition hover:text-gray-500 mb-4 mr-5">Yale '22, Studying Engineering 💻</p>
            </div>
		 

		 


		 
                <div class="flex w-full justify-between border-t mb-1 border-gray-100 border-opacity-50">		 

<input placeholder="Add comment" class="pt-4 ml-2 dark:bg-darker dark:text-light placeholder-gray-300 w-full text-gray-700 focus:outline-none" type="text">
<div class="flex pt-4">
<button class="hover:opacity-75 transition focus:outline-none">
<i>
<svg
class="fill-current text-gray-300 hover:text-gray-700 transition w-6 h-6"
height="512"
viewBox="0 0 511.072 511.072"
width="512"
>
<path
d="M74.39 480.536H38.177l25.607-25.607c13.807-13.807 22.429-31.765 24.747-51.246-36.029-23.644-62.375-54.751-76.478-90.425C-2.04 277.611-3.811 238.37 6.932 199.776c12.89-46.309 43.123-88.518 85.128-118.853 45.646-32.963 102.47-50.387 164.33-50.387 77.927 0 143.611 22.389 189.948 64.745 41.744 38.159 64.734 89.63 64.734 144.933 0 26.868-5.471 53.011-16.26 77.703-11.165 25.551-27.514 48.302-48.593 67.619-46.399 42.523-112.042 65-189.83 65-28.877 0-59.01-3.855-85.913-10.929-25.465 26.123-59.972 40.929-96.086 40.929zm182-420c-124.039 0-200.15 73.973-220.557 147.285-19.284 69.28 9.143 134.743 76.043 175.115l7.475 4.511-.23 8.727c-.456 17.274-4.574 33.912-11.945 48.952 17.949-6.073 34.236-17.083 46.99-32.151l6.342-7.493 9.405 2.813c26.393 7.894 57.104 12.241 86.477 12.241 154.372 0 224.682-93.473 224.682-180.322 0-46.776-19.524-90.384-54.976-122.79-40.713-37.216-99.397-56.888-169.706-56.888z"
/>
</svg>
</i>
</button>
</div>

					</div>
      </div>
	  </div>































