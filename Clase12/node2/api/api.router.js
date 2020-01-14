const express = require('express');
const router = express.Router();

router.get('/posts', (req, res) => {
  // El Parametro del userId llega en req.query (req.query.userId)
  const userId = parseInt(req.query.userId, 10);
  const posts = req.data.posts.filter(post => {
    return post.userId === userId;
  })

  res.json(posts);
});

router.get('/comentarios', (req, res) => {
  // El Parametro del userId llega en req.query (req.query.userId)
  const id = parseInt(req.query.postId, 10);
  const comentarios = req.data.comentarios.filter(comentarios => {
    return comentarios.postId === id;
  })

  res.json(comentarios);
});

router.post('/login', (req, res) => {
  const encontrado = req.data.usuarios.find(usuario => {
    return usuario.nombre === req.body.usuario && usuario.clave === req.body.clave;
  })

  if (encontrado) {
    res.json(encontrado);
  } else {
    res.sttus(401).end();
  }
  
});

module.exports = router;