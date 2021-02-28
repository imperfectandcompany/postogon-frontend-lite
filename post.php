	<div id="<?php echo $postid;?>" style="overflow-hidden w-full h-auto"> 
	<div class="bg-white px-4 py-4 hidden m-0 lg:ml-96 lg:mr-96 transition shadow-none md:shadow border-b border-6" id="normalpost">
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
    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:text-red-900">    
      Delete
    </a>
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
		 

		 


		 
                <div class="flex w-full justify-start border-t border-gray-100 border-opacity-50">		 
				
									
                    <div class="flex mt-1 flex-row-reverse pt-2">
						<button x-data="{}" class="focus:outline-none"
		x-on:click="$dispatch('notice', {type: 'saved', text: '💾 Saved'})">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }"  @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
						   <svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
							</div>
	</button>
						<div x-data="{ items: ['Check out this postogon: https://postogon.com/home/lite/copytoclipboardexample'] }">
						<button class="focus:outline-none"
		x-on:click="$dispatch('notice', {type: 'saved', text: '⌨️ Copied to clipboard'})" @click="$clipboard(items)"
		> 
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }"  @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
						   <svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
							</div>
	</button>
	</div>   


						    <a onclick="btnDownload('<?php echo $postid;?>')"  x-data="{}" class="focus:outline-none"
		x-on:click="$dispatch('notice', {type: 'download', text: '📥 Downloading...'})">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
		<svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
								</div>
                            </svg>
		
	</a>

						
                    </div>

				

                    <div class="flex justify-end w-full mt-1  pl-5 px-2 py-2 ">

                                <!-- the like svg -->
                                <div  x-data="{
  state: 'Unliked',
  usedKeyboard: false,
  async updateState(to) {
      this.state = 'Saving'
      await new Promise(resolve => setTimeout(resolve, 1000))
      this.state = to
  }
}"
x-on:click="$dispatch('notice', {type: 'like', text: '🤍 Updating'})"
:class="{
  'like unliked': state === 'Unliked',
  'like saving': state === 'Saving',
  'like liked': state === 'Liked',
  'focus:outline-none': !usedKeyboard
}"
@click="updateState(state === 'Unliked' ? 'Liked' : 'Unliked')"  @keydown.window.tab="usedKeyboard = true">
    
  <span class="like-icon like-icon-state" aria-label="state" x-text="state" aria-live="polite">Unliked</span>
  
                                </div>
                    <span class="text-gray-400 ml-2">
                        156
                    </span>

							</div>
             
	

				

					



					
					</div>
		 
      </div>
	      </div>  
