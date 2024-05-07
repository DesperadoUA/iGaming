<script setup>
import { ref } from 'vue'
import Sidebar from '~/components/sidebar'
import { inject } from 'vue'
const menuIsOpen = ref(false)
function toggleMenu() {
	menuIsOpen.value = !menuIsOpen.value
}
const changeStateFormPopUp = inject('changeStateFormPopUp')
const changeClientPopUpState = inject('changeClientPopUpState')
function onClickByContacts() {
	changeStateFormPopUp(true)
	toggleMenu()
}
</script>
<template>
	<div class="sticky top-0 z-10">
		<div class="relative">
			<header
				class="header sm:h-28 h-20 w-full my-0 px-8 lg:px-16 mx-auto small relative transition-all duration-500 flex justify-between items-center bg-white shadow-md"
			>
				<button @click="toggleMenu" class="burger bg-transparent border-none focus:outline-none">
					<svg width="40" height="13" viewBox="0 0 40 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M39.4989 5.43528L0.737305 5.42451V7.57689H39.4989V5.43528ZM0.737305 10.8054H39.4989V12.9578H0.737305V10.8054ZM39.4989 0.0435791H0.737305V2.20672L39.4989 2.19595V0.0435791Z"
							fill="grey"
						></path>
					</svg>
				</button>
				<a href="/" aria-current="page" class="nuxt-link-exact-active nuxt-link-active"
					><img
						alt="logo"
						src="/img/prime-logo.png"
						class="logo w-40 h-12 sm:w-64 sm:h-20 object-cover top-3 sm:top-5 right-0 left-logo_sm transition-all duration-500 sm:left-logo"
				/></a>
				<button
					aria-label="Login"
					class="text-white text-sm font-normal uppercase hidden sm:flex bg-orange-500 px-8 py-4 rounded-4xl active:bg-orange-700 hover:bg-orange-700 hover:border-orange-700 transition duration-500 ease-in-out"
					@click="changeClientPopUpState(true)"
				>
					Client Area
				</button>
			</header>
		</div>
		<USlideover v-model="menuIsOpen" side="left">
			<div class="flex-1">
				<div class="sidebar-background">
					<div class="sidebar open">
						<div class="absolute" style="top: 49.5px; left: 64px">
							<button
								@click="toggleMenu"
								class="fill-current text-white border-0 border-none transition-all bg-transparent focus:outline-none hover:transition-all hover:text-orange-500"
							>
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M20 2.01429L17.9857 0L10 7.98571L2.01429 0L0 2.01429L7.98571 10L0 17.9857L2.01429 20L10 12.0143L17.9857 20L20 17.9857L12.0143 10L20 2.01429Z"
										fill="currentColor"
									></path>
								</svg>
							</button>
							<menu class="pl-0 list-none mt-5 text-white"
								><!---->
								<li class="cursor-pointer mt-4 text-lg">
									<NuxtLink to="/#home" @click="toggleMenu">Home</NuxtLink>
								</li>
								<li class="cursor-pointer mt-4 text-lg">
									<NuxtLink to="/#featuredGamePartners" @click="toggleMenu">Partners</NuxtLink>
								</li>
								<li class="cursor-pointer mt-4 text-lg" @click="onClickByContacts">Contact us</li>
							</menu>
						</div>
					</div>
				</div>
			</div>
		</USlideover>
	</div>
</template>
<style scoped>
.rounded-4xl {
	border-radius: 2.5rem !important;
}
@media (min-width: 640px) {
	header.small .logo {
		height: 3rem;
		width: 10rem;
	}
	header.small {
		height: 5rem;
	}
}

header.small .logo[data-v-1283797a] {
	top: 0.75rem;
	height: 2.25rem;
	width: 8rem;
}
.sidebar {
	position: fixed;
	bottom: 0;
	top: 0;
	z-index: 100;
	height: 100vh;
	width: 100%;
	max-width: 400px;
	transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
		skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
	--tw-bg-opacity: 1;
	background-color: rgb(30 58 138 / var(--tw-bg-opacity));
	opacity: 0.95;
	transition-property: all;
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
	transition-duration: 0.5s;
}
.sidebar-background {
	background-color: rgb(30 58 138 / var(--tw-bg-opacity));
	height: 100%;
}
</style>
