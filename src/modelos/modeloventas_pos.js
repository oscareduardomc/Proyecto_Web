const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const ventas_pos = db.define(
    'ventas_pos',
    {
        idRegistro:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'idRegistro' //Nombre del campo en la base de datos
        },
        idventa:{
            type: DataTypes.INTEGER,
            allowNull: false,
            field: 'idventa' //Nombre del campo en la base de datos
        },
        idpos:{
            type: DataTypes.INTEGER,
            allowNull: true,
            field: 'idpos' //Nombre del campo en la base de datos
        },
        referencia:{
            type: DataTypes.STRING(45),
            allowNull: false,
            field: 'referencia' //Nombre del campo en la base de datos
        },
        numerotarjeta:{
            type: DataTypes.STRING(45),
            allowNull: true,
            field: 'numerotarjeta' //Nombre del campo en la base de datos
        },
        valor:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'valor' //Nombre del campo en la base de datos
        },
        nombrepropietario:{
            type: DataTypes.INTEGER,
            allowNull: true,
            field: 'nombrepropietario' //Nombre del campo en la base de datos
        },
        idmarca:{
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