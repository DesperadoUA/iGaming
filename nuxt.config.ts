// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
	devtools: { enabled: true },
	experimental: {
		defaults: {
			nuxtLink: {
				trailingSlash: 'remove'
			}
		}
	},
	app: {
		head: {
			charset: 'utf-8',
			viewport: 'width=device-width, initial-scale=1',
			link: [
				{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
				{ rel: 'preconnect', href: 'https://fonts.googleapis.com' },
				{ rel: 'preconnect', href: 'https://fonts.gstatic.com' },
				{ href: 'https://fonts.googleapis.com/css2?family=Unbounded:wght@400;600;800&display=swap', rel: 'stylesheet' }
			]
		}
	},
	css: ['~/assets/variables.css', '~/assets/style.css'],
	router: {
		options: {
			scrollBehaviorType: 'smooth'
		}
	},
	modules: ['@nuxt/ui']
})
