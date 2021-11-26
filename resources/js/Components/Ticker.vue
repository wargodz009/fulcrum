<template>
	<div class="ticker">
		<div class="end_set">
			<div class="content">
				<ul>
					<li class="title">Outbid</li>
					<li class="red">{{ticker.MyBid.Outbid}}</li>
				</ul>
				<ul>
					<li class="title">Active</li>
					<li class="gray">{{ticker.MyBid.Active}}</li>
				</ul>
				<ul>
					<li class="title">Winning</li>
					<li class="green">{{ticker.MyBid.Winning}}</li>
				</ul>
			</div>
		</div>
		<div>
			<div class="content-double">
				<ul>
					<li class="title double arrow-up">14 Flood St.</li>
					<li class="green">{{ticker.MyBidVsProperty.Winning}}</li>
					<li class="gray">{{ticker.MyBid.ActivePrice}}</li>
				</ul>
				<ul>
					<li class="title double arrow-down">24 Washington ave.</li>
					<li class="red">{{ticker.MyBidVsProperty.Outbid}}</li>
					<li class="gray">{{ticker.MyBid.ActivePrice}}</li>
				</ul>
				<ul>
					<li class="title double arrow-middle">24 Washington ave.</li>
					<li class="">{{ticker.MyBidVsProperty.Active}}</li>
					<li class="gray">{{ticker.MyBid.ActivePrice}}</li>
				</ul>
				<ul>
					<li class="title double arrow-up">57 West ave G.</li>
					<li class="green">{{ticker.MyBidVsProperty.Current}}</li>
					<li class="gray">{{ticker.MyBid.ActivePrice}}</li>
				</ul>
			</div>
		</div>
		<div class="end_set">
			<div class="content">
				<ul>
					<li class="title">Winning</li>
					<li class="green">{{ticker.PropertyBid.Winning}}</li>
				</ul>
				<ul>
					<li class="title">Active</li>
					<li class="gray">{{ticker.PropertyBid.Active}}</li>
				</ul>
				<ul>
					<li class="title">Outbid</li>
					<li class="red">{{ticker.PropertyBid.Outbid}}</li>
				</ul>
			</div>
		</div>
	</div>
</template>

<script>
import {onBeforeMount, ref} from "vue";

export default {
	props: {
		property_id: Number,
		user_id: Number
	},
	setup(props) {
		const ticker = ref([])
		const tickerData = async () => {
			const response = await fetch(`/api/property/${props.property_id}`);
			const data = await response.json();
			ticker.value = data;
		}
		onBeforeMount(()=> {
			setInterval(() => {
				tickerData()
			}, 1000)
		})
		return {
			ticker,
			tickerData
		}
	}
};
</script>

<style scoped>
div.ticker {
	background: rgba(255, 255, 255, 0.5);
	display: flex;
	align-items: center;
}
div.ticker > div {
	height: 60px;
	flex: 1;

}
div.ticker > div.end_set {
	max-width: 402px;
	background: #FFFFFF;
}
div.content {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	height: 100%;
	align-items: center;
}
.content-double {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	height: 100%;
	align-items: center;
}
.content-double ul {
	display: flex;
	flex-wrap: wrap;
	justify-content: flex-start;
}
.content-double ul > li:first-child {
	flex: 0 0 100%;
}
.content-double ul > li:not(:first-child) {
	margin: 0 10px;
}
.content-double ul > li {
	position: relative;
}
.red {
	color: #E91C1C;
}
.gray {
	color: #484848;
}
.green {
	color: #00EB3E;
}
.title {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 500;
	font-size: 18px;
	line-height: 19px;
	letter-spacing: 0.782609px;
}
.arrow-up:before {
	content: '◥';
	position: absolute;
	left: -23px;
	color: #00EB3E;
}
.arrow-down:before {
	content: '◢';
	position: absolute;
	left: -23px;
	color: #E91C1C;
}
.arrow-middle:before {
	content: '▶';
	position: absolute;
	left: -23px;
	color: #484848;
}
</style>