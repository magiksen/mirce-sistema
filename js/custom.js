// Ocultar campos de bolívares y dólares y que se muestren solo si eligen que es pago
var pago = $('#pago');
console.log(pago);
var pagoValor = pago.val();
console.log(pagoValor);
var divBolivares = $('.bolivares');
var divDolares = $('.dolares');
if (pagoValor == 'Sin pago') {
	divBolivares.hide()
	divDolares.hide()
}


$('#pago').on('change', function() {
	var pagoValue = this.value;
  	// console.log(pagoValue);
  	if (pagoValue == 'Con pago') {
  		$('.dolares').show();
  		$('.bolivares').show();
  	} else {
  		$('.dolares').hide();
  		$('.bolivares').hide();
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
} );