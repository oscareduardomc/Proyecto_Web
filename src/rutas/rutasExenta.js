const { Router, application } = require('express'); 
const { body, query } = require('express-validator');
const ControladorExenta = require ('../controladores/controladorExenta');
const rutas = Router();


rutas.get('/listar', ControladorExenta.Listar);
rutas.post('/guardar', ControladorExenta.Guardar);
rutas.get('/create', ControladorExenta.create);
module.exports = rutas;