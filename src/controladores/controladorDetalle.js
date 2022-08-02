const Detalle = require('../modelos/modeloDetalle');
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

  const lista = await Detalle.findAll();
  // res.json(lista);
  console.log(lista)
  res.render('detalleListar', {
    titulo: 'Detalle',
    lista,
  });
}




exports.Guardar = async (req, res) => {
  const validaciones = validationResult(req);
  console.log(validaciones.errors[0]);
  console.log(req.body);
  const {  Cantidad, impuesto, grabadoExento, numerofactura, codigoProducto, Precio, preciooriginal } = req.body;
  // const { nombre } = req.body;
  var msj = {
    mensaje: ''
  };
  if (validaciones.errors.length > 0) {
    validaciones.errors.forEach(element => {
      msj.mensaje += element.msg + ' . ';

    });

  } else {
    try {
      if (!Cantidad) {
        await Detalle.create({
          cantidad: Cantidad,

        });
      } else {
        await Detalle.create({

          cantidad: Cantidad,
          numeroFactura: numerofactura,
          codigoProducto: codigoProducto,
          precio: Precio,
          preciooriginal: preciooriginal,
          impuesto: impuesto,
          grabadoexento: grabadoExento
        });
      }

      msj.mensaje = 'Registro Guardado correctamente';

    } catch (error) {
      console.error(error);
      msj.mensaje = 'Error Al Guardar los Datos ';
    }

  }
  res.json(msj);
};


//MODIFICAR


exports.Modificar = async(req, res) => {
  const validaciones = validationResult(req);
  console.log(validaciones.errors[0]);
  console.log(req.body);
  const { id } = req.query;
  const { Cantidad, impuesto, grabadoExento, numeroFactura, codigoProducto, Precio, preciooriginal } = req.body;

  const msj = {

      mensaje: ""

  };

  if (validaciones.errors.length > 0) {
      validaciones.errors.forEach(element => {
          msj.mensaje += element.msg + ' . ';

      });
  } else {
      try {

          var buscarDetalle = await Detalle.findOne({
              where: {
                  idregistro: id
              }
          });
          if (!buscarDetalle) {
            buscarDetalle.cantidad = Cantidad;
            buscarDetalle.codigoproducto = codigoProducto;
          } else {

              
              if (!buscarDetalle) {
                  msj.mensaje = 'No Existe el  Codigo de detalle Especificado';
              } else {

                buscarDetalle.cantidad = Cantidad;
                buscarDetalle.codigoproducto = codigoProducto;
                buscarDetalle.NumeroFactura = numeroFactura;
                buscarDetalle.precio = Precio;
                buscarDetalle.preciooriginal = preciooriginal;
                buscarDetalle.impuesto = impuesto;
                buscarDetalle.grabadoexento = grabadoExento;

                  await buscarDetalle.save();
                  msj.mensaje = 'Registro Modificado Correctamente!!';

              }

          }
      } catch (error) {
          console.error(error);
          msj.mensaje = 'Error Al Modificar los Datos';
      }
  }
  res.json(msj);
};


//ELIMINAR



exports.Eliminar = async(req, res) => {
  const validaciones = validationResult(req);
  console.log(validaciones.errors[0]);
  console.log(req.body);
  const { id } = req.query;
  const msj = {

      mensaje: ""

  };

  if (validaciones.errors.length > 0) {
      validaciones.errors.forEach(element => {
          msj.mensaje += element.msg + ' . ';

      });

  } else {
      try {
          var buscarDetalle = await Detalle.findOne({
              where: {
                  id: id
              }

          });
          if (!buscarDetalle) {
              msj.mensaje = 'No Existe el ID Del Registro';
          } else {
              await buscarDetalle.destroy({
                  where: {
                      id: id
                  }

              });

              msj.mensaje = 'Registro Eliminado correctamente';
          }
      } catch (error) {
          console.error(error);
          msj.mensaje = 'ERROR!! Al Eliminar los Datos ';
      }

  }
  res.json(msj);
};