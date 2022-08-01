const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const ventas_pos = db.define(
    'cargo',
    {
        idRegistro:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'idRegistro' //Nombre del campo en la base de datos
        },
        idVenta:{
            type: DataTypes.INTEGER,
            allowNull: false,
            field: 'idVenta' //Nombre del campo en la base de datos
        },
        idPos:{
            type: DataTypes.INTEGER,
            allowNull: true,
            field: 'idpos' //Nombre del campo en la base de datos
        },
        referencia:{
            type: DataTypes.STRING(45),
            allowNull: false,
            field: 'referencia' //Nombre del campo en la base de datos
        },
        tarjeta:{
            type: DataTypes.STRING(45),
            allowNull: true,
            field: 'numerotarjeta' //Nombre del campo en la base de datos
        },
        valor:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'valor' //Nombre del campo en la base de datos
        },
        propietario:{
            type: DataTypes.INTEGER,
            allowNull: true,
            field: 'nombrepropietario' //Nombre del campo en la base de datos
        },
        idMarca:{
            type: DataTypes.INTEGER,
            allowNull: true,
            field: 'idmarca' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas_pos',
        timestamps: false
    }
);
module.exports = ventas_pos;