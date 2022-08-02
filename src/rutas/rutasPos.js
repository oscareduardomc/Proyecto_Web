const { Router, application } = require('express'); 
const { body, query } = require('express-validator');
const ControladorPos = require ('../controladores/controladorPos');
const rutas = Router();


rutas.get('/listar', ControladorPos.Listar);
rutas.post('/guardar', ControladorPos.Guardar);
rutas.get('/create', ControladorPos.create);
module.exports = rutas;