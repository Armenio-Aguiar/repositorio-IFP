$(document).ready(function(){

	$('#toogle').click(function(){

		$('.list-toggle').css({
			display:'block',

		})
		$('#toogle').css({
			display:'none'
		})
		$('#show').css({
			display:'block',

		})

	})
	$('#show').click(function(){
		$('#show').css({
			display:'none',

		})

		$('#toogle').css({
			display:'block'

		})
		$('.list-toggle').css({
			display:'none',
			transition:'0.5s'

		})
	})
})