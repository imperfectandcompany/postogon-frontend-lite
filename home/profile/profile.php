<?php
   /*Call our notification handling*/ include("../frontend/sitenotif.php");
   ?>
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<nav class="bg-gray-100 shadow">
   <div class="md:max-w-5xl mx-auto flex justify-between items-center py-6">
      <a href="#" class="block uppercase flex item-center">
         <box-icon type="solid" name="rocket"></box-icon>
         <span class="inline-block text-sm font-bold ml-2"><span class="text-gray-700">Postogon</span></span> 
      </a>
      <div class="flex justify-between item-center">
         <?php if(User::isLoggedIn()): ?>
         <a href="#" class="block  text-gray-700 hover:text-blue-600 px-4"><?php echo $username; ?></a>
         <?php else: ?>
         <a href="#" class="block  text-gray-700 hover:text-blue-600 px-4">Login</a>					
         <?php endif; ?>	
      </div>
   </div>
</nav>
<main class="flex-1 bg-gray-100">
<div class="mt-6 bg-gray-100 overflow-hidden h-auto">
   <div class="bg-white rounded shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6">
            <div class="flex justify-between ml-5 mr-6  mb-6">
			<div class="flex ">
                     <!-- Avatar -->			   
                  <div class="flex ">
                     <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center border-4 border-gray-500 rounded-full cursor-pointer select-none hover:bg-gray-400">
                        <div class="my-1">?</div>
                     </div>
                  </div>
                     <!-- Profile Name -->
                  <div class="ml-4">	
