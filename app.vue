<script setup>
import { provide } from 'vue'
useServerSeoMeta({
	title: () => 'Prime Networks Game Aggregation Platform',
	meta: [{ name: 'robots', content: 'noarchive' }]
})
const showFormPopUp = ref(false)
const showClientPopUp = ref(false)
provide('formPopUpState', showFormPopUp)
provide('clientPopUpState', showClientPopUp)
provide('changeStateFormPopUp', changeStateFormPopUp)
provide('changeClientPopUpState', changeClientPopUpState)
function changeStateFormPopUp(flag) {
	showFormPopUp.value = flag
}
function changeClientPopUpState(flag) {
	showClientPopUp.value = flag
}
</script>
<template>
	<div>
		<NuxtLayout>
			<NuxtPage />
		</NuxtLayout>
	</div>
</template>
