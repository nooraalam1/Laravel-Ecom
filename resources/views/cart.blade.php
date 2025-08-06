<ul id="cartList"></ul>

<script>
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    const list = document.getElementById('cartList');
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.title} (ID: ${item.id})`;
        list.appendChild(li);
    });
</script>
