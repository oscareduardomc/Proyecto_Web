const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const Detalle = db.define(
    'detalle_venta',
    {
        id:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'idregistro' //Nombre del campo en la base de datos
        },
        numeroFactura:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'NumeroFactura' //Nombre del campo en la base de datos
        },
        codigoProducto:{
            type: DataTypes.STRING(15),
            allowNull: false,
            field: 'CodigoProducto' //Nombre del campo en la base de datos
        },
        cantidad:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'Cantidad' //Nombre del campo en la base de datos
        },
        precio:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'Precio' //Nombre del campo en la base de datos
        },
        preciooriginal:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'preciooriginal' //Nombre del campo en la base de datos
        },
        impuesto:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'impuesto' //Nombre del campo en la base de datos
        },
        grabadoExento:{
            type: DataTypes.CHAR(1),
            allowNull: true,
            field: 'grabadoExento' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'detalle_venta',
        timestamps: false
    }
);

module.exports = Detalle;