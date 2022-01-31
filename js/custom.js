// // Ocultar campos de bolívares y dólares y que se muestren solo si eligen que es pago
// var pago = $('#pago');
// //console.log(pago);
// var pagoValor = pago.val();
// //console.log(pagoValor);
// var divBolivares = $('.bolivares');
// var divDolares = $('.dolares');
// if (pagoValor == 'Sin pago') {
// 	divBolivares.hide()
// 	divDolares.hide()
// }


$('#pago').on('change', function() {
	var pagoValue = this.value;
  	// console.log(pagoValue);
  	if (pagoValue == 'Con pago') {
  		$('.dolarLabel').text("Monto en $");
  		$('.bolivarLabel').text("Monto en Bs.");
  	} else {
  		$('.dolarLabel').text("Deuda en $");
  		$('.bolivarLabel').text("Deuda en Bs.");
  	}
});

$( function() {
	$( "#fecha" ).datepicker({
		dateFormat: "dd-mm-yy",
		dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jeueves", "Viernes", "Sábado" ],
		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		dayNamesShort: [ "Dom", "Lun", "Mar", "Mir", "Jue", "Vie", "Sab" ],
		monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
		monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
	});
	$( "#fechados" ).datepicker({
		dateFormat: "dd-mm-yy",
		dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jeueves", "Viernes", "Sábado" ],
		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		dayNamesShort: [ "Dom", "Lun", "Mar", "Mir", "Jue", "Vie", "Sab" ],
		monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
		monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
	});
});

// Verificar pagina activa
$('.nav-item a').filter(function(){
  return this.href === location.href;
}).addClass('active');

$('#cat_padre').change(function(){
   var cat_selected = $(this).val();
   console.log(cat_selected);
   if (cat_selected == 'Principal') {
   	$('.hideOnSelect').show();
   } else {
   	$('.hideOnSelect').hide();
   }
});

   