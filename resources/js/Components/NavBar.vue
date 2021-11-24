<template>
	<div>
		<div>
			<ul>
				<li>
					<span><img src="/images/view.png" alt=""></span>
				</li>
				<li>
					<span>Own</span>
					<span class="bigger">14 Flood St.</span>
					<span>New Orleans, LA 7022</span>
					<span><img src="/images/bundle.png" alt=""></span>
				</li>
				<li>
					<span><img src="/images/pin.png" alt=""></span>
				</li>
				<li>
					<span>To</span>
					<span class="bigger">Start</span>
					<span>Place Deposit</span>
				</li>
				<li>
					<span><img src="/images/bookmark.png" alt=""></span>
				</li>
				<li>
					<span>Market Value $40,000</span>
					<span class="bigger">$5,000</span>
					<span>Reserve Price</span>
				</li>
				<li>
					<span><img src="/images/home.png" alt=""></span>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	props: ["test"],
};
</script>

<style scoped>
ul {
	display: flex;
	align-content: center;
	justify-content: center;
	align-items: center;
	height: 240px;
}
ul > li {
	flex: 1;
	text-align: center;
}
li > span {
	color: #484848;
	display: flex;
	justify-content: center;
	font-style: normal;
	font-weight: 200;
	font-size: 18px;
	line-height: 27px;
	letter-spacing: 2px;
}
li > span.bigger {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 300;
	font-size: 46px;
	line-height: 69px;
	text-align: center;
	letter-spacing: 2px;
	color: #171518;
}
</style>