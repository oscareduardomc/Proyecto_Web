const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const VentasCredito = db.define(
    'ventacredito',
    {
        idCredito:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: false,
            allowNull: false,
            field: 'IdCredito' //Nombre del campo en la base de datos
        },
        idVenta:{
            type: DataTypes.STRING(20),
            allowNull: false,
            field: 'IdVenta' //Nombre del campo en la base de datos
        },
        Activo:{
            type: DataTypes.TINYINT(1),
            allowNull: false,
            default: 1,
            field: 'Activo' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventacredito',
        timestamps: false
    }
);
module.exports = VentasCredito;