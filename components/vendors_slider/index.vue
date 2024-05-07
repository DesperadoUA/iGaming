<script setup>
const items = [
	{
		title: 'CT Interactive',
		description: `
              "Since we started our cooperation with PrimeNetworks, we were happy to find
			  that their expertise and true partnership have benefited our business.
			  Having a trusted objective partner is invaluable. Our team respects and
			  values our relationship with PrimeNetworks and has come to count on their excellent
			  cooperation. We are happy to work together and create high efficiency."
            `,
		signature: 'Lachezar Petrov, General manager, CT Interactive',
		src: '/img/ct-interactive.png'
	},
	{
		title: 'OneTouch',
		description: `
				"We really enjoy working with the fantastic team at PrimeNetworks. The supplier’s
				impressive suite of cutting-edge content has proved an invaluable tool in
				helping to take our operations to the next level. We look forward to maintaining
				our fruitful commercial relationship in the coming period."
					`,
		signature: 'Petra Maria Poola, Head of Business Development and Operations at OneTouch',
		src: '/img/onetouch.png'
	},
	{
		title: 'FAZI',
		description: `
              "We really enjoy working with PrimeNetworks team because we share the same core values and passion
			   for business. Cooperation with them has strengthened our global market presence and thanks 
			   to their support, Fazi games have become favorite ones among players."
            `,
		signature: 'Bojan Mitic, CEO, Fazi',
		src: '/img/fazi.png'
	},
	{
		title: 'PG SOFT',
		description: `"We have been working with PrimeNetworks since early 2019 and from that point, we have seen steady growth in our business.
The passion with which they do business on day to day basis leaves us with no doubt that we chose an excellent partner. 
It’s been a pleasure to work so closely together and we look forward to this continuing far into the future."`,
		signature: 'Valters Garais, Account Executive at PGSOFT',
		src: '/img/pgsoft.png'
	},
	{
		title: 'Spadegaming',
		description: `"It is our pleasure to work with PrimeNetworks aggregation platform. Their experienced casino 
		team works hard, appreciates, and heavily promotes the good content. Their global platform can link 
		you with operators worldwide having the chance to discover new opportunities and trends. 
		PrimeNetworks's platform is a trustworthy and reliable partner in our journey and I would 
		recommend them to anyone looking to grow their global presence."
            `,
		signature: 'Dimitrios Malegkos, Head of Sales, Spadegaming',
		src: '/img/spadegaming.png'
	},
	{
		title: 'Green Jade',
		description: `
              "PrimeNetworks are an industry powerhouse. With an extensive portfolio of operators and a 
			  team of friendly and expert professionals, PrimeNetworks are a must have partner for any studio."
            `,
		signature: 'Mark Taffler, CCO, Green Jade Games',
		src: '/img/green-jade.png'
	},
	{
		title: 'Zeusplay',
		description: `
		"It is always a pleasure dealing with teams who have professionalism and a profound background 
		and it is certain that this partnership will be beneficial for both Zeusplay and PrimeNetworks."
            `,
		signature: 'Mr. Antonios Zlatanos, CEO, ZEUSPLAY',
		src: '/img/zeusplay.png'
	},
	{
		title: 'GoldenRace',
		description: `
		"As an award-winning virtual sports and betting technologies provider, GoldenRace is always looking for partnering with the best aggregators. It is great to have completed the integration with PrimeNetworks, so they can now offer to their clients our top-quality products such as Football, Dog races, Horse races, Keno, and Spin2Win."
            `,
		signature: 'Tassos Panagiotaros, Sales Director, GoldenRace',
		src: '/img/golden-race.png'
	},
	{
		title: 'EURASIAN Gaming',
		description: `
              "Working with PrimeNetworks is really a great thing. It has been one of our first partners and together we achieved great goals.
It’s important to work with someone who’s reliable and that you can trust. Speaking of business value we reached new markets through PrimeNetworks and that’s really important for us. Many more will come soon. I’m sure of that. If I had to give a vote to our cooperation I’d give a 10 with no doubts."
            `,
		signature: 'Luca Richter - Head of Account Management at EURASIAN Gaming',
		src: '/img/eurasian-gaming.png'
	},
	{
		title: 'Kalamba',
		description: `
              "It’s been great working with the team at PrimeNetworks, who have been really helpful at every stage. Collaborating with such a professional, friendly experts is a real pleasure and we look forward to continuing the partnership going forward."
            `,
		signature: 'Dionysia Ntentopoulou, Account Manager at Kalamba Games',
		src: '/img/kalamba.png'
	}
]
const carouselRef = ref()
const currentPage = computed(() => {
	return carouselRef.value && carouselRef.value.page ? carouselRef.value.page : 1
})
</script>
<template>
	<section>
		<div class="flex flex-wrap lg:flex-nowrap">
			<div class="bg-blue-teal-600 w-full lg:h-auto lg:w-1/2 py-10 sm:py-24 px-8 sm:px-16 lg:px-20">
				<div class="w-full h-px bg-white"></div>
				<UCarousel
					ref="carouselRef"
					v-slot="{ item }"
					:items="items"
					:ui="{
						item: 'basis-full'
					}"
					:prev-button="{
						color: 'white',
						class: 'vendorPrevBtn',
						icon: 'i-heroicons-chevron-left-20-solid iconVendor'
					}"
					:next-button="{
						color: 'white',
						class: 'vendorNextBtn',
						icon: 'i-heroicons-chevron-right-20-solid iconVendor'
					}"
					arrows
					class="mx-auto"
				>
					<div tabindex="-1" role="tabpanel" class="VueCarousel-slide slide" aria-hidden="true">
						<h4 class="text-white font-medium text-2xl leading-10 sm:mt-12 mt-2 mb-2">{{ item.title }}</h4>
						<p class="slide__testimonial font-medium text-base leading-8 text-white">
							{{ item.description }}
						</p>
						<p class="font-medium text-right sm:mb-3 mb-0 text-base leading-8 text-white">
							{{ item.signature }}
						</p>
					</div>
				</UCarousel>
			</div>
			<div class="bg-blue-teal-700 w-full h-96 lg:h-auto lg:w-1/2 py-10 sm:py-24 px-8 sm:px-16 lg:px-20">
				<div class="w-full h-px bg-white"></div>
				<div class="flex justify-center items-center h-full">
					<img
						alt=""
						:src="items[currentPage - 1].src"
						class="w-full h-full max-w-xl max-h-32 object-contain lazyLoad isLoaded"
					/>
				</div>
			</div>
		</div>
	</section>
</template>
<style>
.vendorPrevBtn {
	position: absolute;
	top: calc(100% + 10px);
	left: 0px;
	background: transparent !important;
	border: 1px solid white;
}
.vendorNextBtn {
	position: absolute;
	top: calc(100% + 10px);
	right: calc(100% - 80px);
	background: transparent !important;
	border: 1px solid white;
}
</style>
<style scoped>
.bg-blue-teal-600 {
	--tw-bg-opacity: 1;
	background-color: rgb(55 161 252 / var(--tw-bg-opacity));
}
.bg-blue-teal-700 {
	--tw-bg-opacity: 1;
	background-color: rgb(34 53 111 / var(--tw-bg-opacity));
}
</style>
