const { Router, application } = require('express'); 
const { body, query } = require('express-validator');
const ControladorAnuladas = require ('../controladores/controladorAnuladas');
const rutas = Router();


rutas.get('/listar', ControladorAnuladas.Listar);
rutas.post('/guardar', ControladorAnuladas.Guardar);
module.exports = rutas;