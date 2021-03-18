      <div class="bg-white px-4 py-4 m-0 lg:ml-96 lg:mr-96 transition shadow-none md:shadow border-b border-6 " id="normalpost">

<body class="bg-gray-100">

<!-- Profile Card Padding and Responsive Layout Begin -->
<div class="p-6 pt-12">
<div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
  <div class="md:flex">
  

<!--Notifications Drop Here-->

<div class="flex justify-end">

    <div x-data="{ dropdownOpen: true }" class="p-2">
        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
            </svg>
        </button>

        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div x-show="dropdownOpen" class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
            <div class="py-2">
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-blue-500" href="#">Test with TDD</span> artical . 1h
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                    </p>
                </a>
            </div>
            <a href="../notifications/index.php" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>
        </div>
    </div>
	
	</div>
<!-- Notifications Drop Button End -->

  
    <div class="md:flex-shrink-0">
      <img class="h-32 w-32 m-3 mx-auto rounded-full bg-gray-300 p-1 md:w-32" src="../../assets/img/avatars/profilepic2.png" alt="profilepicture">
    </div>
	
    <div class="p-2">
      <div class="uppercase tracking-wide text-lg font-bold text-center">Sammy Jackson</div>
      <p class="p-1 text-center text-gray-600 tx-sm">Engineering 2022</p>
      <p class="p-2 text-gray-500">Perfection is achieved, not when there is nothing more to add,
	  but when there is nothing left to take away.</p>
			
			
			<div class="bg-gray-100 rounded-lg m-2">
			
			<div class="flex flex-row justify-evenly font-medium text-white bg-gray-800 p-1 rounded-lg">
			<div> Contacts</div>
			<div> Friends</div>
			<div> Followers</div>
			</div>
			
			<div class="flex flex-row justify-evenly font-bold p-1 text-lg">
			<div> 65</div>
			<div> 70</div>
			<div> 102</div>
			</div>
			
			</div>
			
			<div class="flex justify-center p-2">
			<button class="bg-gray-800 rounded-lg p-2 text-white font-bold" type="button">Edit Profile</button>
			</div>
		
			</div>
	
	
		</div>
  
  	
	
	</div>
</div>

<!-- Profile Card End -->

<!-- Profile posts, gallery, circles, and likes -->
<div class="bg-white p-2">

<div class ="flex justify-evenly pb-2">
	<button class="bg-gray-700 text-white font-bold rounded-lg p-1" type="button">Posts</button>
	<button class="bg-gray-100 font-bold rounded-lg p-1" type="button">Gallery</button>
	<button class="bg-gray-100 font-bold rounded-lg p-1" type="button">Circles</button>
	<button class="bg-gray-100 font-bold rounded-lg p-1" type="button">Likes</button>


</div>

<hr>


		<div class="bg-white rounded-lg shadow-lg pb-2 p-4">

			<div class="flex">
				<img class="h-20 w-20 m-3 rounded-full bg-gray-300 p-0.5 md:w-32" src="../../assets/img/avatars/profilepic2.png">

					<div class="flex flex-col">

					<div class="flex">
					<div class="font-bold p-1">Sammy Jackson</div>
					<div class="text-sm text-gray-500 p-1.5"> 5:23pm </div>
					
				
					</div>
					
						
				

					<div class="text-xs text-gray-500 px-1">Engineering 2022</div>

				

					<div class="p-2 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
			
					</div> 
					
					

		</div>
		
			
		
		
		<!-- Like, Comment, Repost, Share -->
		<div class ="flex flex-row justify-evenly text-gray-800">
		
					<div class="">
					<button id="like" onclick="red()" class = "h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
</svg>
					</button>
					
					51
					</div>
					
					
					<div>
					<button id="comment" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>
					</button>
					
					6
					</div>
					
					
					<button id="refresh" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
</svg>
					</button>
					
					<button id="share" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
</svg>
					</button>
					
					
					
					</div>
		
	</div>
		
		<hr>
		
			<div class="bg-white rounded-lg shadow-lg p-4">


			<div class="flex">
				<img class="h-20 w-20 m-3 rounded-full bg-gray-300 p-0.5 md:w-32" src="../../assets/img/avatars/profilepic2.png">

					<div class="flex flex-col">

					<div class="flex">
					<div class="font-bold p-1">Sammy Jackson</div>
					<div class="text-sm text-gray-500 p-1.5"> Yesterday </div>
					</div>

					<div class="text-xs text-gray-500 px-1">Engineering 2022</div>

					<div class="p-2 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

					</div> 
			</div>
			
			<div class ="flex flex-row justify-evenly text-gray-800">
		
					<div class="">
					<button id="like" onclick="red()" class = "h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
</svg>
					</button>
					
					22
					</div>
					
					
					<div>
					<button id="comment" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>
					</button>
					
					2
					</div>
					
					
					<button id="refresh" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
</svg>
					</button>
					
					<button id="share" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
</svg>
					</button>
					
					
					
					</div>


		</div>
		
		<hr>
		
		<div class="bg-white rounded-lg shadow-lg p-4">


			<div class="flex">
				<img class="h-20 w-20 m-3 rounded-full bg-gray-300 p-0.5 md:w-32" src="../../assets/img/avatars/profilepic2.png">

					<div class="flex flex-col">

					<div class="flex">
					<div class="font-bold p-1">Sammy Jackson</div>
					<div class="text-sm text-gray-500 p-1.5"> 2 days ago </div>
					</div>

					<div class="text-xs text-gray-500 px-1">Engineering 2022</div>

					<div class="p-2 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

					</div> 
			</div>


<div class ="flex flex-row justify-evenly text-gray-800">
		
					<div class="">
					<button id="like" onclick="red()" class = "h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
</svg>
					</button>
					
					10
					</div>
					
					
					<div>
					<button id="comment" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>
					</button>
					
					2
					</div>
					
					
					<button id="refresh" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
</svg>
					</button>
					
					<button id="share" class="h-5 w-5">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
</svg>
					</button>
					
					
					
					</div>

		</div>
<!-- Profile Posts, Gallery, Circles, Likes End -->

	
	  
	  
	  
	 