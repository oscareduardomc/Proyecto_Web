const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const VentasSag = db.define(
    'ventas_sag',
    {
        numero_factura:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'numero_factura' //Nombre del campo en la base de datos
        },
        numero_sag:{
            type: DataTypes.STRING(20),
            allowNull: false,
            field: 'numero_sag' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas_sag',
        timestamps: false
    }
);
module.exports = VentasSag;