<div class="flex mb-2 items-baseline">				  
                     <h1 class="text-xl font-bold"><?php echo $profile; ?></h1><h2 class="ml-1 text-xs text-gray-400 transition hover:text-gray-500 ">@<?php echo $profile; ?></h2>
					 </div>	
                     <!-- Username -->
					 <div class="flex flex-col items-start mr-1 md:mr-9 text-gray-600 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased">     <p class="text-xs text-gray-800 font-semibold transition hover:text-gray-700">Daiyaan Ijaz</p>					 
                     <p class="text-xs text-gray-500 transition hover:text-gray-600">Live life now, we can only learn from mistakes</p>
                     <a href="" class="text-xs text-blue-400 transition hover:text-blue-500">https://www.linkedin.com/in/daiyaanijaz/</a></div>	
				 
                  </div>
				  </div>
               <div class="flex flex-col items-baseline text-center">
                  <form action="../profile/<?php echo $profile;?>" method="post">
                     <button type="submit" name="follow" value="Follow" class="text-blue-700 font-bold focus:outline-none">
                     Follow
                     </button>
                  </form>
               </div>				  
            </div>
      <div class="flex rounded rounded-t-none bg-w-full  justify-start border-t border-gray-100 border-opacity-50">
         <div class="flex flex-row-reverse ">
            <button type="submit" class=" flex items-center focus:outline-none text-gray-400 hover:text-gray-900 justify-center px-4 py-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="#FFFFFF" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
				</svg>	
            </button>
			<!-- Message -->
            <button type="submit" class="
               flex items-center focus:outline-none text-gray-400 hover:text-gray-900 justify-center px-4 py-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="#FFFFFF" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
				</svg>	
            </button>			
            <button type="submit" class=" flex items-center focus:outline-none text-gray-400 hover:text-gray-900 justify-center px-4 py-2 ">
               <svg xmlns="https://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
               </svg>
            </button>
			
		
         </div>
         <div class="flex justify-end w-full">
            <span class="text-gray-400 text-center ml-2 px-4 py-2">
            156 Followers
			</span>
            <span class="text-gray-400 text-center ml-2 px-4 py-2">
            156 Following
			</span>			
         </div>
      </div>
              </div>
   

        <nav class="p-2 mb-2 shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6">
          <div class="flex">
            <a href="#" class="sub-nav-item px-3 py-2 rounded-md text-base font-medium leading-5  border-blue text-blue focus:outline-none transition duration-150 ease-in-out">Overview</a>
            <a href="#" class="sub-nav-item  ml-4 px-3 py-2 rounded-md text-base font-medium leading-5 text-gray-500 focus:outline-none">Media</a>
            <a href="#" class="sub-nav-item  ml-4 px-3 py-2 rounded-md text-base font-medium leading-5 text-gray-500 focus:outline-none ">Feed 1</a>			
            <a href="#" class="sub-nav-item  ml-4 px-3 py-2 rounded-md text-base font-medium leading-5 text-gray-500 focus:outline-none ">Feed 2</a>
          </div>
        </nav>

   
   
   
   
   
   
   
   <div id="postid_4" style="overflow-hidden h-auto">
      <div class="bg-white rounded p-2 mb-2 shadow-sm md:px-4 md:py-4 lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition border-6" id="normalpost">
         <div class="flex">
            <div class="relative" x-data="{ open: false }">
               <img src="../assets/img/avatars/avatar4.png" class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600" @click="open = !open" @click.away="open = false" :class="{'border-red-400 bg-red-200 text-red-400 hover:bg-red-300 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
               <div class="absolute mt-6 ml-4 shadow-lg z-10 inset-y-1 text-center" x-show="open" x-transition:enter="transition duration-200 ease-in-out transform" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all transform ease-in duration-300" x-transition:leave-start="translate-y-0 opacity-100 scale-100" x-transition:leave-end="translate-y-full opacity-0 scale-95" style="display: none;">
                  <div class="bg-white shadow rounded">
                     <div class="mr-2 ml-2">
                        <p class="text-blue-600 ">@itslenny</p>
                        <p class="text-gray-400 text-xs	mb-3">OSU Alumni - Mechanical Engineer - Music lover.</p>
                        <div class="flex items-center  mt-4">
                           <div class="mx-2">
                              <p class="text-purple-900 font-bold">289</p>
                              <p class="text-purple-300">Posts</p>
                           </div>
                           <div class="mx-2">
                              <p class="text-purple-900 font-bold">2.3K</p>
                              <p class="text-purple-300">Followers</p>
                           </div>
                           <div class="mx-2">
                              <p class="text-purple-900 font-bold">32%</p>
                              <p class="text-purple-300">Activity</p>
                           </div>
                           <div class="mx-4">
                              <a href="./profile/4/" class="bg-green-400 text-green-100 px-4 py-1 rounded focus:outline-none">Profile
                              </a>              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <p class="mr-1 font-bold cursor-pointer hover:underline">Lenny🪓</p>
               <div class="flex items-center transition duration-500 transform hover:-translate-y-1">
               </div>
               <div class="flex items-center mt-1 text-xs text-gray-600">
                  <p>5 March 2021</p>
                  <p class="ml-1 mr-1">•</p>
                  <p>11:31 am</p>
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
                     <div x-show.transition="open" x-on:click.away="open = false" class="absolute right-0 w-40 z-20 mt-2 py-2 bg-white border rounded shadow-xl" style="display: none;">
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Edit</a>
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Archive</a>
                        <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-100 hover:bg-opacity-30">Swap feeds</a>	 	  
                        <div class="py-2">
                           <hr>
                        </div>
                        <div class="flex  justify-center">
                           <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                              </svg>
                           </div>
                           <div x-data="{ items: ['Check out this postogon: https://postogon.com/home/lite/copytoclipboardexample'] }">
                              <button class="focus:outline-none" x-on:click="$dispatch('notice', {type: 'saved', text: '⌨️ Copied to clipboard'})" @click="$clipboard(items)">
                                 <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                                    <svg xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                    </svg>
                                 </div>
                              </button>
                           </div>
                           <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-4 mb-4">
            <p class="ml-5 mr-5 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased" x-data="{ isCollapsed: false, maxLength: 140, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)">
               <span x-text="isCollapsed ? originalContent : content">Your friend spontaneously sharing an idea with you and you desperately trying to resist dropping everything in the moment to lock yourself i</span>
               <button class="text-blue-600 hover:text-blue-400 focus:text-blue-500 transition focus:outline-none" @click="isCollapsed = !isCollapsed" x-show="originalContent.length > maxLength" x-text="isCollapsed ? 'Show less' : 'Show more'">Show more</button>
            </p>
         </div>
         <div class="flex flex-row">
            <span class="absolute animate-ping rounded-full h-2 w-2 mt-1 bg-red-500"></span>
            <span class="absolute rounded-full h-2 w-2 mt-1 bg-red-500"></span>
         </div>
         <div class="flex flex-row-reverse">
            <p class="text-xs text-gray-400 transition hover:text-gray-500 mb-4 mr-5">OSU Alumni - Mechanical Engineer - Music lover.</p>
         </div>
         <div class="flex w-full justify-start border-t border-gray-100 border-opacity-50">
            <div class="flex flex-row-reverse pt-2">
               <a x-data="{}" class="focus:outline-none" x-on:click="$dispatch('notice', {type: 'saved', text: '💾 Saved'})">
                  <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                     <svg xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                     </svg>
                  </div>
               </a>
               <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                  </svg>
               </div>
               <a onclick="btnDownload('postid_4')" x-data="{}" class="focus:outline-none" x-on:click="open = false,$dispatch('notice', {type: 'download', text: '📥 Downloading...'})">
                  <div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200 focus:text-blue-500 w-8 h-8 px-2 py-2 text-center rounded-full text-gray-400 cursor-pointer">
                     <svg xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                     </svg>
                  </div>
               </a>
            </div>
            <div class="flex justify-end w-full mt-1  pl-5 px-2 py-2 ">
               <!-- the like svg -->
               <div x-data="{
                  state: 'Unliked',
                  usedKeyboard: false,
                  async updateState(to) {
                  this.state = 'Saving'
                  await new Promise(resolve => setTimeout(resolve, 1000))
                  this.state = to
                  }
                  }" x-on:click="$dispatch('notice', {type: 'like', text: '🤍 Updating'})" :class="{
                  'like unliked': state === 'Unliked',
                  'like saving': state === 'Saving',
                  'like liked': state === 'Liked',
                  'focus:outline-none': !usedKeyboard
                  }" @click="updateState(state === 'Unliked' ? 'Liked' : 'Unliked')" @keydown.window.tab="usedKeyboard = true" class="like unliked focus:outline-none">
                  <span class="like-icon like-icon-state" aria-label="state" x-text="state" aria-live="polite">Unliked</span>
               </div>
               <span class="text-gray-400 ml-2">
               156                    </span>
            </div>
         </div>
      </div>
   </div>
</div>
</main>