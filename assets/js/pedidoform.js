document.getElementById("pedidoForm").addEventListener("submit", function(event){
    event.preventDefault(); // Evita que el formulario se envíe de forma convencional
    
    var formData = new FormData(this);
    
    // Realiza una solicitud AJAX para enviar los datos del formulario al servidor
    fetch('procesar_pedido.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if(response.ok) {
            alert('Pedido enviado correctamente');
            // Puedes redirigir al usuario a una página de confirmación o realizar otras acciones
        } else {
            alert('Error al enviar el pedido');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al enviar el pedido');
    });
});
