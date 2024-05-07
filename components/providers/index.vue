<script setup>
import { ref, computed } from 'vue'
const currentFilter = ref('all')
const limitPosts = 22
const limitPostsState = ref(true)
const providers = [
	'all',
	'slots',
	'instant-win',
	'crash-game',
	'bingo',
	'roulette',
	'table-games',
	'lottery',
	'fishing',
	'video-poker',
	'poker',
	'blackjack',
	'video-bingo',
	'virtual-game',
	'keno',
	'racing',
	'casual-games',
	'others',
	'sports',
	'baccarat',
	'shooting',
	'live-dealer',
	'scratch-cards',
	'card',
	'european-roulette',
	'dice',
	'live-casino',
	'american-roulette'
]
const changeFilter = item => (currentFilter.value = item)
const posts = [
	{
		title: '7Mojos Live',
		src: '/logos/7mojos-live.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Absolute Live Gaming',
		src: '/logos/7mojos-slots.png',
		category: ['all', 'live-casino', 'live-dealer']
	},
	{
		title: 'Amigogaming',
		src: '/logos/absolute-live-gaming.png',
		category: ['all', 'slots']
	},
	{
		title: 'Apollo Play',
		src: '/logos/amigogaming.png',
		category: ['all', 'crash-game', 'roulette']
	},
	{
		title: 'Betgamestv',
		src: '/logos/betgamestv.png',
		category: ['all', 'instant-win', 'crash-game', 'live-dealer']
	},
	{
		title: 'Betsolutions',
		src: '/logos/betsolutions.png',
		category: ['all', 'instant-win', 'crash-game']
	},
	{
		title: 'Bgaming',
		src: '/logos/bgaming.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'roulette', 'table-games', 'lottery', 'scratch-cards']
	},
	{
		title: 'Boldplay',
		src: '/logos/boldplay.png',
		category: [
			'all',
			'slots',
			'roulette',
			'table-games',
			'video-poker',
			'blackjack',
			'video-bingo',
			'keno',
			'baccarat',
			'scratch-cards',
			'american-roulette'
		]
	},
	{
		title: 'Bombay Live',
		src: '/logos/bombay-live.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Booongo2',
		src: '/logos/booongo2.png',
		category: ['all', 'slots']
	},
	{
		title: 'Caleta',
		src: '/logos/caleta.png',
		category: ['all', 'slots', 'crash-game', 'bingo', 'lottery', 'keno', 'scratch-cards', 'card']
	},
	{
		title: 'Charismatic',
		src: '/logos/charismatic.png',
		category: ['all', 'slots']
	},
	{
		title: 'Cool Games',
		src: '/logos/cool-games.png',
		category: ['all', 'slots', 'bingo', 'table-games', 'fishing', 'shooting']
	},
	{
		title: 'Crazy Billions',
		src: '/logos/crazy-billions.png',
		category: ['all', 'slots', 'table-games', 'lottery', 'scratch-cards']
	},
	{
		title: 'Ct Interactive',
		src: '/logos/ct-interactive.png',
		category: ['all', 'slots']
	},
	{
		title: 'Edgevirtuals',
		src: '/logos/edgevirtuals.png',
		category: ['all', 'virtual-game']
	},
	{
		title: 'Elbet',
		src: '/logos/elbet.png',
		category: ['all', 'instant-win', 'crash-game', 'lottery', 'virtual-game']
	},
	{
		title: 'Espresso',
		src: '/logos/espresso.png',
		category: ['all', 'instant-win', 'roulette', 'table-games', 'lottery', 'poker']
	},
	{
		title: 'Eurasian Gaming',
		src: '/logos/eurasian-gaming.png',
		category: ['all', 'slots', 'bingo']
	},
	{
		title: 'Evolution',
		src: '/logos/evolution.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Evoplay',
		src: '/logos/evoplay.png',
		category: ['all', 'slots', 'crash-game', 'bingo', 'roulette', 'table-games', 'poker', 'scratch-cards']
	},
	{
		title: 'Ezugi',
		src: '/logos/ezugi.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Fazi',
		src: '/logos/fazi.png',
		category: ['all', 'slots', 'roulette', 'poker']
	},
	{
		title: 'Felix Gaming',
		src: '/logos/felix-gaming.png',
		category: ['all', 'slots']
	},
	{
		title: 'Fugaso',
		src: '/logos/fugaso.png',
		category: ['all', 'slots']
	},
	{
		title: 'Funky Games',
		src: '/logos/funky-games.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'roulette', 'table-games', 'keno', 'shooting']
	},
	{
		title: 'Funta Gaming',
		src: '/logos/funta-gaming.png',
		category: ['all', 'slots', 'all', 'instant-win', 'table-games', 'fishing', 'blackjack']
	},
	{
		title: 'Gameart',
		src: '/logos/gameart.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'table-games', 'poker']
	},
	{
		title: 'Games Inc',
		src: '/logos/games-inc.png',
		category: ['all', 'slots', 'instant-win', 'roulette', 'table-games', 'blackjack']
	},
	{
		title: 'Gamzix',
		src: '/logos/gamzix.png',
		category: ['all', 'slots', 'instant-win', 'crash-game']
	},
	{
		title: 'Golden Race',
		src: '/logos/golden-race.png',
		category: ['all']
	},
	{
		title: 'Inbet',
		src: '/logos/inbet.png',
		category: [
			'all',
			'slots',
			'instant-win',
			'crash-game',
			'bingo',
			'table-games',
			'lottery',
			'poker',
			'virtual-game',
			'keno',
			'racing',
			'other'
		]
	},
	{
		title: 'Inbet Virtuals',
		src: '/logos/inbet-virtuals.png',
		category: ['all']
	},
	{
		title: 'Jili Games',
		src: '/logos/jili-games.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'table-games', 'keno', 'card']
	},
	{
		title: 'Kagaming',
		src: '/logos/kagaming.png',
		category: [
			'all',
			'slots',
			'instant-win',
			'crash-game',
			'table-games',
			'lottery',
			'fishing',
			'poker',
			'keno',
			'baccarat',
			'shooting'
		]
	},
	{
		title: 'Kalamba',
		src: '/logos/kalamba.png',
		category: ['all', 'slots', 'instant-win', 'crash-game']
	},
	{
		title: 'Kiron',
		src: '/logos/kiron.png',
		category: ['all', 'lottery', 'virtual-game', 'keno']
	},
	{
		title: 'Liw',
		src: '/logos/liw.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Luckyelephant',
		src: '/logos/luckyelephant.png',
		category: ['all', 'instant-win', 'crash-game', 'table-games', 'card']
	},
	{
		title: 'Mancala',
		src: '/logos/mancala.png',
		category: ['all', 'slots', 'instant-win', 'crash-game']
	},
	{
		title: 'Mrslotty',
		src: '/logos/mrslotty.png',
		category: ['all', 'slots']
	},
	{
		title: 'Netgame',
		src: '/logos/netgame.png',
		category: ['all', 'slots', 'instant-win', 'crash-game']
	},
	{
		title: 'Netgaming',
		src: '/logos/netgaming.png',
		category: ['all', 'slots', 'instant-win', 'table-games']
	},
	{
		title: 'Nsoft',
		src: '/logos/nsoft.png',
		category: ['all', 'lottery', 'virtual-game', 'keno']
	},
	{
		title: 'Onetouch',
		src: '/logos/onetouch.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'roulette', 'table-games', 'poker', 'keno', 'other']
	},
	{
		title: 'Orbital Gaming',
		src: '/logos/orbital-gaming.png',
		category: ['all', 'instant-win', 'crash-game', 'lottery', 'card', 'dice']
	},
	{
		title: 'Pgsoft',
		src: '/logos/pgsoft.png',
		category: ['all', 'card']
	},
	{
		title: 'Play Pearls',
		src: '/logos/play-pearls.png',
		category: ['all', 'slots', 'all', 'instant-win', 'table-games', 'keno']
	},
	{
		title: 'Playson2',
		src: '/logos/playson2.png',
		category: ['all', 'slots']
	},
	{
		title: 'Red Rake Gaming',
		src: '/logos/red-rake-gaming.png',
		category: ['all', 'slots', 'roulette', 'video-poker', 'blackjack', 'video-bingo']
	},
	{
		title: 'Rival',
		src: '/logos/rival.png',
		category: ['all', 'slots', 'instant-win', 'bingo', 'table-games', 'video-poker', 'poker', 'keno', 'scratch-cards']
	},
	{
		title: 'Salsatechnology',
		src: '/logos/salsatechnology.png',
		category: ['all', 'lottery', 'poker']
	},
	{
		title: 'Smartsoft',
		src: '/logos/smartsoft.png',
		category: ['all', 'slots', 'crash-game', 'roulette', 'table-games', 'keno', 'other']
	},
	{
		title: 'Spadegaming',
		src: '/logos/spadegaming.png',
		category: ['all', 'slots', 'fishing', 'poker', 'shooting']
	},
	{
		title: 'Spinmatic',
		src: '/logos/spinmatic.png',
		category: ['all', 'slots', 'crash-game', 'scratch-cards']
	},
	{
		title: 'Spinomenal',
		src: '/logos/spinomenal.png',
		category: ['all', 'slots', 'table-games']
	},
	{
		title: 'Spinoro',
		src: '/logos/spinoro.png',
		category: ['all', 'slots', 'crash-game', 'table-games', 'keno', 'scratch-cards']
	},
	{
		title: 'Spinthon',
		src: '/logos/spinthon.png',
		category: ['all', 'slots']
	},
	{
		title: 'Superlotto',
		src: '/logos/superlotto.png',
		category: ['all', 'lottery', 'live-dealer', 'scratch-cards']
	},
	{
		title: 'Tada Gaming',
		src: '/logos/tada-gaming.png',
		category: ['all', 'slots', 'instant-win', 'table-games', 'virtual-game', 'keno']
	},
	{
		title: 'Tpg',
		src: '/logos/tpg.png',
		category: ['all', 'slots', 'instant-win', 'table-games', 'keno', 'other', 'baccarat']
	},
	{
		title: 'Triplecherry',
		src: '/logos/triplecherry.png',
		category: ['all', 'slots', 'instant-win', 'crash-game', 'scratch-cards']
	},
	{
		title: 'Truelab',
		src: '/logos/truelab.png',
		category: ['all', 'slots', 'table-games']
	},
	{
		title: 'Velagaming',
		src: '/logos/velagaming.png',
		category: [
			'all',
			'slots',
			'instant-win',
			'crash-game',
			'roulette',
			'table-games',
			'blackjack',
			'racing',
			'casual-games',
			'other',
			'sports',
			'baccarat',
			'shooting'
		]
	},
	{
		title: 'Vibra',
		src: '/logos/vibra.png',
		category: ['all', 'slots', 'bingo', 'table-games', 'poker', 'scratch-cards', 'european-roulette', 'sports']
	},
	{
		title: 'Wazdan',
		src: '/logos/wazdan.png',
		category: ['all', 'slots', 'bingo', 'roulette', 'table-games', 'video-poker', 'poker', 'other']
	},
	{
		title: 'Wearecasino',
		src: '/logos/wearecasino.png',
		category: ['all', 'slots', 'bingo']
	},
	{
		title: 'Xpg',
		src: '/logos/xpg.png',
		category: ['all', 'live-dealer']
	},
	{
		title: 'Zeus Play',
		src: '/logos/zeus-play.png',
		category: ['all', 'slots']
	}
]

