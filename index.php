<!doctype html>
<html lang="en">
    <head>
        <title>Postogon - Enter or Join</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
	    <style>
		  .modal {
		    transition: opacity 0.25s ease;
		  }
		    body.modal-active {
			  overflow-x: hidden;
			  overflow-y: visible !important;
		  }
	    </style>
 
<body class="">





    <div class="container h-screen absolute ">



      <div class="relative max-w-md hidden float-right md:pt-8 pl-18 lg:block md:pr-36">
        <input class="form-control mr-sm-2 search-bar bg-purple-white shadow rounded border-0 p-3 inset-x-0 top-0 " type="search" placeholder="Search" aria-label="Search" required>
      </div>

	                          <div class="block lg:hidden text-2xl text-gray-800 tracking-wide ml-2 font-semibold"><a href="index.php"> 	  	  	              <object data="assets/logo.svg" class="inline-block md:hidden h-8" style="filter:brightness(0.1)"></object>
Postogon</a></div>
      <div class="md:mx-56 hidden lg:block md:ml-8 pt-10 md:pl-10 font-semibold text-6xl md:text-7xl"><a href="index.php"> Postogon</a></div>
      <br>

	              <object data="assets/logo.svg"	class="hidden md:block max-w-sm relative md:max-w-xs right-40" style="filter:brightness(0.1)"></object>
	  
      <br>
      <img src="./assets/img/index-guy.png" class="hidden lg:block relative lg:max-w-lg md:max-w-md bottom-80">
	  
      

    </div>
    <div class="container ml-auto mx-auto md:mr-24 relative p-12 lg:top-40 max-w-lg">
	                <input class="w-full block md:hidden h-16 px-3 rounded mb-8 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg" type="search" placeholder="Search...">
      <h1 class="font-semibold text-5xl pb-5 text-center md:text-left">Enter</h1>
<form>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="email">Email</label>
    <input class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" id="" placeholder="Email">
  </div>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="password">Password</label>
    <input class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="" placeholder="Password">
  </div>

  <div class="flex items-center justify-between mb-5">
    <a href="/home" class="bg-indigo-600 flex-initial justify-items-start hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
      Log In
    </a>
    <a class="inline-block align-baseline font-light text-sm text-indigo-600 hover:text-indigo-500" href="forgotpass.php">
      Forgot Password?
    </a>
  </div>
  <p class="text-center text-md font-light">Don't have an account? <button class="modal-open font-light text-md text-indigo-600">Get Started</button></p>
</form>  

      <div class="md:flex justify-between items-center pt-20 text-sm">
        <div class="text-center md:text-left py-3  mx-auto border-b md:border-b-0">
		<div class="text-gray-500 text-center md:mr-4">&copy; 2020 Postogon</div>
        </div>

        <div class="md:flex md:flex-row-reverse items-center">
          <div class="text-center mb-4 md:mb-0 md:flex">
            <div class="w-48 inline-block relative mb-4 mt-4 md:mt-0 md:mb-0 md:mr-4">
		  <a href="#" class="text-gray-500 mr-3">Jobs</a>
		  <a href="#" class="text-gray-500 mr-3">Legal</a>
		  <a href="#" class="text-gray-500 mr-3">Privacy</a>
            </div>
            <div>
            </div>
          </div>

        </div>
      </div>

</div>  
    
	
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
		<div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container w-11/12 md:max-w-md mx-auto rounded z-50 overflow-y-auto">
		
			<div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50"><svg class="fill-current text-white" xmlns="https://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path></svg><span class="text-sm">(Esc)</span></div>

			<div class="modal-content py-4 text-left px-6">
		
				
    <div class="inline-block container align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
              Register account
            </h3>
            <div class="mt-2">
                  <form class="pt-6 pb-2 my-2">
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="Email Address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="Password">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
          Register
        </button>
        <button type="button" class="modal-close mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
			  

				
			</div>

		</div>
		
    </div>
	
	
	  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
	
</body>









</html>