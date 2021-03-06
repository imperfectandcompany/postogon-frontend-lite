	<div id="<?php echo $postid;?>" style="overflow-hidden h-auto">
	<div class="bg-white rounded p-2 mb-2 shadow-sm  md:px-4 md:py-4 hidden lg:ml-44 lg:mr-44 xl:ml-96 xl:mr-96 transition  border-6" id="normalpost">
         <div class="flex" >
		 <div class="relative" x-data="{ open: false }">

			<?php 
			if(!empty($avatar)){
				echo "<img src='../assets/img/avatars/{$avatar}.png'";
			} else {
			echo "<div";
			}?>
			
				class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600"
			@click="open = !open" @click.away="open = false" :class="{'border-red-400 bg-red-200 text-red-400 hover:bg-red-300 transform transition duration-300 ': open}"
			x-transition:enter-end="transform opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="transform opacity-100 scale-100"
			>
               
			<?php 
			if(!empty($avatar)){
				echo '</img>';
			} else {
			echo "<div class='my-1 select-none'>?</div> </div>";
			}?>
			<div class="absolute mt-6 ml-4 shadow-lg z-10 inset-y-1 text-center" x-show="open" x-transition:enter="transition duration-200 ease-in-out transform" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all transform ease-in duration-300" x-transition:leave-start="translate-y-0 opacity-100 scale-100" x-transition:leave-end="translate-y-full opacity-0 scale-95" style="display: none;">
	  <div class='bg-white shadow rounded'>           
		   <div class='mr-2 ml-2'>
                <p class='text-blue-600 '>@<?php echo $username;?></p>
                <p class='text-gray-400 text-xs	mb-3'><?php echo $bio;?></p>                


					
	  <div class='flex items-center  mt-4'>

            <div class='mx-2'>
                <p class='text-purple-900 font-bold'><?php echo $postcount;?></p>
                <p class='text-purple-300'>Posts</p>                
            </div>
            <div class='mx-2'>
                <p class='text-purple-900 font-bold'><?php echo $followers;?></p>
                <p class='text-purple-300'>Followers</p>                
            </div>
            <div class='mx-2'>
                <p class='text-purple-900 font-bold'><?php echo $activity;?>%</p>
                <p class='text-purple-300'>Activity</p>                
            </div>
            <div class='mx-4'>
                <a href="./profile/<?php echo $uid;?>/" class="bg-green-400 text-green-100 px-4 py-1 rounded focus:outline-none">Profile
				</a>              
            </div>
        </div>
		            </div>
		
		
		
		
		</div>
        </div>
		
		</div>
			

			
            <div>
                  <p class="mr-1 font-bold cursor-pointer hover:underline"><?php echo $name;?></p>
               <div class="flex items-center transition duration-500 transform hover:-translate-y-1">

               </div>
               <div class="flex items-center mt-1 text-xs text-gray-600">
                  <p><?php echo $postDate;?></p>
                  <p class="ml-1 mr-1">•</p>
                  <p><?php echo $postTime;?></p>
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
    <span x-text="isCollapsed ? originalContent : content"><?php echo $post;?></span>
    <button class="text-blue-600 hover:text-blue-400 focus:text-blue-500 transition focus:outline-none"
      @click="isCollapsed = !isCollapsed"
      x-show="originalContent.length > maxLength"
      x-text="isCollapsed ? 'Show less' : 'Show more'"
    ></button>
  </p>
		 </div>
		 
		 	<div class="flex flex-row">
			<span class="absolute animate-ping rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
			<span class="absolute rounded-full h-2 w-2 mt-1 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
			</div>
			
            <div class="flex flex-row-reverse">
               <p class="text-xs text-gray-400 transition hover:text-gray-500 mb-4 mr-5"><?php echo $bio;?></p>
            </div>
		 

		 


		 
                <div class="flex w-full justify-start border-t border-gray-100 border-opacity-50">		 
				
									
                    <div class="flex flex-row-reverse pt-2">


						    <a x-data="{}" class="focus:outline-none"
		x-on:click="$dispatch('notice', {type: 'saved', text: '💾 Saved'})">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
						   <svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
				</div>
	</a>



		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }"  @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
</svg>
							</div>

                       

						  <?php if($feed === 0){ include('dlbutton.php'); } else { echo "<div class='transition animate-bounce  focus:opacity-50 focus:text-blue-500 px-2 py-2 focus:outline-none  select-none'>🔒</div>"; }?> 

					
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
                        <?php echo $postLikes; ?>
                    </span>

							</div>
             
	

				

					



					
					</div>
      </div>
	  </div>

