const Ventas_Constancia = require('../modelos/modeloventas_constancia');
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

    const lista = await Ventas_Constancia.findAll();
    // res.json(lista);
    console.log(lista)
    res.render('constanciaListar', {
      titulo: 'Constancia',
      lista,
    });
}

//GUARDAR



exports.Guardar = async (req, res) => {
    const validaciones = validationResult(req);
    console.log(validaciones.errors[0]);
    console.log(req.body);
    const {  numero_factura, numero_constancia } = req.body;
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
        if (!numero_constancia) {
          await Ventas_Constancia.create({
            numero_constancia: numero_constancia,
  
          });
        } else {
          await Ventas_Constancia.create({
  
            numero_factura: numero_factura,
            numero_constancia: numero_constancia
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
    const { numeroFactura, numero_constancia } = req.body;
  
    const msj = {
  
        mensaje: ""
  
    };
  
    if (validaciones.errors.length > 0) {
        validaciones.errors.forEach(element => {
            msj.mensaje += element.msg + ' . ';
  
        });
    } else {
        try {
  
            var buscarConstancia= await Ventas_Constancia.findOne({
                where: {
                    numero_factura: id
                }
            });
            if (!buscarConstancia) {
                buscarVenta.numero_sag = numero_sag;
            } else {
  
                
                if (!buscarConstancia) {
                    msj.mensaje = 'No Existe el  Codigo Usuario Especificado';
                } else {
  
                    buscarConstancia.numero_factura = numeroFactura;
                    buscarConstancia.numero_constancia = numero_constancia;
  
                    await buscarConstancia.save();
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
            var buscarConstancia = await Ventas_Constancia.findOne({
                where: {
                    numero_factura: id
                }
  
            });
            if (!buscarConstancia) {
                msj.mensaje = 'No Existe el ID Del Registro';
            } else {
                await buscarConstancia.destroy({
                    where: {
                        numero_factura: id
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
  
