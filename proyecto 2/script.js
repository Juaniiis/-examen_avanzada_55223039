const API_URL = 'https://fakestoreapi.com/products';
const container = document.getElementById('productContainer');
const searchInput = document.getElementById('searchInput');
let products = [];

fetch(API_URL)
  .then(response => response.json())
  .then(data => {
    products = data;
    mostrarProductos(products);
  })
  .catch(error => console.error('Error al cargar productos:', error));


function mostrarProductos(lista) {
  container.innerHTML = '';
  lista.forEach(producto => {
    const card = document.createElement('div');
    card.className = 'product-card';
    card.innerHTML = `
      <img src="${producto.image}" alt="${producto.title}">
      <h3>${producto.title}</h3>
      <p><strong>Precio:</strong> $${producto.price}</p>
      <p><strong>Categoría:</strong> ${producto.category}</p>
    `;
    container.appendChild(card);
  });
}

searchInput.addEventListener('input', () => {
  const filtro = searchInput.value.toLowerCase();
  const filtrados = products.filter(p =>
    p.category.toLowerCase().includes(filtro)
  );
  mostrarProductos(filtrados);
});
