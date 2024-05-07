<script setup>
import Header from '@/components/header'
import Footer from '@/components/footer'
</script>
<template>
	<div class="root">
		<Header />
		<slot />
		<Footer />
	</div>
</template>
<style scoped></style>
