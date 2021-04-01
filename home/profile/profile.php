<?php
   /*Call our notification handling*/ include("../frontend/sitenotif.php");
   ?>
	<main class="bg-white rounded shadow-sm">
         <div class="flex w-full">
               <!-- Avatar -->
			   <div class="flex w-5/6 justify-start">
					<div class="flex">
					<div class="flex flex-row">
					  <div class="w-10 h-10 font-bold text-center transition text-white bg-gray-700 bg-center border-4 border-gray-500 rounded-full cursor-pointer select-none hover:bg-gray-400">
						 <div class="my-1">?</div>
					  </div>
					  </div>
				  </div>
               <!-- Profile Name -->
			   <div class="flex ml-3">
				<div class="flex flex-col">
                  <div class="flex flex-row items-baseline">
                     <h1 class="text-xl font-bold flex"><?php echo $profile; ?></h1>
                     <h2 class="ml-1 text-xs text-gray-400 transition hover:text-gray-500">@<?php echo $profile; ?></h2>
                  </div>
                  <!-- Username -->
				  <div class="flex flex-col">
                  <div class="text-gray-600 text-sm antialiased break-words sm:subpixel-antialiased md:antialiased">
                     <p class="text-xs text-gray-800 font-semibold transition hover:text-gray-700">Daiyaan Ijaz</p>
                     <p class="text-xs text-gray-500 transition hover:text-gray-600">Live life now, we can only learn from mistakes</p>
                     <a href="" class="text-xs text-blue-400 transition hover:text-blue-500">https://www.linkedin.com/in/daiyaanijaz/</a>
                  </div>
				  </div>
				  </div>
				</div>
				</div>
               <!-- Follow -->
					<div class="flex w-1/6 justify-end">
					<div class="flex flex-row">
                  <form action="../profile/<?php echo $profile;?>" method="post">
                     <button type="submit" name="follow" value="Follow" class="text-blue-700 font-bold focus:outline-none">
                     Follow
                     </button>
                  </form>
				  </div>
				  </div>			   
         </div>
</main>