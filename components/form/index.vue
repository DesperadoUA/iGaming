<script setup lang="ts">
const email = ref('')
const subject = ref('')
const brand = ref('')
const text = ref('')
const emailActivate = ref(false)
const subjectActivate = ref(false)
const brandtActivate = ref(false)
const textActivate = ref(false)
const isSendData = ref(false)
const showSuccess = ref(false)
const showError = ref(false)
import { validateEmail } from '@/validates'
async function onSubmit() {
	try {
		const res = await $fetch('/api/mail.php', {
			method: 'POST',
			body: {
				email: email.value,
				subject: subject.value,
				brand: brand.value,
				text: text.value
			}
		})
		showSuccess.value = true
		email.value = ''
		subject.value = ''
		brand.value = ''
		text.value = ''
		emailActivate.value = false
		subjectActivate.value = false
		brandtActivate.value = false
		textActivate.value = false
	} catch {
		showError.value = true
	}
	setTimeout(() => {
		showError.value = false
		showSuccess.value = false
	}, 5000)
}
const emailChange = () => {
	emailActivate.value = true
}
const subjectChange = () => {
	subjectActivate.value = true
}
const brandtChange = () => {
	brandtActivate.value = true
}
const textChange = () => {
	textActivate.value = true
}
const btnIsDisabled = computed(() => {
	return !validateEmail(email.value) || !subject.value || !brand.value || !text.value
})
</script>

<template>
	<form>
		<UFormGroup name="email" size="xl" :error="!email && emailActivate && 'You must enter an email'">
			<template #label>
				<div class="text-black pb-2">Email *</div>
			</template>
			<input
				v-model="email"
				@change="emailChange"
				class="bg-white text-black w-full h-12 border rounded-md p-2 text-xl focus:outline-none"
			/>
		</UFormGroup>
		<UFormGroup size="xl" :error="!subject && subjectActivate && 'You must enter an subject'" name="subject">
			<template #label>
				<div class="text-black pb-2 pt-2">Subject *</div>
			</template>
			<input
				v-model="subject"
				@change="subjectChange"
				class="bg-white text-black w-full h-12 border rounded-md p-2 text-xl focus:outline-none"
			/>
		</UFormGroup>
		<UFormGroup size="xl" :error="!brand && brandtActivate && 'You must enter an brand'" name="brand">
			<template #label>
				<div class="text-black pb-2 pt-2">Brand *</div>
			</template>
			<input
				v-model="brand"
				@change="brandtChange"
				class="bg-white text-black w-full h-12 border rounded-md p-2 text-xl focus:outline-none"
			/>
		</UFormGroup>
		<UFormGroup size="xl" name="text" :error="!text && textActivate && 'You must enter an message'">
			<template #label>
				<div class="text-black pb-2 pt-2">Message *</div>
			</template>
			<textarea
				v-model="text"
				@input="textChange"
				class="bg-white text-black w-full h-24 border rounded-md p-2 text-xl focus:outline-none"
			></textarea>
		</UFormGroup>
		<div class="flex justify-center py-6">
			<button
				:disabled="btnIsDisabled && !isSendData"
				type="button"
				class="py-2 px-6 rounded-md hover:opacity-75 bg-lime-500 text-white disabled:opacity-75"
				@click="onSubmit"
			>
				Submit
			</button>
		</div>
		<div class="flex justify-center py-6">
			<div class="text-lime-500" v-if="showSuccess">Success!!!</div>
			<div class="text-orange-600" v-if="showError">Server Error!!!</div>
		</div>
	</form>
</template>
