<template>
	<NavBar></NavBar>
	<Ticker></Ticker>
	<SaleSign></SaleSign>
	<Button position="left" link="#1"></Button>
	<Button position="right" link="#2"></Button>
</template>

<script>
import NavBar from "../Components/NavBar";
import Ticker from "../Components/Ticker";
import SaleSign from "../Components/SaleSign";
import Button from "../Components/Button";
export default {
	components: {Button, SaleSign, Ticker, NavBar},
	props: ["test"],
};
</script>