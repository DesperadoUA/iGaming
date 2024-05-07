<script setup>
import Form from '@/components/form'
import { inject } from 'vue'
const formPopUpState = inject('formPopUpState')
const clientPopUpState = inject('clientPopUpState')
const changeStateFormPopUp = inject('changeStateFormPopUp')
const changeClientPopUpState = inject('changeClientPopUpState')
</script>

<template>
	<footer>
		<div class="bg-gray-100 pt-10 px-5">
			<h5 class="text-center font-semibold text-base text-blue-900 mb-2 mt-2">RNG and Game Certifications</h5>
			<div class="flex pt-2 justify-center flex-wrap">
				<a
					href="https://itechlabs.com/"
					aria-label="itechlands"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/itechlabs.png" /></a
				><a
					href="https://www.ecogra.org/ata/"
					aria-label="ecorga"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/ecogra.jpg" /></a
				><a
					href="https://gaminglabs.com/services/certification/"
					aria-label="gli"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/gli.jpg" /></a
				><a
					href="https://bmm.com/"
					aria-label="bmm"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/bmm.jpg"
				/></a>
			</div>
			<h5 class="text-center font-semibold text-base text-blue-900 mb-2 mt-10">Responsibility</h5>
			<div class="pt-2 flex justify-center flex-wrap">
				<a
					href="http://www.gamblersanonymous.org/ga/"
					aria-label="gamblersanonymous"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img
						alt=""
						class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded"
						src="/img/gamblersanonymous.jpg" /></a
				><a
					href="https://www.begambleaware.org/"
					aria-label="begambleaware"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/begambleaware.png" /></a
				><a
					href="https://www.gamcare.org.uk/"
					aria-label="gamcare"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto max-w-full max-h-full lazyLoad isLoaded" src="/img/gamcare.png"
				/></a>
			</div>
			<h5 class="text-center font-semibold text-base text-blue-900 mb-2 mt-10">Licenses</h5>
			<div class="pt-2 flex justify-center flex-wrap pb-14">
				<a
					href="https://www.curacao-egaming.com/"
					aria-label="curacao"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto lazyLoad isLoaded" src="/img/curacao.png" /></a
				><a
					href="https://www.mga.org.mt/"
					aria-label="mga"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto lazyLoad isLoaded" src="/img/mga.png" /></a
				><a
					href="http://www.gamblingcommission.gov.uk/home.aspx"
					aria-label="ukgc"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto lazyLoad isLoaded" src="/img/ukgc.png" /></a
				><a
					href="http://onjn.gov.ro/"
					aria-label="romania"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto lazyLoad isLoaded" src="/img/romania.jpeg" /></a
				><a
					href="https://pagcor.ph/regulatory/offshore-gaming.php"
					aria-label="pagcor"
					target="_blank"
					rel="noopener"
					class="h-10 justify-center items-center my-2 mx-4"
					><img alt="" class="h-full w-auto lazyLoad isLoaded" src="/img/pagcor.png"
				/></a>
			</div>
		</div>
		<div class="bg-gray-teal-700 p-8 text-white font-base">
			<div class="flex flex-col sm:flex-row justify-between items-center">
				<div>PRIMENETWORKS LIMITED 2024 ©</div>
				<div class="flex-auto mb-3 mt-3 sm:ml-10 sm:mb-0 sm:mt-0"></div>
				<div class="relative">
					<svg
						width="20"
						height="20"
						viewBox="0 0 20 20"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
						class="left-5 top-3 absolute"
					>
						<path
							d="M18.9031 5.45474C17.2448 2.22041 13.8778 0 10 0C6.12092 0 2.75348 2.22126 1.09566 5.45792C1.08908 5.47087 1.08122 5.48255 1.07613 5.49614C0.389564 6.8508 0 8.38039 0 10C0 11.62 0.389564 13.1496 1.07613 14.5039C1.08122 14.5175 1.08908 14.5291 1.09566 14.5421C2.75306 17.7787 6.12092 20 10 20C13.8778 20 17.2448 17.78 18.9031 14.5453C18.9105 14.5308 18.9192 14.5179 18.9247 14.5026C19.6109 13.1484 20 11.6192 20 10C20 8.38082 19.6109 6.85165 18.9247 5.49741C18.9188 5.48212 18.9105 5.46917 18.9031 5.45474ZM18.2369 13.913H14.4151C14.6274 12.8418 14.7535 11.6703 14.7773 10.4348H19.1084C19.0495 11.6752 18.7443 12.8497 18.2369 13.913ZM10 19.1304C8.62475 19.1304 7.3913 17.3673 6.69179 14.7826H13.3082C12.6087 17.3673 11.3753 19.1304 10 19.1304ZM6.48395 13.913C6.25913 12.8439 6.12305 11.6682 6.09693 10.4348H13.9035C13.877 11.6682 13.7409 12.8439 13.5165 13.913H6.48395ZM0.891644 10.4348H5.2227C5.2469 11.6703 5.37258 12.8418 5.58488 13.913H1.76312C1.25573 12.8497 0.95045 11.6752 0.891644 10.4348ZM1.76312 6.08696H5.58488C5.37258 7.1582 5.24648 8.32965 5.2227 9.56522H0.891644C0.95045 8.32477 1.25573 7.15035 1.76312 6.08696ZM10 0.869565C11.3753 0.869565 12.6087 2.63268 13.3082 5.21739H6.69179C7.3913 2.63268 8.62475 0.869565 10 0.869565ZM13.516 6.08696C13.7409 7.15566 13.877 8.33178 13.9031 9.56522H6.09651C6.12305 8.33178 6.25913 7.15566 6.48353 6.08696H13.516ZM14.7773 9.56522C14.7531 8.32965 14.6274 7.1582 14.4151 6.08696H18.2369C18.7443 7.15035 19.0495 8.32477 19.1084 9.56522H14.7773ZM17.7626 5.21739H14.2183C13.7782 3.49227 13.1036 2.08517 12.2769 1.16869C14.586 1.76482 16.5391 3.23879 17.7626 5.21739ZM7.7227 1.16869C6.89644 2.08517 6.22176 3.49227 5.78125 5.21739H2.23696C3.46085 3.23879 5.41398 1.76482 7.7227 1.16869ZM2.23739 14.7826H5.78125C6.22134 16.5077 6.89602 17.9148 7.7227 18.8313C5.41398 18.2352 3.46085 16.7608 2.23739 14.7826ZM12.2773 18.8313C13.1036 17.9148 13.7782 16.5077 14.2188 14.7826H17.7626C16.5391 16.7608 14.586 18.2352 12.2773 18.8313Z"
							fill="currentColor"
						></path>
					</svg>
					<select
						class="pl-12 w-64 h-12 rounded-full bg-transparent border border-white fill-current text-white text-base appearance-none focus:outline-none"
					>
						<option value="1">English</option>
					</select>
					<svg
						width="10"
						height="5"
						viewBox="0 0 10 5"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
						class="right-5 top-5 absolute"
					>
						<path d="M0 0L5 5L10 0H0Z" fill="currentColor"></path>
					</svg>
				</div>
			</div>
			<div class="flex flex-col sm:flex-row items-center mt-6 sm:mt-0">
				<div class="inline-flex">
					<a href="https://www.facebook.com/1GameHUB/" target="_blank" class="mr-4 hidden"
						><svg
							height="30px"
							fill="#FFFFFF"
							version="1.1"
							viewBox="0 0 512 512"
							width="30px"
							xml:space="preserve"
							xmlns="http://www.w3.org/2000/svg"
							xmlns:serif="http://www.serif.com/"
							xmlns:xlink="http://www.w3.org/1999/xlink"
						>
							<path
								d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-106.468,0l0,-192.915l66.6,0l12.672,-82.621l-79.272,0l0,-53.617c0,-22.603 11.073,-44.636 46.58,-44.636l36.042,0l0,-70.34c0,0 -32.71,-5.582 -63.982,-5.582c-65.288,0 -107.96,39.569 -107.96,111.204l0,62.971l-72.573,0l0,82.621l72.573,0l0,192.915l-191.104,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Z"
							></path>
						</svg>
					</a>
					<a href="https://www.linkedin.com/company/1gamehub" target="_blank" class="mr-4 hidden">
						<svg
							height="30px"
							fill="#FFFFFF"
							version="1.1"
							viewBox="0 0 512 512"
							width="30px"
							xml:space="preserve"
							xmlns="http://www.w3.org/2000/svg"
							xmlns:serif="http://www.serif.com/"
							xmlns:xlink="http://www.w3.org/1999/xlink"
						>
							<path
								d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-288.985,423.278l0,-225.717l-75.04,0l0,225.717l75.04,0Zm270.539,0l0,-129.439c0,-69.333 -37.018,-101.586 -86.381,-101.586c-39.804,0 -57.634,21.891 -67.617,37.266l0,-31.958l-75.021,0c0.995,21.181 0,225.717 0,225.717l75.02,0l0,-126.056c0,-6.748 0.486,-13.492 2.474,-18.315c5.414,-13.475 17.767,-27.434 38.494,-27.434c27.135,0 38.007,20.707 38.007,51.037l0,120.768l75.024,0Zm-307.552,-334.556c-25.674,0 -42.448,16.879 -42.448,39.002c0,21.658 16.264,39.002 41.455,39.002l0.484,0c26.165,0 42.452,-17.344 42.452,-39.002c-0.485,-22.092 -16.241,-38.954 -41.943,-39.002Z"
							></path>
						</svg>
					</a>
					<a href="https://twitter.com/1GameHub" target="_blank" class="mr-4 hidden">
						<svg
							height="30px"
							fill="#FFFFFF"
							version="1.1"
							viewBox="0 0 512 512"
							width="30px"
							xml:space="preserve"
							xmlns="http://www.w3.org/2000/svg"
							xmlns:serif="http://www.serif.com/"
							xmlns:xlink="http://www.w3.org/1999/xlink"
						>
							<path
								d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-253.927,424.544c135.939,0 210.268,-112.643 210.268,-210.268c0,-3.218 0,-6.437 -0.153,-9.502c14.406,-10.421 26.973,-23.448 36.935,-38.314c-13.18,5.824 -27.433,9.809 -42.452,11.648c15.326,-9.196 26.973,-23.602 32.49,-40.92c-14.252,8.429 -30.038,14.56 -46.896,17.931c-13.487,-14.406 -32.644,-23.295 -53.946,-23.295c-40.767,0 -73.87,33.104 -73.87,73.87c0,5.824 0.613,11.494 1.992,16.858c-61.456,-3.065 -115.862,-32.49 -152.337,-77.241c-6.284,10.881 -9.962,23.601 -9.962,37.088c0,25.594 13.027,48.276 32.95,61.456c-12.107,-0.307 -23.448,-3.678 -33.41,-9.196l0,0.92c0,35.862 25.441,65.594 59.311,72.49c-6.13,1.686 -12.72,2.606 -19.464,2.606c-4.751,0 -9.348,-0.46 -13.946,-1.38c9.349,29.426 36.628,50.728 68.965,51.341c-25.287,19.771 -57.164,31.571 -91.8,31.571c-5.977,0 -11.801,-0.306 -17.625,-1.073c32.337,21.15 71.264,33.41 112.95,33.41Z"
							></path>
						</svg>
					</a>
					<a href="https://www.instagram.com/1gamehub/" target="_blank" class="mr-4 hidden"
						><svg
							height="30px"
							fill="#FFFFFF"
							version="1.1"
							viewBox="0 0 512 512"
							width="30px"
							xml:space="preserve"
							xmlns="http://www.w3.org/2000/svg"
							xmlns:serif="http://www.serif.com/"
							xmlns:xlink="http://www.w3.org/1999/xlink"
						>
							<path
								d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-193.446,81c-47.527,0 -53.487,0.201 -72.152,1.053c-18.627,0.85 -31.348,3.808 -42.48,8.135c-11.508,4.472 -21.267,10.456 -30.996,20.184c-9.729,9.729 -15.713,19.489 -20.185,30.996c-4.326,11.132 -7.284,23.853 -8.135,42.48c-0.851,18.665 -1.052,24.625 -1.052,72.152c0,47.527 0.201,53.487 1.052,72.152c0.851,18.627 3.809,31.348 8.135,42.48c4.472,11.507 10.456,21.267 20.185,30.996c9.729,9.729 19.488,15.713 30.996,20.185c11.132,4.326 23.853,7.284 42.48,8.134c18.665,0.852 24.625,1.053 72.152,1.053c47.527,0 53.487,-0.201 72.152,-1.053c18.627,-0.85 31.348,-3.808 42.48,-8.134c11.507,-4.472 21.267,-10.456 30.996,-20.185c9.729,-9.729 15.713,-19.489 20.185,-30.996c4.326,-11.132 7.284,-23.853 8.134,-42.48c0.852,-18.665 1.053,-24.625 1.053,-72.152c0,-47.527 -0.201,-53.487 -1.053,-72.152c-0.85,-18.627 -3.808,-31.348 -8.134,-42.48c-4.472,-11.507 -10.456,-21.267 -20.185,-30.996c-9.729,-9.728 -19.489,-15.712 -30.996,-20.184c-11.132,-4.327 -23.853,-7.285 -42.48,-8.135c-18.665,-0.852 -24.625,-1.053 -72.152,-1.053Zm0,31.532c46.727,0 52.262,0.178 70.715,1.02c17.062,0.779 26.328,3.63 32.495,6.025c8.169,3.175 13.998,6.968 20.122,13.091c6.124,6.124 9.916,11.954 13.091,20.122c2.396,6.167 5.247,15.433 6.025,32.495c0.842,18.453 1.021,23.988 1.021,70.715c0,46.727 -0.179,52.262 -1.021,70.715c-0.778,17.062 -3.629,26.328 -6.025,32.495c-3.175,8.169 -6.967,13.998 -13.091,20.122c-6.124,6.124 -11.953,9.916 -20.122,13.091c-6.167,2.396 -15.433,5.247 -32.495,6.025c-18.45,0.842 -23.985,1.021 -70.715,1.021c-46.73,0 -52.264,-0.179 -70.715,-1.021c-17.062,-0.778 -26.328,-3.629 -32.495,-6.025c-8.169,-3.175 -13.998,-6.967 -20.122,-13.091c-6.124,-6.124 -9.917,-11.953 -13.091,-20.122c-2.396,-6.167 -5.247,-15.433 -6.026,-32.495c-0.842,-18.453 -1.02,-23.988 -1.02,-70.715c0,-46.727 0.178,-52.262 1.02,-70.715c0.779,-17.062 3.63,-26.328 6.026,-32.495c3.174,-8.168 6.967,-13.998 13.091,-20.122c6.124,-6.123 11.953,-9.916 20.122,-13.091c6.167,-2.395 15.433,-5.246 32.495,-6.025c18.453,-0.842 23.988,-1.02 70.715,-1.02Zm0,53.603c-49.631,0 -89.865,40.234 -89.865,89.865c0,49.631 40.234,89.865 89.865,89.865c49.631,0 89.865,-40.234 89.865,-89.865c0,-49.631 -40.234,-89.865 -89.865,-89.865Zm0,148.198c-32.217,0 -58.333,-26.116 -58.333,-58.333c0,-32.217 26.116,-58.333 58.333,-58.333c32.217,0 58.333,26.116 58.333,58.333c0,32.217 -26.116,58.333 -58.333,58.333Zm114.416,-151.748c0,11.598 -9.403,20.999 -21.001,20.999c-11.597,0 -20.999,-9.401 -20.999,-20.999c0,-11.598 9.402,-21 20.999,-21c11.598,0 21.001,9.402 21.001,21Z"
							></path>
						</svg>
					</a>
				</div>
				<div class="text-sm sm:ml-2 flex flex-col justify-center mt-5 sm:mt-0 text-center sm:text-left">
					<div>Contact us</div>
					<div>Address: ROOM 7B, One Capital Place, 18 Luard Road, Wan Chai, Hong Kong</div>
					<div>Email: <a href="mailto:sales@pobo.net">sales@pobo.net</a></div>
				</div>
			</div>
		</div>
	</footer>
	<div>
		<button
			@click="changeStateFormPopUp(true)"
			variant="danger"
			size="lg"
			class="text-white text-sm sm:text-base uppercase text-center w-32 block fixed top-1/3 rounded-t-2xl transform h-20 pb-6 bg-orange-500 hover:bg-orange-400 hover:border-orange-400 lg:-left-14 lg:rotate-90 -right-14 -rotate-90"
		>
			Contact
		</button>
		<div v-if="formPopUpState" id="popUp">
			<div class="w-full h-full fixed bg-blue-900 bg-opacity-95 top-0 flex z-20 justify-center items-center">
				<div
					class="w-full p-4 py-12 max-w-md bg-white rounded-lg h-screen overflow-x-scroll sm:h-4/5 relative max-h-popup"
				>
					<button
						@click="changeStateFormPopUp(false)"
						class="bg-transparent w-4 h-4 absolute float-right border-0 z-20 top-5 right-8 p-0"
					>
						<svg
							width="20"
							height="20"
							viewBox="0 0 20 20"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
							class="fill-current text-gray-500"
						>
							<path
								d="M20 2.01429L17.9857 0L10 7.98571L2.01429 0L0 2.01429L7.98571 10L0 17.9857L2.01429 20L10 12.0143L17.9857 20L20 17.9857L12.0143 10L20 2.01429Z"
								fill="currentColor"
							></path>
						</svg>
					</button>
					<Form />
				</div>
			</div>
		</div>
		<UModal v-model="clientPopUpState" prevent-close>
			<UCard
				:ui="{
					ring: '',
					divide: 'divide-y divide-gray-50 dark:divide-gray-50 c_bg_white'
				}"
			>
				<template #header>
					<div class="flex items-center justify-between">
						<h3 class="text-base font-semibold leading-6 text-black">
							For security reasons, please obtain a personalized link to Client Area from your manager
						</h3>
						<button
							type="button"
							@click="changeClientPopUpState(false)"
							class="focus:outline-none focus-visible:outline-0 disabled:cursor-not-allowed disabled:opacity-75 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 p-1.5 text-gray-700 focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-primary-500 dark:focus-visible:ring-primary-400 inline-flex items-center absolute top-3 right-3 bg-orange-500"
						>
							<span class="i-heroicons-x-mark-20-solid flex-shrink-0 h-5 w-5 text-white" aria-hidden="true"></span>
						</button>
					</div>
				</template>
			</UCard>
		</UModal>
	</div>
</template>
<style>
.bg-gray-teal-700 {
	--tw-bg-opacity: 1;
	background-color: rgb(53 58 61 / var(--tw-bg-opacity));
}
.c_bg_white {
	background: white !important;
}
</style>
