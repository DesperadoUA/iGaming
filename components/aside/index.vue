<script setup>
const changeStateFormPopUp = inject('changeStateFormPopUp')
function onClickByContacts() {
	changeStateFormPopUp(true)
}
</script>
<template>
	<section class="main-block bg-car-bg bg-cover pt-24 pb-28 px-10 sm:px-20 relative">
		<h2 class="text-orange-500 font-extrabold max-w-xl text-3xl sm:text-5xl mb-12">Build Your Casino Fast & Easy</h2>
		<button
			class="text-orange-500 uppercase font-normal text-sm bg-white rounded-3xl border-none py-3 px-9 focus:outline-none"
			@click="onClickByContacts"
		>
			Contact
		</button>
		<img
			alt="logo"
			class="w-72 absolute filter brightness-1000 hidden sm:block bottom-5 right-16 lazyLoad isLoaded"
			src="/img/prime-logo.png"
		/>
	</section>
</template>
<style scoped>
.bg-car-bg {
	background-image: url(/img/car-bg.jpg);
}
</style>
