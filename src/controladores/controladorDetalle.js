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
  const {idregistro} = await req.params;
  const data =  req.body;
  const selector = {where:{idregistro:idregistro} }
  await Detalle.update(data,selector).catch(error=>console.log(error))
  res.redirect('http://localhost:4306/app/detalle/listar')
}

exports.create = async (req, res) => {
  res.render('detalleGuardar')
}

exports.Modificar = async (req, res) => {
  const {idregistro} = await req.params;
  const detalle = await Detalle.findOne({
    where:{
      idregistro:idregistro
    },
    raw:true
  }).catch(error=>console.log(error))
  res.render('modificarDetalle', {detalle})
}

exports.Guardar = async (req, res) => {

  const {  NumeroFactura, CodigoProducto, Cantidad, Precio, preciooriginal, impuesto, grabadoExento} = await req.body;  
  
        const detalle = await Detalle.create({

          NumeroFactura,
          CodigoProducto,
          Cantidad,
          Precio,
          preciooriginal,
          impuesto,
          grabadoExento
          
        }).catch(error=>console.log(error));
        console.log(detalle)
      await res.redirect('http://localhost:4306/app/detalle/listar');

  }








//ELIMINAR



exports.Eliminar = async(req, res) => {
  const {idregistro} = await req.params;
  const detalle = await Detalle.destroy({
    where:{
      idregistro:idregistro
    },
    raw:true
  }).catch(error=>console.log(error))
  
  res.redirect('http://localhost:4306/app/detalle/listar')
};