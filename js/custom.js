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