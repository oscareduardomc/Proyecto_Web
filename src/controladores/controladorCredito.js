const Ventas_Credito = require('../modelos/modeloventa_credito');
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
exports.Buscar = async (req, res) => { 
  const {id} = await req.params;
  const credito = await Ventas_Credito.findOne({
    where:{
      IdCredito:id
    },
    raw:true
  }).catch(error=>console.log(error))
  res.render('creditoBuscar', {credito})
}
exports.Listar = async (req, res) => {   //Esta es listar 
    // var msj = {
    //   mensaje: ''
    // }
    // try {
  
  
    //   req.getConnection((err, conn) => {
    //     if (err) return res.send(err)
  
    //     conn.query('SELECT * FROM ventacredito', (err, rows) => {
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

     const lista = await Ventas_Credito.findAll();
  // res.json(lista);
  console.log(lista)
  res.render('creditoListar', {
    titulo: 'Credito',
    lista,
  });
}

//GUARDAR

exports.Guardar = async (req, res) => {
    // const validaciones = validationResult(req);
    // console.log(validaciones.errors[0]);
    // console.log(req.body);
    // const {  IdCredito, IdVenta, Activo } = req.body;
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
    //     if (!IdVenta) {
    //       await Ventas_Credito.create({
    //         IdVenta: IdVenta,
  
    //       });
    //     } else {
    //       await Ventas_Credito.create({
  
    //         idCredito: IdCredito,
    //         idVenta: IdVenta,
    //         Activo: Activo
    //       });
    //     }
  
    //     msj.mensaje = 'Registro Guardado correctamente';
  
    //   } catch (error) {
    //     console.error(error);
    //     msj.mensaje = 'Error Al Guardar los Datos ';
    //   }
  
    // }
    // res.json(msj);

    const { IdVenta, Activo } = await req.body;  // const { nombre } = req.body;
  
          const credito = await Ventas_Credito.create({
  
            IdVenta,
            Activo
            
          }).catch(error=>console.log(error));
          console.log(credito)
        await res.redirect('http://localhost:4306/app/credito/listar');
};

exports.create = async (req, res) => {
  res.render('creditoGuardar')
};
