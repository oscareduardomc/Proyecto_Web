const { Router, application } = require('express'); 
const { body, query } = require('express-validator');
const ControladorVentas = require ('../controladores/controladorVentas');
const rutas = Router();


rutas.get('/listar', ControladorVentas.Listar);
rutas.post('/guardar', ControladorVentas.Guardar);
rutas.get('/create', ControladorVentas.create);

module.exports = rutas;