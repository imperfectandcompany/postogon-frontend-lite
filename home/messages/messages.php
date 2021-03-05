			<div class="overflow-y-auto bg-white hidden" id="normalpost">
            <div class="flex m-3 bg-white-300 p-2 rounded-lg shadow-md">
					<div class="flex-none my-auto">
					<div class="flex-none m-2 ">
					<span class="flex flex-col-reverse h-20 w-20">
					<div class="relative" x-data="{ open: false }">
					<img loading="lazy" @click="open = !open" @click.away="open = false" :class="{'border-red-400 bg-red-200 text-red-400 hover:bg-red-300 transform transition duration-300 ': open}"
			x-transition:enter-end="transform opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="transform opacity-100 scale-100" class="w-20 h-20 rounded-full border-4 select-none cursor-pointer" <?php echo "src='../../assets/img/avatars/{$avatar}.png'"; ?>"/></div>
										  <span class="absolute animate-ping rounded-full ml-16 mb-4 h-4 w-4 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
					  <span class="absolute rounded-full ml-16 mb-4 h-4 w-4 bg-<?php if($status === "online"){echo "green";} elseif($status === "away"){echo "yellow";} elseif($status === "dnd"){echo "red";} else{echo "gray";}?>-500"></span>
					  </span>					</div>
					</div>
					<div class="flex flex-col min-w-0 md:w-full  whitespace-nowrap">
					<div class="flex">
                    <div class="font-bold text-lg"><?php echo $name;?></div>
					<div class="font-base text-sm text-gray-300 ml-auto "><?php echo $messageDate; ?></div>
					</div>
                    <div class="text-base truncate text-gray-500 ">
                        <?php echo $message;?> 
                   </div>					
					<div class="text-xs truncate text-right mt-2 text-gray-400 transition hover:text-gray-500"><?php echo $bio;?></div>	
					</div>
			</div>
			</div>

			