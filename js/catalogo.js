$(document).ready(function(){
	var getheight = $(".catalogo_contenido").css("height");
	$(".catalogo_line").css({"height":getheight});
	catalogo_select();
});

function catalogo_select(){
	$(".catalogo_img").click(function(){
		var id = $(this).data("id");
		$(".gradillas[on='yes']").hide();
		$(".catalogo_line").fadeOut();
		$(this).animate({opacity:"1"});
		$(".catalogo_img").not(this).animate({opacity:"0.25"});
		$(".catalogo_contenido_texto").fadeOut(function(){
			$(".izquierda").addClass("offset-s4");
			$(".derecha,.izquierda").animate({
				marginLeft:0
			},400,function(){
				
			});
			$(".derecha,.izquierda").removeClass("offset-s4");
			$(".derecha,.izquierda").removeClass("s4");
			$(".derecha,.izquierda").addClass("s12");
			$(".contenido_div").removeClass("s12");
			$(".contenido_div").addClass("s4");
			$(".gradilla_"+id).fadeIn(200);
			$(".gradilla_"+id).attr("on","yes");

		});
		
	
		
	});
}