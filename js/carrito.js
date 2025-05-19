const botones = document.querySelectorAll('.producto btn_preg btn_car');
const listaCarrito = document.getElementById('lista-carrito');
const totalSpan = document.getElementById('total');
const finalizarBtn = document.getElementById('finalizar');

let carrito = [];
let total = 0;

botones.forEach(boton => {
  boton.addEventListener('click', (e) => {
    const producto = e.target.parentElement;
    const nombre = producto.dataset.nombre;
    const precio = parseFloat(producto.dataset.precio);

    carrito.push({ nombre, precio });
    actualizarCarrito();
  });
});

function actualizarCarrito() {
  listaCarrito.innerHTML = '';
  total = 0;

  carrito.forEach((item, index) => {
    total += item.precio;
    const li = document.createElement('li');
    li.textContent = `${item.nombre} - $${item.precio.toFixed(2)}`;
    listaCarrito.appendChild(li);
  });

  totalSpan.textContent = total.toFixed(2);
}

finalizarBtn.addEventListener('click', () => {
  const metodoPago = document.querySelector('input[name="pago"]:checked').value;
  if (carrito.length === 0) {
    alert('Tu carrito está vacío.');
    return;
  }
  alert(`Gracias por tu compra de $${total.toFixed(2)}. Método de pago: ${metodoPago.toUpperCase()}`);
  carrito = [];
  actualizarCarrito();
});