<?php



function createpost()
{
    include_once("createpost.php");
}

function post($amt)
{
	
			include_once("classes/profile.class.php");
    $i = 0;

    while ($i < $amt) {
        include("skeleton.php");
        $i++;
    }

    $i = 0;

foreach($profiles as $profile){
		$name = $profiles[$i]->name;
		$post = $profiles[$i]->post;		
		$postlikes = $profiles[$i]->postlikes;
		$message = $profiles[$i]->message;
		$bio = $profiles[$i]->bio;
		$status = $profiles[$i]->status;
		$postcount = $profiles[$i]->postcount;
		$followers = $profiles[$i]->followers;
		$activity = $profiles[$i]->activity;
		$avatar = $profiles[$i]->avatar;
		$contacts = $profiles[$i]->contacts;
		$uid = $profiles[$i]->uid;
		$username = $profiles[$i]->username;
		$i++;		
}

    while ($i < $amt) {
		$postid = 'postid_'.$i.'';
        include("post.php");
        $i++;
    }

}
?>
<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover, minimal-ui" id="viewportMeta" />
      <title>Home - Postogon</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">	  
      <link
         href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
         rel="stylesheet"
         />
  <script src="../assets/scripts/svg-inject.min.js"></script>		 
  <!-- post download script -->
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@1.x.x/dist/alpine-clipboard.js"></script>		 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>		 
       <script src="../assets/scripts/pull-to-reload.js"></script>    
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
  --headeropen-height: 230px;  
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
  height: 230px;
  height: var(--headeropen-height, 230px);
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

.like {
	width: 1.5rem;
	height: 1.5rem;
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


body {
  touch-action: manipulation;
}

	  </style>
   <script>
            var ptr;

            document.addEventListener("DOMContentLoaded", function() {
                ptr = new PullToReload({ 
                    'callback-loading': function(){
                        setTimeout(function(){
                            ptr.loadingEnd();
                        }, 3000);
                    }
                });
                
            });

        </script>
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
   "touchaction",   
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
    document.getElementById("header").style.top = "0px";	
  } else if (document.getElementById("header").classList.contains('headeropen') && mobile.matches){
    document.getElementById("header").style.top = "-230px";
  } else if (document.getElementById("header").classList.contains('headeropen')){
    document.getElementById("header").style.top = "0px";
  } else {
	      document.getElementById("header").style.top = "-65px";

  }
  prevScrollpos = currentScrollPos;
}
</script>


   
   <body class="bg-white">
   <div class="flex flex-col" x-data="setup()" x-init="$refs.loading.classList.add('hidden');">

        <!-- Loading screen -->		 
        <div
                class="fixed inset-0 z-50 flex items-center w-full justify-center animate-pulse text-3xl font-bold bg-white"
                x-ref="loading"
        >
		
            <img
                    class="h-32 w-32 mx-auto injectable" 
                    style="filter:brightness(0.1)"
                    src="../assets/logo.svg"
                    alt="postogon logo"/>
            <div class="h-16 flex items-center mx-auto">Loading.....</div>
        </div>
<?php createpost(); ?>
   
