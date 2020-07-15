$(function(){
	$("#phone").inputmask({"mask": "0(999) 999-99-99"});

	$(".upperCase").keyup(function(){
	    this.value = this.value.toUpperCase();
	});

	$('#datatable').DataTable();
	



})