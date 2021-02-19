<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, viewport-fit=cover, minimal-ui">
      <title>Home - Postogon</title>
      <link
         href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
         rel="stylesheet"
         />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>		 
      <script src="scripts/main.js"></script>
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
      <link href="build/css/tailwind.css" rel="stylesheet"/>
      <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
      <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script>
	  <style>
@supports(padding: max(0px)) {
    .post {
        padding-left: max(12px, env(safe-area-inset-left));
        padding-right: max(12px, env(safe-area-inset-right));
    }
}

:root {
  --header-height: 65px;
  --footer-height: 3.5rem;
}

header {
  height: 65px;
  height: var(--header-height, 65px);
  position: sticky;
  top: 0;
}

footer {
  position: sticky;
  overflow-y: scroll;
  bottom: 0;
  height: 45px;
  height: --footer-height: 3.5rem;  
  
}

main {
}
	  </style>
   </head>

<script>
 let root = document.documentElement;

 function updateRealViewportDimensions() {
   console.log(`1vh = ${window.innerHeight / 100}px`)
   root.style.setProperty('--real-vh', (window.innerHeight / 100) + "px");
 }</script>
<script>
updateRealViewportDimensions()
 const vhChangeEventTypes = [
   "scroll",
   "resize",
   "fullscreenchange",
   "fullscreenerror",
   "touchcancel",
   "touchend",
   "touchmove",
   "touchstart",
   "mozbrowserscroll",
   "mozbrowserscrollareachanged",
   "mozbrowserscrollviewchange",
   "mozbrowserresize",
   "MozScrolledAreaChanged",
   "mozbrowserresize",
   "orientationchange"
 ]
 vhChangeEventTypes.forEach(function(type) {
   window.addEventListener(type, event => updateRealViewportDimensions());
 })
</script> 
   
   <body>
   <div class="flex flex-col">
      <header x-data="{ open: false }"  class="z-10 text-center justify-center" style="touch-action: none;">
         <div class="bg-white">
            <div class="flex justify-between flex-shrink-0 px-6 py-4 border-b border-gray-300">
               <h1 class="px-6 text-xl font-semibold">Hi, Profile</h1>
               <button @click="open = !open" :aria-expanded="open ? 'true' : 'false'" :class="{'font-semibold': open, 'active': open}" class="p-1 px-2 font-semibold text-white transition duration-200 bg-red-500 rounded-md cursor-pointer focus:outline-none" aria-expanded="false">
                  New post
                  <svg :class="{ 'rotate-180': open }" class="inline-block w-4 h-4 ml-1 transition-transform transform" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
               </button>
            </div>
         </div>

	  
<div x-show="open" x-transition:enter="transition ease-in duration-100" x-transition:enter-start="opacity-0 transform translate-y-0" x-transition:enter-end="opacity-100 transform -translate-y-3" x-transition:leave="transition ease-in-out duration-100" x-transition:leave-end="opacity-0 transform -translate-y-3" class="">   
	  <div x-data="{ count: 0 } " x-init="count = $refs.countme.value.length" class="px-4 py-4 transition bg-white border-b">
         <div class="flex flex-col">
            <div class="flex">
               <div class="my-auto">
                  <div class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                     <div class="my-1 select-none">?</div>
                  </div>
               </div>
               <textarea id="text" class="w-full text-lg rounded-md h-6  dark:bg-dark transition p-2 bg-white  resize-none dark:text-light focus:outline-none  focus:ring-opacity-10 char-limiter" maxlength="280" placeholder="What's Poppin'?" rows="3" spellcheck="true" x-on:keyup="count = $refs.countme.value.length" x-ref="countme" style="height:44px;overflow-y:hidden;"></textarea>
            </div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
    $('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
    $("#ready").hide();

    $('#text').on('input propertychange', function () {
        if ($(this).val() !== "") {
            $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
            $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-100 hover:text-primary hover:bg-primary dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
        }
        else {
            $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-100 hover:text-primary hover:bg-primary dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
            $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
        }
    });
</script>
            <div class="flex m-2 text-gray-500 icons ml-14">
               <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <svg class="p-1 mr-2 transition-colors duration-200 rounded-full cursor-pointer text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
               </svg>
               <div class="ml-auto text-xs font-semibold text-gray-400 count"><span x-html="count">0</span> / <span x-html="$refs.countme.maxLength">280</span></div>
            </div>
            <div class="flex flex-row-reverse">
               <div id="submitpost" class="p-1 px-4 font-semibold text-white transition bg-red-500 rounded-md select-none focus:outline-none">Post</div>
            </div>
         </div>
      </div>
	  </div>
   </header>	  
	  
	  
	 

	  <main class="flex-1 post" style="-webkit-overflow-scrolling: touch">

	<?php include('post.php');?>
	<?php include('post.php');?>
	<?php include('post.php');?>	
	<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>		<?php include('post.php');?>	
		</main>

	  
	  
	  
	  
	  
	  
	  
	  
	  <footer class="bg-white inset-x-0 bottom-0 text-center flex lg:hidden" style="touch-action: none;">

		
<a href="." class="flex flex-col flex-grow items-center justify-center
			overflow-hidden whitespace-no-wrap text-sm transition-colors
			duration-100 ease-in-out hover:bg-gray-200 focus:text-orange-500">

			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<circle cx="12" cy="12" r="3"></circle>
				<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83
					2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65
					0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0
					0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2
					2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0
					0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0
					4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2
					0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0
					1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1
					1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0
					0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0
					1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0
					0-1.51 1z"></path>
			</svg>

<a href="." class="flex flex-col flex-grow items-center justify-center
			overflow-hidden whitespace-no-wrap text-sm transition-colors
			duration-100 ease-in-out hover:bg-gray-200 text-orange-500">

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
	<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
	<polyline points="9 22 9 12 15 12 15 22"></polyline>
</svg>

			<span class="text-sm capitalize">home</span>
		</a>

			<span class="hidden text-sm capitalize">settings</span>
		</a>

<a href="." class="flex flex-col flex-grow items-center justify-center
			overflow-hidden whitespace-no-wrap text-sm transition-colors
			duration-100 ease-in-out hover:bg-gray-200 focus:text-orange-500">

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c3.032 0 5.5 2.467 5.5 5.5 0 1.458-.483 3.196-3.248 5.59 4.111 1.961 6.602 5.253 7.482 8.909h-19.486c.955-4.188 4.005-7.399 7.519-8.889-1.601-1.287-3.267-3.323-3.267-5.61 0-3.033 2.468-5.5 5.5-5.5zm0-2c-4.142 0-7.5 3.357-7.5 7.5 0 2.012.797 3.834 2.086 5.182-5.03 3.009-6.586 8.501-6.586 11.318h24c0-2.791-1.657-8.28-6.59-11.314 1.292-1.348 2.09-3.172 2.09-5.186 0-4.143-3.358-7.5-7.5-7.5z"/></svg>

			<span class="hidden text-sm capitalize">settings</span>
		</a>
		
	  </footer>

	  </div>	  
	  
   </body>
   
   <script>
    $('textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
    $("#ready").hide();

    $('#text').on('input propertychange', function () {
        if ($(this).val() !== "") {
            $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
            $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-100 hover:text-primary hover:bg-primary dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
        }
        else {
            $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200l text-primary-lighter bg-primary-100 hover:text-primary hover:bg-primary dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
            $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200l text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-darker focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker");
        }
    });
</script>
</html>