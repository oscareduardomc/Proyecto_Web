const Cargo = require('../modelos/modelocargo');
const { validationResult } = require('express-validator');


exports.Lista = async (req, res) => {
    const lista = await Cargo.findAll();
    // lista = JSON.stringify(lista);
    console.log(lista);
    res.render('home', {lista} );
    
};

exports.Guardar = async (req, res) => {
    const validacion = validationResult(req);
    if (validacion.errors.length>0){
        let mensaje = '';
        validacion.errors.forEach(element => {
            console.log(element);
            mensaje+=element.msg + '. ';
        });
        res.send(mensaje);
    }else{
        const {nombre, descripcion} = req.body;
        console.log(nombre);
        console.log(descripcion);
        var texto="";
        try {
            await Cargo.create({ nombre, descripcion })
            .then((data)=>{
                console.log(data);
                texto="Registro guardado";
            })
            .catch((error)=>{
                console.log(error);
                texto="error al actualiazar los datos";
            })
        } catch (error) {
            console.log(error);
            texto="error al guiardar los datos";
        }
        res.send(texto);
    }
};

exports.Modificar = async (req, res) => {
    const validacion = validationResult(req);
    if (validacion.errors.length>0){
        let mensaje = '';
        validacion.errors.forEach(element => {
            console.log(element);
            mensaje+=element.msg + '. ';
        });
        res.send(mensaje);
    }else{
        const {id} = req.query;
        const {nombre, descripcion} = req.body;
        console.log(nombre);
        console.log(descripcion);
        var texto="";
        try {
            var buscarCargo = await Cargo.findOne({
                where:{
                    id: id
                }
            });
            if(!buscarCargo){
                texto="El cargo no existe";
            }else{
                await Cargo.update({...req.body },{ where:{ id: id
                    }
                })
                .then((data)=>{
                    console.log(data);
                    texto="Registro guardado";
                })
                .catch((error)=>{
                    console.log(error);
                    texto="error al actualiazar los datos";
                });
            }           
            
        } catch (error) {
            console.log(error);
            texto="error al actualizar los datos";
        }
        res.send(texto);
    }
};

exports.Eliminar = async (req, res) => {
    const validacion = validationResult(req);
    if (validacion.errors.length>0){
        let mensaje = '';
        validacion.errors.forEach(element => {
            console.log(element);
            mensaje+=element.msg + '. ';
        });
        res.send(mensaje);
    }else{
        const {id} = req.query;
        var texto="";
        try {
            var buscarCargo = await Cargo.findOne({
                where:{
                    id: id
                }
            });
            if(!buscarCargo){
                texto="El cargo no existe";
            }else{
                await Cargo.destroy({ where:{ id: id
                    }
                })
                .then((data)=>{
                    console.log(data);
                    texto="Registro Eliminado";
                })
                .catch((error)=>{
                    console.log(error);
                    texto="error al eliminar los datos";
                });
            }           
            
        } catch (error) {
            console.log(error);
            texto="error al eliminar los datos";
        }
        res.send(texto);
    }
};