const Ventas_Exenta = require('../modelos/modeloventas_exenta');
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


//LISTAR

exports.Listar = async (req, res) => {   //Esta es listar 
    // var msj = {
    //   mensaje: ''
    // }
    // try {
  
  
    //   req.getConnection((err, conn) => {
    //     if (err) return res.send(err)
  
    //     conn.query('SELECT * FROM ventas_constancia', (err, rows) => {
    //       if (err) return res.send(err)
  
    //       res.json(rows)
    //     })
    //   })
    // } catch (error) {
    //   console.error(error);
    //   msj.mensaje = (error);
    //   msj.mensaje = 'Ocurrio un error';
    //   res.json(msj);
    // }

    const lista = await Ventas_Exenta.findAll();
    // res.json(lista);
    console.log(lista)
    res.render('exentaListar', {
      titulo: 'Exentas',
      lista,
    });
}

//GUARDAR



exports.Guardar = async (req, res) => {
    // const validaciones = validationResult(req);
    // console.log(validaciones.errors[0]);
    // console.log(req.body);
    // const {  numero_factura, numero_orden } = req.body;
    // // const { nombre } = req.body;
    // var msj = {
    //   mensaje: ''
    // };
    // if (validaciones.errors.length > 0) {
    //   validaciones.errors.forEach(element => {
    //     msj.mensaje += element.msg + ' . ';
  
    //   });
  
    // } else {
    //   try {
    //     if (!numero_factura) {
    //       await Ventas_Exenta.create({
    //         numero_factura: numero_factura,
  
    //       });
    //     } else {
    //       await Ventas_Exenta.create({
  
    //         numero_factura: numero_factura,
    //         numero_orden: numero_orden
    //       });
    //     }
  
    //     msj.mensaje = 'Registro Guardado correctamente';
  
    //   } catch (error) {
    //     console.error(error);
    //     msj.mensaje = 'Error Al Guardar los Datos ';
    //   }
  
    // }
    // res.json(msj);

    const {  numero_factura, numero_orden } = await req.body;  // const { nombre } = req.body;
  
          const exenta = await Ventas_Exenta.create({
  
            numero_factura,
            numero_orden

          }).catch(error=>console.log(error));
          console.log(exenta)
        await res.redirect('http://localhost:4306/app/exenta/listar');
};

exports.create = async (req, res) => {
  res.render('exentaGuardar')
};
