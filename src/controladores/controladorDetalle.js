const Detalle = require('../modelos/modeloDetalle');
const { validationResult } = require('express-validator');
const msjRes = require('../../src/componentes/mensaje');
var swal = require( 'sweetalert');




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

exports.Actualizar = async (req, res) => {
  const {id} = req.params;
  const data = req.body;
  const selector = {where:{id:id}}
  await Detalle.update(data,selector).catch(error=>console.log(error))
  res.redirect('http://localhost:4306/app/detalle/listar')
}

exports.create = async (req, res) => {
  res.render('createDetalle')
}
exports.Modificar = async (req, res) => {
  const {id} = await req.params;
  const detalle = await Detalle.findOne({
    where:{
      id:id
    },
    raw:true
  }).catch(error=>console.log(error))
  res.render('modificarDetalle', {detalle})
}

exports.Guardar = async (req, res) => {

  const {  cantidad, impuesto, grabadoExento, numeroFactura, codigoProducto, precio, preciooriginal } = await req.body;  
  
        const detalle = await Detalle.create({

          cantidad,
          numeroFactura,
          codigoProducto,
          precio,
          preciooriginal,
          impuesto,
          grabadoExento
        }).catch(error=>console.log(error));
        console.log(detalle)
      await res.redirect('http://localhost:4306/app/detalle/listar');

  }








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