const currentPosts = computed(() => {
	const newPosts = posts.filter(item => item.category.includes(currentFilter.value))
	return limitPostsState.value ? newPosts.slice(0, limitPosts) : newPosts
})
function changeLimit() {
	limitPostsState.value = !limitPostsState.value
}
</script>
<template>
	<section id="featuredGamePartners" class="px-4 mx-auto w-full bg-white">
		<div class="py-10 px-0 sm:pt-32 sm:pb-28">
			<div class="sm:w-10/12 w-full my-0 mx-auto">
				<h2 class="text-orange-500 text-center font-black text-4xl sm:text-5xl mb-8 sm:mb-12">
					Featured Game Partners
				</h2>
				<div class="flex flex-col items-center">
					<ul class="sm:mb-14 sm:text-center sm:pl-3 mb-8 list-none">
						<li
							v-for="item in providers"
							:key="item"
							class="menu text-black cursor-pointer capitalize select-none inline-block text-sm pr-3 mr-2 relative leading-8 last:pr-0 last:mr-0"
							:class="item === currentFilter ? 'active' : ''"
						>
							<span @click="changeFilter(item)">{{ item }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="g-blocks relative overflow-hidden full">
				<div class="flex flex-wrap justify-center">
					<div
						v-for="post in currentPosts"
						:key="post.title"
						:data-img-name="post.title"
						class="border border-solid border-gray-200 p-4 h-20 w-36 h-24 sm:w-48 sm:h-24 rounded-md cursor-pointer mb-4 mx-2.5 flex justify-center items-center trans transition-all hover:shadow-md hover:border-none"
					>
						<img alt="partners" class="game-block-img object-contain w-full h-full lazyLoad isLoaded" :src="post.src" />
					</div>
				</div>
			</div>
			<div :class="limitPostsState ? 'rotate' : ''">
				<div class="divider flex justify-center bg-gray-200 w-full h-px my-16 relative hover:bg-orange-500">
					<div
						@click="changeLimit"
						class="arrow-block cursor-pointer bg-white w-16 h-5 absolute flex justify-center fill-current text-gray-500 hover:text-orange-500 -top-1 m-0"
					>
						<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10.6941 10.5976L18.9966 2.37592C19.2685 2.10655 19.2681 1.67043 18.9952 1.4015C18.7225 1.13279 18.2806 1.13348 18.0085 1.40289L10.2002 9.1352L2.39185 1.40261C2.11974 1.13324 1.67815 1.13254 1.40533 1.40122C1.26858 1.53603 1.2002 1.71264 1.2002 1.88925C1.2002 2.06541 1.26812 2.24132 1.40393 2.37589L9.70622 10.5976C9.83693 10.7273 10.0148 10.8001 10.2002 10.8001C10.3855 10.8001 10.5632 10.7271 10.6941 10.5976Z"
								fill="currentColor"
								stroke="currentColor"
							></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>
<style scoped>
ul li:after {
	content: '|';
	position: absolute;
	right: 0;
}
.menu.active span {
	color: #37a1fc;
}
.rotate {
	--tw-rotate: 180deg;
	transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
		skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
</style>
