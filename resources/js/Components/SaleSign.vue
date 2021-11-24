<template>
	<div class="sign">
		<div class="grid">
			<div class="div1"> </div>
			<div class="div2"><div class="title">
				<img src="/images/house-icon.png" alt="">
				Public Auction
			</div></div>
			<div class="div3"> </div>
			<div class="div4">
				<div class="content">
					<div class="market">
						<p>Market Value $40,000</p>
					</div>
					<div class="address">
						<p>14 Flood St</p>
						<p class="address-small">New Orleans, LA 70122</p>
					</div>
					<div class="bid">
						<p>Reserve Bid $5,000</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: ["test"],
};
</script>

<style scoped>
.sign {
	width: 382px;
	height: 371px;
	position: absolute;
	top:  50%;
	left: 50%;
	transform: translate(-50%,-50%);
	background: url("/images/store.png");
}
.title {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 300;
	font-size: 23px;
	line-height: 34px;
	text-align: center;
	letter-spacing: 1px;
	color: #171518;
}
.title img {
	left: 43px;
	position: absolute;
	top: 7px;
}
.market {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 300;
	font-size: 21px;
	line-height: 31px;
	height: 32px;
	text-align: center;
	letter-spacing: 2.33333px;
	color: #171518;
}
.address {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 200;
	font-size: 22px;
	line-height: 33px;
	text-align: center;
	letter-spacing: 1.83333px;
	color: #171518;
}
.address-small {
	font-size: 15px;
	line-height: 18px;
}
.grid {
	width: 100%;
	height: 100%;
	display: grid;
	grid-template-columns: repeat(10, 1fr);
	grid-template-rows: repeat(10, 1fr);
	grid-column-gap: 8px;
	grid-row-gap: 8px;
}
.bid {
	font-family: Poppins,serif;
	font-style: normal;
	font-weight: 200;
	font-size: 14.4px;
	line-height: 22px;
	text-align: center;
	letter-spacing: 1.6px;
}
.div1 {
	grid-area: 1 / 1 / 2 / 2;
}
.div2 {
	grid-area: 1 / 2 / 2 / 11;
	background: rgba(255, 255, 255, 0.66);
	mix-blend-mode: normal;
	opacity: 0.85;
}
.div3 { grid-area: 2 / 1 / 11 / 2; }
.div4 {
	grid-area: 2 / 2 / 11 / 11;
	padding: 10px;
}
.div4 .content {
	background: rgba(255, 255, 255, 0.86);
	border: 4.416px solid #052DEA;
	border-radius: 17.664px;
	opacity: 0.85;
	mix-blend-mode: normal;
}
.div4 .content div {
	padding: 10px 0px;
}
</style>