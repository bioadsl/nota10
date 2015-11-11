// Show, Hide para a descrição do livro
$(document).ready(function(){
	$('.additional_description_link').click(function(){
    	$(this).siblings('.additional_description').toggle(200);
    	return false;
	});
});

$(function() {
    $(document).tooltip();
});

$(document).ready(function(){
	$('.product_form').submit(function(event){
		var dados = $(this).serialize();
		
		$.ajax({
			method: 'post',
			url: this.action,
			data: dados,
			success: function(result){
				$("#sliding_cart").html(result);
			}
		});		
		return false; // Evita que o form seja enviado
	}).ajaxStart(function(){
//		$(this).siblings('.wpsc_loading_animation').css('visibility', 'visible');
		$('.cart_message').slideDown(2000);
	}).ajaxStop(function(){
//		$('.wpsc_loading_animation').css('visibility', 'hidden');
	    $('.cart_message').slideUp(3000);
	});
});

function emptyCart(){
	$.ajax({
		method: 'post',
		url: 'carrinho',
		data: {operacao : 'removeAll'},
		success: function(result){
			$("#sliding_cart").html(result);
		}
	}).ajaxStart(function(){
		$('.cart_message').slideDown(2000);
	}).ajaxStop(function(){
	    $('.cart_message').slideUp(3500);
	});
}
