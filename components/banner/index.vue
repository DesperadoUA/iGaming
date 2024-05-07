<script setup lang="ts">
import SLIDE_1 from './slides/slide_1.vue'
import SLIDE_2 from './slides/slide_2.vue'
import SLIDE_3 from './slides/slide_3.vue'
import SLIDE_4 from './slides/slide_4.vue'
import SLIDE_5 from './slides/slide_5.vue'
import SLIDE_6 from './slides/slide_6.vue'
import SLIDE_7 from './slides/slide_7.vue'
import SLIDE_8 from './slides/slide_8.vue'
const items = [SLIDE_1, SLIDE_2, SLIDE_3, SLIDE_4, SLIDE_5, SLIDE_6, SLIDE_7, SLIDE_8]
</script>
<template>
	<section id="home" class="banner overflow-hidden w-full px-2 mx-auto bg-hero-radial">
		<div
			class="w-full sm:w-4/5 px-0 py-9 m-auto flex flex-col items-center justify-center min-h-1calc h-auto sm:h-1calc"
		>
			<div class="relative">
				<img alt="" class="-left-96 -top-8 absolute float-left xl:-top-36 xl:left-rocket" src="/img/rocket.png" />
				<h1 class="text-orange-500 text-center font-extrabold text-3xlBigger sm:text-6xlBigger mb-12">
					Prime-Only Business Objects
				</h1>
			</div>
			<div class="container">
				<UCarousel
					v-slot="{ item }"
					:items="items"
					:ui="{
						item: 'itemMainBanner lg:basis-1/5 md:basis-1/2',
						container: 'rounded-lg'
					}"
					:prev-button="{
						color: 'bg-transparent',
						class: '-left-12 bannerPrevBtn',
						icon: 'i-heroicons-chevron-left-20-solid iconBanner'
					}"
					:next-button="{
						color: 'bg-transparent',
						class: '-right-12 bannerNextBtn',
						icon: 'i-heroicons-chevron-right-20-solid iconBanner'
					}"
					arrows
					class="mx-auto"
				>
					<div class="slide_item">
						<component :is="item" />
					</div>
				</UCarousel>
			</div>
		</div>
	</section>
</template>
<style>
h1 {
	font-weight: bold;
}
.dark\:ring-gray-700:is(.dark *) {
	--tw-ring-color: none !important;
}
.bannerNextBtn,
.bannerPrevBtn {
	border: none !important;
	background-color: transparent !important;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 2;
}
.iconBanner {
	width: 5rem !important;
	height: 5rem !important;
	color: #f36240 !important;
	opacity: 0.3;
}
.iconBanner:hover {
	opacity: 1;
}
.itemMainBanner {
	display: flex;
	justify-content: center;
}
.tracking-wide {
	letter-spacing: 0.025em;
}
.bg-hero-radial {
	background-image: radial-gradient(97.5% 97.5% at 50% 36%, #f8fdff 0, #59b7d8 100%);
}
.slide_item {
	padding: 5px;
	display: flex;
	justify-content: center;
}
@media (max-width: 639px) {
	.itemMainBanner {
		width: 50%;
	}
	.bannerNextBtn,
	.bannerPrevBtn {
		position: absolute;
		top: calc(100%);
	}
	.bannerNextBtn {
		right: calc(50% - 40px);
	}
	.bannerPrevBtn {
		left: calc(50% - 40px);
	}
	.iconBanner {
		width: 3rem !important;
		height: 3rem !important;
		color: #f36240 !important;
		opacity: 0.3;
	}
	.text-3xlBigger {
		font-size: 1.8rem;
	}
}
@media (min-width: 640px) {
	.sm\:text-6xlBigger {
		font-size: 4.3rem;
		line-height: 1.2;
	}
}
@media (min-width: 640px) {
	.sm\:h-1calc {
		height: calc(100vh - 110px);
	}
}
.text-orange-500 {
	color: #f36240 !important;
}
.ep-circle {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
}
.ep-legend--container {
	position: absolute;
	text-align: center;
	width: 100%;
	top: 50%;
	transform: translateY(-50%);
}
.ep-legend--value {
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;
	text-align: center;
	opacity: 1;
}
.ep-legend--value {
	-webkit-transition: 0.3s;
	-o-transition: 0.3s;
	transition: 0.3s;
	text-align: center;
	opacity: 1;
}
.legend-custom-style {
	padding-top: 0.625rem;
	font-weight: 300;
}
.counter {
	font-family: Axiforma, sans-serif;
	font-weight: 300;
}
</style>