<nav @click.away="isMobileSubMenuOpen = false" x-cloak aria-label="Secondary" :class="{'block': true}" class="block bg-white w-24 fixed flex-col-reverse z-50 flex items-center p-4 rounded-md shadow-lg bottom-64 left-0 md:hidden" x-show="isMobileSubMenuOpen" x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500" x-transition:enter-end="translate-y-0 opacity-100" x-transition:enter-start="translate-x-full opacity-0" x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500" x-transition:leave-end="-translate-y-full opacity-0" x-transition:leave-start="translate-y-0 opacity-100">
                        <div class="flex space-y-2 flex-col-reverse">
                            <!-- Notification button -->
                            <button @click="openNotificationsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })" class="p-2 bg-white transition duration-200 rounded-full focus:outline-none">
                                <span class="sr-only">Open notifications panel</span>
                                <svg aria-hidden="true" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </button>

                            <!-- Search button -->
                            <button @click="openSearchPanel(); $nextTick(() => { $refs.searchInput.focus(); setTimeout(() => {isMobileSubMenuOpen= false}, 100) })" class="p-2 bg-white transition duration-200 rounded-full focus:outline-none">
                                <span class="sr-only">Open search panel</span>
                                <svg aria-hidden="true" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </button>

                            <!-- Settings button -->
                            <button @click="openSettingsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })" class="p-2 bg-white transition duration-200 rounded-full focus:outline-none">
                                <span class="sr-only">Open settings panel</span>
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </button>
							

							
                        </div>
						                       <!-- Contacts avatar button -->
                        <div class="relative" x-data="{ open: false }">
                            <button :aria-expanded="open ? 'true' : 'false'" @click="open = !open" aria-haspopup="true" class="block p-2 transition-opacity duration-200 rounded-full focus:outline-none" type="button" aria-expanded="false">
                                <span class="sr-only">Contacts menu</span>
                                <img alt="Daiyaan Ijaz" class="w-10 h-10 rounded-full"  src="https://media-exp1.licdn.com/dms/image/C4E03AQHAR1PhrwJzmg/profile-displayphoto-shrink_100_100/0/1603263069216?e=1618444800&amp;v=beta&amp;t=dFbdkrNHu3aTTc8BqAeQUqN6GQYcyYqaQncAQR_053g" onload="SVGInject(this)">
                            </button>

                            <!-- Contacts dropdown menu -->
                            <div @click.away="open = false" aria-label="Contacts menu" aria-orientation="vertical" class="absolute z-50 left-4 w-48 py-2 top-12 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" x-show="open" x-transition:enter="transition-all transform ease-out" x-transition:enter-end="translate-y-0 opacity-100" x-transition:enter-start="translate-y-1/2 opacity-0" x-transition:leave="transition-all transform ease-in" x-transition:leave-end="translate-y-1/2 opacity-0" x-transition:leave-start="translate-y-0 opacity-100" style="display: none;">
                                <a class="block px-4 py-2 text-sm text-gray-700 transition hover:bg-gray-100" href="#" role="menuitem">
                                    Your Profile
                                </a>
                                <a class="block px-4 py-2 text-sm text-gray-700 transition hover:bg-gray-100" href="#" role="menuitem">
                                    Settings
                                </a>
                                <a class="block px-4 py-2 text-sm text-gray-700 transition hover:bg-gray-100" href="#" role="menuitem">
                                    Logout
                                </a>
                            </div>
                        </div>	
 
                    </nav>
   
<!-- mobile button for more options -->
        <button
                @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
                class="bg-white z-50" 
        >
            <span class="sr-only">Open sub menu</span>
			<span aria-hidden="true">		
<div class="fixed flex flex-col-reverse w-12 h-12 bg-white z-50 rounded-full shadow cursor-pointer right-6 bottom-44 p-1 transition   hover:text-gray-400 hover:bg-gray-600 md:hidden focus:outline-none focus:ring ">

			<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                <path d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
            </svg>
            </span>			
    </div>
</button>
	
	
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

<!-- main content goes here, in between the header and footer -->
	  <main class="flex-1 post" style="-webkit-overflow-scrolling:touch">
<script>
	document.addEventListener( 'DOMContentLoaded', function () {
var elms = document.getElementsByClassName( 'splide' );
for ( var i = 0, len = elms.length; i < len; i++ ) {
	new Splide( elms[ i ], {
	arrows: false,
} ).mount();
}
	} );

</script>

		
		
<div  class="mt-6">
<?php post(6);?>
</div>
<div
	x-data="noticesHandler()"
	class="fixed inset-0 flex flex-col-reverse left-4 bottom-16 z-20 items-start justify-start"
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
			x-transition:leave-end="transform -translate-x-full opacity-0"
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





	  <footer class="bg-white border-t border-gray-300 inset-x-0 bottom-0 text-center z-50 flex lg:hidden" id="footer">
