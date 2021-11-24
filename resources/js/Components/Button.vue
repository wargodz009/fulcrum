<template>
	<div class="button">
		<div :class=position>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		position: String,
		link: String
	},
};
</script>

<style>
.button {
	z-index: 3;
}
.left {
	width: 41px;
	height: 205px;
	left: 0;
	position: absolute;
	top:  50%;
	transform: translate(0, -50%);
	background: url("/images/left-dial.png");
}
.right {
	width: 41px;
	height: 205px;
	top:  50%;
	right: 0;
	transform: translate(0, -50%);
	position: absolute;
	background: url("/images/right-dial.png");
}
</style>