const { Router } = require('express'); 
const { body, query } = require('express-validator');
const ControladorCredito = require ('../controladores/controladorCredito');
const rutas = Router();


rutas.get('/listar', ControladorCredito.Listar);
rutas.post('/guardar', ControladorCredito.Guardar);
rutas.get('/create', ControladorCredito.create);
rutas.get('/buscar/:IdCredito', ControladorCredito.Buscar);

module.exports = rutas;