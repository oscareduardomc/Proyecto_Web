const { Router } = require('express'); 
const { body, query } = require('express-validator');
const ControladorSag = require ('../controladores/controladorSag');
const rutas = Router();


rutas.get('/listar', ControladorSag.Listar);
rutas.post('/guardar', ControladorSag.Guardar);
rutas.get('/create', ControladorSag.create);

module.exports = rutas;