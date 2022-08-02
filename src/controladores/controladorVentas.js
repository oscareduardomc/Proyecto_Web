const Ventas = require('../modelos/modeloVenta');
const { validationResult } = require('express-validator');
const msjRes = require('../../src/componentes/mensaje');



function validacion(req) {
  const validaciones = validationResult(req);
  var errores = [];
  var error = {
    mensaje: '',
    parametro: '',
  };
  var msj = {
    estado: 'correcto',
    mensaje: 'Peticion ejecutada correctamente',
    datos: '',
    errores: ''
  };

  if (validaciones.errors.length > 0) {
    validaciones.errors.forEach(element => {
      error.mensaje = element.msg;
      error.parametro = element.param;
      errores.push(error);
    });
    msj.estado = 'precaucion';
    msj.mensaje = 'La peticion no se ejecuto';
    msj.errores = errores;

  }
  return msj;
};

exports.Listar = async (req, res) => {   //Esta es listar 
  // var msj = {
  //   mensaje: ''
  // }
  // try {


  //   req.getConnection((err, conn) => {
  //     if (err) return res.send(err)

  //     conn.query('select idregistro, NumeroFactura, CodigoProducto, Cantidad, Precio, impuesto from detalle_venta', (err, rows) => {
  //       if (err) return res.send(err)
  //       console.log(rows)
  //       // res.json(rows)
  //       res.render('detalleListar', {
  //         titulo: 'Detalle',
  //         rows,
  //     });
  //     })
  //   })
  // } catch (error) {
  //   console.error(error);
  //   msj.mensaje = (error);
  //   msj.mensaje = 'Ocurrio un error';
  //   res.json(msj);
  // }

  const lista = await Ventas.findAll();
  // res.json(lista);
  console.log(lista)
  res.render('ventaListar', {
    titulo: 'Ventas',
    lista,
  });
}


exports.create = async (req, res) => {
  res.render('createDetalle')
}


exports.Guardar = async (req, res) => {
  const validaciones = validationResult(req);
  console.log(validaciones.errors[0]);
  console.log(req.body);
  const {  numeroFactura, idcai, idCliente, tipoPago, Usu, TEefectivo, tarjeta, mesero, estacion } = await req.body;  // const { nombre } = req.body;
  var msj = {
    mensaje: ''
  };
  if (validaciones.errors.length > 0) {
    validaciones.errors.forEach(element => {
      msj.mensaje += element.msg + ' . ';

    });

  } else {
    try {
      if (!numeroFactura) {
        await Ventas.create({
          numeroFactura,

        });
      } else {
        await Ventas.create({
          numeroFactura,
          idcai,
          idCliente,
          tipoPago,
          Usu,
          TEefectivo,
          tarjeta,
          mesero,
          estacion
        });
      }

      msj.mensaje = 'Registro Guardado correctamente';
      console.log(numeroFactura)
      console.log(idcai)
      console.log(idCliente)
      console.log(tipoPago)
      console.log(Usu)
      console.log(efectivo)
      console.log(tarjeta)
      console.log(mesero)
      console.log(estacion)
      
    } catch (error) {
      console.error(error);
      msj.mensaje = 'Error Al Guardar los Datos ';
      console.log(numeroFactura)
      console.log(idcai)
      console.log(idCliente)
      console.log(tipoPago)
      console.log(Usu)
      console.log(efectivo)
      console.log(tarjeta)
      console.log(mesero)
      console.log(estacion)
    }

  }
  res.json(msj);
};