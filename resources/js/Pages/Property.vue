<template>
	<NavBar></NavBar>
	<Ticker></Ticker>
</template>

<script>
import NavBar from "../Components/NavBar";
import Ticker from "../Components/Ticker";
export default {
	components: {Ticker, NavBar},
	props: ["test"],
};
</script>