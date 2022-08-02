const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const ventas_anuladas = db.define(
    'ventas_anuladas',
    {
        idventa:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'idventa' //Nombre del campo en la base de datos
        },
        usuario:{
            type: DataTypes.INTEGER,
            allowNull: false,
            field: 'usuario' //Nombre del campo en la base de datos
        },
        descripcion:{
            type: DataTypes.STRING(250),
            allowNull: false,
            field: 'descripcion' //Nombre del campo en la base de datos
        },
        fechahora:{
            type: DataTypes.DATE,
            allowNull: false,
            field: 'fechahora' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas_anuladas',
        timestamps: false
    }
);
module.exports = ventas_anuladas;