<a href="." class="flex flex-col flex-grow items-center justify-center
			overflow-hidden whitespace-no-wrap text-sm transition-colors
			duration-100 ease-in-out hover:bg-gray-200 focus:text-orange-500">

			<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
	<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
	<polyline points="9 22 9 12 15 12 15 22"></polyline>
</svg>

			<span class="text-sm capitalize">home</span>
		</a>

			<span class="hidden text-sm capitalize">settings</span>
		</a>

<a href="./profile" class="flex flex-col flex-grow items-center justify-center
			overflow-hidden whitespace-no-wrap text-sm transition-colors
			duration-100 ease-in-out hover:bg-gray-200 focus:text-orange-500">

<svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c3.032 0 5.5 2.467 5.5 5.5 0 1.458-.483 3.196-3.248 5.59 4.111 1.961 6.602 5.253 7.482 8.909h-19.486c.955-4.188 4.005-7.399 7.519-8.889-1.601-1.287-3.267-3.323-3.267-5.61 0-3.033 2.468-5.5 5.5-5.5zm0-2c-4.142 0-7.5 3.357-7.5 7.5 0 2.012.797 3.834 2.086 5.182-5.03 3.009-6.586 8.501-6.586 11.318h24c0-2.791-1.657-8.28-6.59-11.314 1.292-1.348 2.09-3.172 2.09-5.186 0-4.143-3.358-7.5-7.5-7.5z"/></svg>

			<span class="hidden text-sm capitalize">settings</span>
		</a>
		
	  </footer>

	  </div>	  
	  





	  <script>
	  
var scrollPos;

function download(url, postid, scrollPos){
  var a = $("<a style='display:none'>")
  .attr("href", url)
  .attr("download", postid +".png")
  .appendTo("#"+postid);
  a[0].click();

  a.remove();

            window.scrollTo(0,scrollPos);


		  
}


//i couldn't figure out how to just capture the elements width, for now its set to save the windows screen. a suggestion for later would be to use iframe and capture that elements window.
function saveCapture(element, postid, scrollPos) {


	//fixes bug for screenshotting
	    window.scrollTo(0,0);

	
  html2canvas(element, {
	  useCORS: true,
	    backgroundColor: null,
		allowTaint: true,
        scrollX: -window.scrollX,
        scrollY: -window.scrollY,
        windowWidth: element.offsetWidth,
        windowHeight: document.documentElement.offsetHeight


	  }).then(function(canvas) {
        var ctx = canvas.getContext('2d');

        ctx.webkitImageSmoothingEnabled = false;
        ctx.mozImageSmoothingEnabled = false;
        ctx.imageSmoothingEnabled = false;

    download(canvas.toDataURL("image/png"), postid, scrollPos);
  })
}

function btnDownload(id){
var postid = id;
	//get current scroll pos
	scrollPos = document.body.scrollTop;
document.getElementById(postid);
var element = document.getElementById(postid);
saveCapture(element, postid, scrollPos)
}
</script>  
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
            $("#submitpost").removeClass("p-1 px-4 cursor-not-allowed font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200  focus:outline-none");
            $("#submitpost").addClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200  focus:outline-none");
			document.getElementById("submitpost").disabled = false;        
		}
        else {
            $("#submitpost").removeClass("p-1 px-4 font-semibold text-white transition transition-colors bg-red-500 rounded-md cursor-pointer btn duration-200 focus:outline-none");
            $("#submitpost").addClass("p-1 px-4 cursor-not-allowed font-semibold text-white transition transition-colors bg-red-500 rounded-md btn duration-200 focus:outline-none");
			document.getElementById("submitpost").disabled = true;        
		}
    });	
</script>

<script>


 const setup = () => {
       return {
            loading: true,
		isMobileSubMenuOpen: false,
		openMobileSubMenu() {
			this.isMobileSubMenuOpen = true
			this.$nextTick(() => {
				this.$refs.mobileSubMenu.focus()
			})
		},
	}
}
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
  <script>
    SVGInject(document.querySelectorAll("img.injectable"));
  </script>
  

  

</html>