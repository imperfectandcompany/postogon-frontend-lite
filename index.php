<?php
function post($amt)
{
    $i = 0;

    while ($i < $amt) {
        include("skeleton.php");
        $i++;
    }

    $i = 0;

    while ($i < $amt) {
        include("post.php");
        $i++;
    }

}
?>
<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover, minimal-ui"/>
      <title>Home - Postogon</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">	  
      <link
         href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
         rel="stylesheet"
         />
<script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@1.x.x/dist/alpine-clipboard.js"></script>		 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>		 
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
      <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script>
	  <style>
@supports(padding: max(0px)) {
    .post {
        padding-left: max(12px, env(safe-area-inset-left));
        padding-right: max(12px, env(safe-area-inset-right));
		height: calc(100% + (var(--safe-area-inset-top) + var(--safe-area-inset-bottom)));

    }
}

:root {
  --header-height: 65px;
  --headeropen-height: 215px;  
  --footer-height: 3.5rem;
}

header {
  height: 65px;
  height: var(--header-height, 65px);
  position: sticky;
  transition: top 0.3s ease-in-out;  
  top: 0;
}

.headeropen {
  height: 215px;
  height: var(--headeropen-height, 215px);
}

footer {
  position: fixed;
  overflow-y: scroll;
  bottom: 0;
  height: 3.5rem;
  height: var(--header-height, 3.5rem);
}

main {
  margin-bottom: 3.5rem;
  margin-bottom: calc(3.5rem);
  margin-bottom: calc(var(--footer-height, 3.5rem));
}

.disabledbltap {
  touch-action: manipulation !important;
}

.like {
	display: inline-block;
	width: 2rem;
	height: 2rem;
	border-radius: 50%;
	background: #FFF;
	position: relative;
	cursor: pointer;
	transition: background-color 0.25s ease;
	overflow: hidden;
}

.like:hover {
	background: rgba(229, 231, 235, var(--tw-bg-opacity));
	transition: background-color 0.25s ease;
}

.liked .like-icon-state {
	background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewbox='0 0 100 100'><path fill='%23de3618' d='M50,88.87 C76.67,70.46 90,53.9 90,39.17 C90,17.08 63.12,3.84 50,27.63 C38.875,3.85 10,17.08 10,39.17 C10,53.9 23.33,70.46 50,88.87 Z'/></svg>");
}

.unliked .like-icon-state {
	background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewbox='0 0 100 100'><path fill='none' stroke='%23666' stroke-width='5' d='M50,88.87 C76.67,70.46 90,53.9 90,39.17 C90,17.08 63.12,3.84 50,27.63 C38.875,3.85 10,17.08 10,39.17 C10,53.9 23.33,70.46 50,88.87 Z'/></svg>");
}
	
.like span {
	text-indent: -1000px;
	fone-size: 1px;
}

.like-icon {
	background-size: contain;
	position: absolute;
	background-repeat: no-repeat;
	background-position: 50% 50%;
	top: 15%;
	right: 15%;
	bottom: 15%;
	left: 15%;
}

.liked .like-icon-state {
	transform: scale(0);
}

.liked .like-icon-state {
	opacity: 0;
	animation: 1.2s like-animation both cubic-bezier(0.45, 0.05, 0.55, 0.95);
}

@keyframes like-animation {
	0% {
		transform: scale(0);
	}

	15% {
		transform: scale(1.25);
	}

	32% {
		transform: scale(0.95);
	}

	50% {
		transform: scale(1);
		opacity: 1;
	}

	to {
		transform: scale(1);
		opacity: 1;
	}
}


.unliked .like-icon-state {
	opacity: 0;
	animation: 1.2s unlike-animation both cubic-bezier(0.45, 0.05, 0.55, 0.95);
}

