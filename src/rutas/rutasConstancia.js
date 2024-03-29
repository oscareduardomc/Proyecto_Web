const { Router } = require('express'); 
const { body, query } = require('express-validator');
const ControladorConstancia = require ('../controladores/controladorConstancia');
const rutas = Router();


rutas.get('/listar', ControladorConstancia.Listar);
rutas.post('/guardar', ControladorConstancia.Guardar);
rutas.get('/create', ControladorConstancia.create);

module.exports = rutas;