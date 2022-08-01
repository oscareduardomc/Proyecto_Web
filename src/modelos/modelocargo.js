const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const Cargo = db.define(
    'cargo',
    {
        id:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'CodigoCargo' //Nombre del campo en la base de datos
        },
        nombre:{
            type: DataTypes.STRING(50),
            allowNull: false,
            field: 'NombreCargo' //Nombre del campo en la base de datos
        },
        descripcion:{
            type: DataTypes.TEXT,
            allowNull: true,
            field: 'DescripcionCargo' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'cargos',
        timestamps: false
    }
);
module.exports = Cargo;