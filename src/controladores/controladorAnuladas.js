const Ventas_Anuladas = require('../modelos/modeloventas_anuladas');
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

    const lista = await Ventas_Anuladas.findAll();
    // res.json(lista);
    console.log(lista)
    res.render('anuladasListar', {
      titulo: 'Anuladas',
      lista,
    });
}

//GUARDAR

exports.Guardar = async (req, res) => {

    const {  usuario, descripcion, fechahora } = await req.body;  // const { nombre } = req.body;
  
          const pos = await Ventas_Anuladas.create({
  
            usuario,
            descripcion,
            fechahora

          }).catch(error=>console.log(error));
          console.log(pos)
        await res.redirect('http://localhost:4306/app/anuladas/listar');
    }
