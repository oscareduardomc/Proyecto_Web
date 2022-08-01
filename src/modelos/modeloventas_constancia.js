const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const VentasConstancia = db.define(
    'ventas_constancia',
    {
        numero_factura:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'numero_factura' //Nombre del campo en la base de datos
        },
        numero_constancia:{
            type: DataTypes.STRING(20),
            allowNull: false,
            field: 'numero_constancia' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas_constancia',
        timestamps: false
    }
);
module.exports = VentasConstancia;