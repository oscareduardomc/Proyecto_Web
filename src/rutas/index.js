const { Router } = require('express');
const { body, query } = require('express-validator');
const controladorInicio = require('../controladores/controladorInicio')
const ControladorDetale = require('../controladores/controladorDetalle')
const rutas = Router();
rutas.get('/', controladorInicio.Inicio);
rutas.get('/detalle/listar', ControladorDetale.Listar);
module.exports = rutas;