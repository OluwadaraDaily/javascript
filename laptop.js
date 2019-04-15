$(".laptops").on("click", ".laptop-header", function(){

	$(this).toggleClass("active").next().slideToggle();
});
