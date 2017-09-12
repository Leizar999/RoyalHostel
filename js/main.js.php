<?php
	header('Content-Type: application/javascript');
	session_start();
?>

// Pago por PayPal

$("#paypal-button").on("click", function(e){
	//alert("eso es!");
});

paypal.Button.render({

    env: 'sandbox', // Or 'sandbox'

    client: {
        sandbox: '',
        //production: 'xxxxxxxxx'
    },

    commit: true, // Show a 'Pay Now' button

    payment: function(data, actions) {
        return actions.payment.create({
            transactions: [
                {
                    amount: { total: '<?php echo isset($_SESSION['total']) ? str_replace("€", "", $_SESSION['total']) : "0.00"; ?>', currency: 'EUR' }
                }
            ]
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {

			window.location.replace("/programa/insertarReserva.php");

        });
    }

}, '#paypal-button');