@keyframes unlike-animation {
	0% {
		transform: scale(0);
	}

	15% {
		transform: scale(1.1);
	}

	30% {
		transform: scale(0.98);
	}

	45% {
		transform: scale(1);
		opacity: 1;
	}

	to {
		transform: scale(1);
		opacity: 1;
	}
}


.liked {
	background: #FFF;
	animation: 1.2s liked-bg-animation both;
}

@keyframes liked-bg-animation {
	0% {
		transform: scale(0);
	}

	15% {
		transform: scale(1.1);
	}

	30% {
		transform: scale(0.95);
	}

	50% {
		transform: scale(1);
		opacity: 1;
	}

	to {
		transform: scale(1);
		opacity: 1;
	}
}


.unliked {
	animation: 1.2s unliked-bg-animation both;
}

@keyframes unliked-bg-animation {
	0% {
		transform: scale(0);
	}

	10% {
		transform: scale(0.7);
	}

	30% {
		transform: scale(0.95);
	}

	50% {
		transform: scale(1);
		opacity: 1;
	}

	to {
		transform: scale(1);
		opacity: 1;
	}
}

.like::before {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	border-radius: 50%;
	border: 1px solid rgba(255, 255, 255, 0.75);
	transform: scale(0);
}

.liked::before {
	animation: 1.2s bg-ring-animation both;
}

@keyframes bg-ring-animation {
	0% {
		transform: scale(0);
		opacity: 0;
	}

	10% {
		transform: scale(1.5);
		opacity: 0.25;
	}

	15% {
		transform: scale(2);
		opacity: 0.15;
	}

	45% {
		transform: scale(3.25);
		opacity: 0;
	}

	to {
		transform: scale(1);
		opacity: 0;
	}
}

.saving::after {
	content: '';
	box-sizing: border-box;
	position: absolute;
	top: 20%;
	left: 20%;
	width: 60%;
	height: 60%;
	border: 0.15em solid rgba(100, 100, 100, 0.5);
	border-radius: 50%;
	border-right-color: transparent;
	border-top-color: transparent;
	animation: spin-animation 400ms infinite linear;
}

@keyframes spin-animation {
	from {
		transform: rotate(0deg);
	}

	to {
		transform: rotate(360deg);
	}
}

[x-cloak] {
    display: none !important;
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
<script>
var mobile = window.matchMedia( "(max-width: 640px)" );
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";	
  } else if (document.getElementById("header").classList.contains('headeropen') && mobile.matches){
    document.getElementById("header").style.top = "-215px";
  } else if (document.getElementById("header").classList.contains('headeropen')){
    document.getElementById("header").style.top = "0px";
  } else {
	      document.getElementById("header").style.top = "-65px";

  }
  prevScrollpos = currentScrollPos;
}
</script>

   
   <body>
   <div class="flex flex-col  bg-opacity-50">
      <header x-data="{ open: false }" :class="{'headeropen': open}" id="header" class="z-10 text-center justify-center" style="touch-action: none;">
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

	  
<div  x-show="open" @click.away="open = false" :class="{'invisible': closed}"  x-transition:enter="transition ease-in duration-100" x-transition:enter-start="opacity-0 transform translate-y-0" x-transition:enter-end="opacity-100 transform -translate-y-3" x-transition:leave="transition ease-in-out duration-100" x-transition:leave-end="opacity-0 transform -translate-y-3" class="post invisible">   
	  <div x-data="{ count: 0 } " x-init="count = $refs.countme.value.length" class="px-4 py-4 transition bg-white border-b">
         <div class="flex flex-col">
            <div class="flex">
               <div class="my-auto">
                  <div class="w-10 h-10 mr-3 font-bold text-center text-white bg-gray-700 bg-center bg-cover border-4 border-gray-500 rounded-full cursor-pointer hover:bg-gray-600" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                     <div class="my-1 select-none">?</div>
                  </div>
               </div>
               <textarea id="text" class="w-full text-lg rounded-md h-6  dark:bg-dark transition p-2 bg-white  resize-none dark:text-light focus:outline-none  focus:ring-opacity-10 char-limiter" maxlength="280" placeholder="What's Poppin'." rows="3" spellcheck="true" x-on:keyup="count = $refs.countme.value.length" x-ref="countme" style="height:44px;overflow-y:hidden;"></textarea>
            </div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
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


