const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const VentasExenta = db.define(
    'ventas_exenta',
    {
        id:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: false,
            allowNull: false,
            field: 'numero_factura' //Nombre del campo en la base de datos
        },
        numeroOrden:{
            type: DataTypes.STRING(20),
            allowNull: false,
            field: 'numero_orden' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas_exenta',
        timestamps: false
    }
);
module.exports = VentasExenta;