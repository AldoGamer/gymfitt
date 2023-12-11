const express = require('express');
const app = express();
const port = 3000;

app.use(express.static('public'));
app.use(express.urlencoded({ extended: true }));

app.set('view engine', 'ejs');

app.get('/', (req, res) => {
    res.render('home');
});

app.get('/recetas', (req, res) => {
    res.render('recetas');
});

app.get('/formulario', (req, res) => {
    res.render('formulario');
});



app.listen(port, () => {
    console.log(`El servidor está escuchando en http://localhost:${port}`);
});