<!-- mobile button for more options -->
<div class="fixed flex flex-col-reverse w-12 h-12 bg-white z-50 post rounded-full shadow cursor-pointer right-4 bottom-44 p-1 transition-colors duration-200 text-primary-light bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-primary-lighter dark:hover:bg-primary-dark dark:text-light dark:bg-darker md:hidden focus:outline-none focus:ring ">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
            </svg>
                            
    </div>

<!-- main content goes here, in between the header and footer -->
	  <main class="flex-1 post disabledbltap" style="-webkit-overflow-scrolling:touch">
<!-- posts -->
<?php post(5);?>
<div
	x-data="noticesHandler()"
	class="fixed inset-0 flex flex-col-reverse left-4 bottom-16 items-start justify-start"
	@notice.window="add($event.detail)"
	style="pointer-events:none">
	<template x-for="notice of notices" :key="notice.id">
		<div
			x-show="visible.includes(notice)"
			x-transition:enter="transition ease-in duration-200"
			x-transition:enter-start="transform opacity-0 translate-y-2"
			x-transition:enter-end="transform opacity-100"
			x-transition:leave="transition ease-out duration-500"
			x-transition:leave-start="transform translate-x-0 opacity-100"
			x-transition:leave-end="transform translate-x-full opacity-0"
			@click="remove(notice.id)"
			class="rounded mb-4 mr-6 w-56 bg-white text-white h-16 flex items-center justify-center shadow-lg font-bold text-lg cursor-pointer"
			:class="{
				'bg-white text-black text-gray-900': notice.type === 'copy',
				'bg-white': notice.type === 'saved',
				'bg-blue-500 text-white': notice.type === 'download',
				'bg-red-500 text-white': notice.type === 'like',
			 }"
			style="pointer-events:all"
			x-text="notice.text">
		</div>
	</template>
</div>
	      <div class="text-center mt-10 mb-44">
        <button class="border border-gray-300 text-gray-400 px-4 py-2 rounded-full transition focus:outline-none animate-bounce hover:bg-gray-600 focus:opacity-0 hover:text-white">Show More</button>
      </div>
		</main>
<script>
function noticesHandler() {
	return {
		notices: [],
		visible: [],
		add(notice) {
			notice.id = Date.now()
			this.notices.push(notice)
			this.fire(notice.id)
		},
		fire(id) {
			this.visible.push(this.notices.find(notice => notice.id == id))
			const timeShown = 2000 * this.visible.length
			setTimeout(() => {
				this.remove(id)
			}, timeShown)
		},
		remove(id) {
			const notice = this.visible.find(notice => notice.id == id)
			const index = this.visible.indexOf(notice)
			this.visible.splice(index, 1)
		},
		
	};
}

</script>





	  <footer class="bg-white border-t border-gray-300 inset-x-0 bottom-0 text-center flex lg:hidden" style="touch-action: none;" id="footer">
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

<script>
    //define
    const delay = ms => new Promise(res => setTimeout(res, ms));


    window.addEventListener('load', (event) => {
        swap();
    });


    const swap = async () => {
        await delay(500);
        //puts all posts with id skeleton post into an array, one for each normal post
        var divs = document.querySelectorAll('#skeletonpost');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.add('hidden');
        }




        var divs = document.querySelectorAll('#preload');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.remove('invisible');
            divs[i].classList.add('hidden');
        }

        var divs = document.querySelectorAll('#normalpost');
        for (var i = 0; i < divs.length; i++) {
            //i is index of each, it loops until its empty
            divs[i].classList.remove('hidden');
        }

    };
</script>

</html>