const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const Compras = db.define(
    'compras',
    {
        id:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'CodigoCompra' //Nombre del campo en la base de datos
        },
        nombreCompra:{
            type: DataTypes.STRING(50),
            allowNull: false,
            field: 'NombreCargo' //Nombre del campo en la base de datos
        },
        descripcionCompra:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'DescripcionCargo' //Nombre del campo en la base de datos
        },
        fecha:{
            type: DataTypes.TEXT,
            allowNull: true,
            field: 'DescripcionCargo' //Nombre del campo en la base de datos
        },descripcionCompra:{
            type: DataTypes.TEXT,
            allowNull: true,
            field: 'DescripcionCargo' //Nombre del campo en la base de datos
        },
        descripcionCompra:{
            type: DataTypes.TEXT,
            allowNull: true,
            field: 'DescripcionCargo' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'Compra',
        timestamps: false
    }
);
module.exports = Compra;