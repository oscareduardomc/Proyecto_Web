const { Router, application } = require('express'); 
const { body, query } = require('express-validator');
const ControladorDetalle = require ('../controladores/controladorDetalle');
const rutas = Router();


rutas.get('/listar', ControladorDetalle.Listar);
rutas.post('/guardar', ControladorDetalle.Guardar);
rutas.post('/eliminar', ControladorDetalle.Eliminar);
rutas.post('/modificar', ControladorDetalle.Modificar);
rutas.get('/create', ControladorDetalle.create);
module.exports = rutas;