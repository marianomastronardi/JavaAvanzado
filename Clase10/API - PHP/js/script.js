const search = document.querySelector('#search');
const query = document.querySelector('#query');
const main = document.querySelector('main');

const basePath = location.pathname;

window.addEventListener('popstate', e => {
    const path = location.pathname.split('/');

    if (path[path.length - 2] === 'search') {
        mostrarProductos(history.state.data);
    } else {
        mostrarProducto(history.state.data);
    }
});

query.addEventListener('keyup', e => {
    if (e.keyCode === 13) {
        search.dispatchEvent(new Event('click'));
        // search.click();
    }
});

search.addEventListener('click', e => {
    fetch(`${basePath}api/search.php?query=${query.value}`)
        .then(response => response.json())
        .then(data => {
            history.pushState({ data }, 'search', `${basePath}search/${query.value}`);
            mostrarProductos(data);
        });
});

function mostrarProductos(data) {
    main.innerHTML = '';

    if (data.length === 0) {
        const h2 = document.createElement('h2');
        h2.textContent = 'No hay resultados para su busqueda';
        main.appendChild(h2);
    } else {
        data.forEach(producto => {
            const article = document.createElement('article');
            article.className = 'producto';

            const h2 = document.createElement('h2');
            h2.textContent = producto.nombre;

            const img = document.createElement('img');
            img.src = producto.imagen;
            img.alt = producto.nombre;

            const p = document.createElement('p');
            p.textContent = producto.descripcion;

            const button = document.createElement('button');
            button.textContent = 'Comprar'

            button.addEventListener('click', e => {
                buscarProducto(producto.id);
            });

            article.appendChild(h2);
            article.appendChild(img);
            article.appendChild(p);
            article.appendChild(button);

            main.appendChild(article);
        })
    }
}

function buscarProducto(id) {
    fetch(`${basePath}api/product.php?id=${id}`)
        .then(response => response.json())
        .then(producto => {
            history.pushState({ data: producto }, 'detalle', `${basePath}detalle/${id}`);
            mostrarProducto(producto);
        });
}

function mostrarProducto(producto) {
    main.innerHTML = '';

    const article = document.createElement('article');
    article.className = 'detalle';

    const h2 = document.createElement('h2');
    h2.textContent = producto.nombre;

    const img = document.createElement('img');
    img.src = producto.imagen;
    img.alt = producto.nombre;

    const p = document.createElement('p');
    p.textContent = producto.descripcion;
    
    const punt = document.createElement('p');
    punt.textContent = producto.opiniones;
    punt.className = 'puntos';

    const comentarios = document.createElement('ul');

    producto.comentarios.forEach(comentario => {
        const li = document.createElement('li');
        li.textContent = comentario;
        comentarios.appendChild(li);
    });

    const button = document.createElement('button');
    button.textContent = 'Comprar'

    button.addEventListener('click', e => {
        alert(`Gracias por comprar el producto ${id}`);
    });

    article.appendChild(h2);
    article.appendChild(img);
    article.appendChild(p);
    article.appendChild(punt);
    article.appendChild(comentarios);
    article.appendChild(button);

    main.appendChild(article);
}