						<a onclick="btnDownload('<?php echo $postid;?>')" x-data="{}" class="focus:outline-none"
		x-on:click="open = false,$dispatch('notice', {type: 'download', text: '📥 Downloading...'})">
		<div x-data="{ active: false }" :class="{ 'text-blue-500': active, 'hover:bg-blue-200': active }" @click.away="{active: false}" @click="active = !active" class="transition focus:outline-none focus:opacity-50 hover:bg-gray-200  focus:text-blue-500 w-8 h-8 px-2 py-2 focus:outline-none text-center rounded-full text-gray-400 cursor-pointer">                           
		<svg xmlns="https://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
						
                            </svg>
				</div>
						  </a> 