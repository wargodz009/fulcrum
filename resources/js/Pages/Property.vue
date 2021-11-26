<template>
	<NavBar :address="loc.address"
					:win_bid="loc.win_bid"
					:last_bid_diff="loc.last_bid_diff"></NavBar>
	<Ticker :property_id="loc.id" :user_id=1 :address="loc.address[0]"></Ticker>
	<SaleSign :address="loc.address"
						:win_bid="loc.win_bid"
						:last_bid_diff="loc.last_bid_diff"></SaleSign>
	<Button position="left" :link="prev"></Button>
	<Button position="right" :link="next"></Button>
</template>

<script>
import NavBar from "../Components/NavBar";
import Ticker from "../Components/Ticker";
import SaleSign from "../Components/SaleSign";
import Button from "../Components/Button";

export default {
	components: {Button, SaleSign, Ticker, NavBar},
	props: {
		loc: Object,
		next: String,
		prev: String,
	}
};
</script>