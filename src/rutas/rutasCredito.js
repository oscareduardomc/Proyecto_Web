const { Router } = require('express'); 
const { body, query } = require('express-validator');
const ControladorCredito = require ('../controladores/controladorCredito');
const rutas = Router();


rutas.get('/listar', ControladorCredito.Listar);
rutas.post('/guardar', ControladorCredito.Guardar);
rutas.post('/eliminar', ControladorCredito.Eliminar);
rutas.post('/modificar', ControladorCredito.Modificar);

module.exports = rutas;