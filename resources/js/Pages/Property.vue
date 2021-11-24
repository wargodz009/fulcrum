<template>
	<NavBar></NavBar>
	<Ticker></Ticker>
	<SaleSign></SaleSign>
</template>

<script>
import NavBar from "../Components/NavBar";
import Ticker from "../Components/Ticker";
import SaleSign from "../Components/SaleSign";
export default {
	components: {SaleSign, Ticker, NavBar},
	props: ["test"],
};
</script>