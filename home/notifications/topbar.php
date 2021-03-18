      <header x-data="{ open: false }" :class="{'headeropen': open}" id="header" class="z-10 text-center justify-center post" style="touch-action: none;">
         <div class="bg-white">
            <div class="flex justify-end flex-shrink-0 px-6 py-4 border-b border-gray-300">
			<div class="flex mr-auto">
               <a href="../"><img class="h-8 w-8" style="filter:brightness(0.1)" src="../../assets/logo.svg" alt="postogon logo"/></a>
			   <a href="./"><h1 class="px-5 text-xl font-semibold cursor-pointer">Notifications</h1></a>
			   </div>
			   <div class="flex ">
               <button @click="open = !open" :aria-expanded="open ? 'true' : 'false'" :class="{'font-semibold': open, 'active': open}" class="p-1 px-2 font-semibold text-white transition duration-200 bg-red-500 rounded-md cursor-pointer focus:outline-none" aria-expanded="false">
                  New post
                  <svg :class="{ 'rotate-180': open }" class="inline-block w-4 h-4 ml-1 transition-transform transform" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                     <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
               </button>

			   </div>
            </div>
         </div>
 
                       
          
			


 			  
	  
<div  x-show="open" @click.away="open = false" :class="{'invisible': closed}"  x-transition:enter="transition ease-in duration-100" x-transition:enter-start="opacity-0 transform translate-y-0" x-transition:enter-end="opacity-100 transform -translate-y-3" x-transition:leave="transition ease-in-out duration-100" x-transition:leave-end="opacity-0 transform -translate-y-3" class="invisible">   
	  <div x-data="{ count: 0 } " x-init="count = $refs.countme.value.length" class="px-4 py-4 transition bg-white border-b">
         <div class="flex flex-col">
		 <form>
            <div class="flex">
               <div class="my-auto">
                  <div class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                     <div class="my-1 select-none">?</div>
                  </div>
               </div>
               <textarea id="text" name="post" class="w-full text-lg rounded-md h-6  dark:bg-dark transition p-2 bg-white  resize-none dark:text-light focus:outline-none  focus:ring-opacity-10 char-limiter" maxlength="280" placeholder="What's Poppin'." rows="3" spellcheck="true" x-on:keyup="count = $refs.countme.value.length" x-ref="countme" style="height:44px;overflow-y:hidden;"></textarea>
            </div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
            <div class="flex m-2 text-gray-500 icons ml-14">
			

			   

      
<!-- image preview component -->
			   <script>
function imageViewer() {
  return {
    imageUrl: '',

    fileChosen(event) {
      this.fileToDataUrl(event, src => this.imageUrl = src)
    },	

    fileToDataUrl(event, callback) {
      if (! event.target.files.length) return

      let file = event.target.files[0],
          reader = new FileReader()

      reader.readAsDataURL(file)
      reader.onload = e => callback(e.target.result)
    },
  }
}
			   </script>
				
			   
<div class="flex" x-data="imageViewer()">
    <!-- Image file selector -->

    <input name="photo" id="fileInput" accept="image/*" class="hidden  h-8 w-8 " type="file"  @change="fileChosen">

	                                         <label  
                        for="fileInput"
                        type="button"
						class="transition duration-200 focus:outline-none"
                      >
	               <svg fill="none" stroke="rgba(107, 114, 128)" class="rounded-full hover:bg-gray-200 p-1 h-8 w-8 transition duration-200 cursor-pointer focus:outline-none" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                  <path d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
                      </label>
					                     
	</input>


	
    <!-- Show the image -->
    <template x-if="imageUrl">
	
		<div class=" w-auto mb-2 ml-3 border rounded-lg relative bg-gray-100 mb-4 shadow-inset ">
      <img :src="imageUrl" 
           class="object-cover w-full injectable" 
           style="width: 100px; height: 100px;"
      >
	  	<div @click="imageUrl = ''" class="shadow cursor-pointer absolute top-0 right-0 p-2 mr-2 mt-2 rounded-full bg-gray-600 text-gray-100 transition hover:text-gray-500 hover:bg-gray-800 ">
											<svg class="h-6 w-6 transition " fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											  </svg>								  
										</div>
										</img>
										</div>
    </template>


</div> 
			
			   
			   
			   			   

			   

					
					
					
			   
               <div class="ml-auto text-xs font-semibold text-gray-400 count"><span x-html="count">0</span> / <span x-html="$refs.countme.maxLength">280</span></div>
            </div>
            <div class="flex flex-row-reverse">
               <button id="submitpost" class="p-1 px-4 font-semibold text-white transition bg-red-500 rounded-md select-none cursor-not-allowed focus:outline-none" disabled>Post</button>   
			</div>
			</form>
         </div>
      </div>
	  </div>
   </header>