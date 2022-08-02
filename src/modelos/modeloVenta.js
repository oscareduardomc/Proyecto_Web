const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const Venta = db.define(
    'ventas',
    {
        idregistro:{
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false,
            field: 'idregistro' //Nombre del campo en la base de datos
        },
        NumeroFactura:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'NumeroFactura' //Nombre del campo en la base de datos
        },
        idcai:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'idcai' //Nombre del campo en la base de datos
        },
        idCliente:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'idCliente' //Nombre del campo en la base de datos
        },
        TipoPago:{
            type: DataTypes.ENUM('Contado','Credito'),
            allowNull: false,
            field: 'TipoPago' //Nombre del campo en la base de datos
        },
        Usu:{
            type: DataTypes.INTEGER,
            allowNull: false,
            field: 'Usu' //Nombre del campo en la base de datos
        },
        TEfectivo:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'TEfectivo' //Nombre del campo en la base de datos
        },
        TTarjeta:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'TTarjeta' //Nombre del campo en la base de datos
        },
        Mesero:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'Mesero' //Nombre del campo en la base de datos
        },
        DescuentoTercera:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'DescuentoTercera' //Nombre del campo en la base de datos
        },
        Descuento:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Descuento' //Nombre del campo en la base de datos
        },
        Anular:{
            type: DataTypes.TINYINT(4),
            allowNull: true,
            field: 'Anular' //Nombre del campo en la base de datos
        },
        cierre:{
            type: DataTypes.INTEGER(11),
            allowNull: true,
            field: 'cierre' //Nombre del campo en la base de datos
        },
        Estacion:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'Estacion' //Nombre del campo en la base de datos
        },
        fechahoraini:{
            type: DataTypes.DATE,
            allowNull: true,
            field: 'fechahoraini' //Nombre del campo en la base de datos
        },
        fechahora:{
            type: DataTypes.DATE,
            allowNull: true,
            field: 'fechahora' //Nombre del campo en la base de datos
        },
        propina:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'propina' //Nombre del campo en la base de datos
        },
        totalventa:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'totalventa' //Nombre del campo en la base de datos
        },
        Exento:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Exento' //Nombre del campo en la base de datos
        },
        Impuesto15:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Impuesto15' //Nombre del campo en la base de datos
        },
        Impuesto18:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Impuesto18' //Nombre del campo en la base de datos
        },
        Exonerado:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Exonerado' //Nombre del campo en la base de datos
        }
    },
    {
        tableName: 'ventas',
        timestamps: false
    }
);
module.exports = Venta;