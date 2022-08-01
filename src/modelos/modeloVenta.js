const { DataTypes } = require('sequelize');
const db = require('../configuracion/db');
const Venta = db.define(
    'ventas',
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
        tipoPago:{
            type: DataTypes.ENUM('Contado','Credito'),
            allowNull: false,
            field: 'tipoPago' //Nombre del campo en la base de datos
        },
        Usu:{
            type: DataTypes.INTEGER,
            allowNull: false,
            field: 'Usu' //Nombre del campo en la base de datos
        },
        efectivo:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'TEefectivo' //Nombre del campo en la base de datos
        },
        tarjeta:{
            type: DataTypes.DOUBLE,
            allowNull: false,
            field: 'TTarjeta' //Nombre del campo en la base de datos
        },
        mesero:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'Mesero' //Nombre del campo en la base de datos
        },
        descuentoTercera:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'DescuentoTercera' //Nombre del campo en la base de datos
        },
        descuento:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Descuento' //Nombre del campo en la base de datos
        },
        anular:{
            type: DataTypes.TINYINT(4),
            allowNull: true,
            field: 'Anular' //Nombre del campo en la base de datos
        },
        cierre:{
            type: DataTypes.INTEGER(11),
            allowNull: true,
            field: 'cierre' //Nombre del campo en la base de datos
        },
        estacion:{
            type: DataTypes.INTEGER(11),
            allowNull: false,
            field: 'TTarjeta' //Nombre del campo en la base de datos
        },
        fechaHoraIni:{
            type: DataTypes.DATE,
            allowNull: true,
            field: 'fechahoraini' //Nombre del campo en la base de datos
        },
        fechaHora:{
            type: DataTypes.DATE,
            allowNull: true,
            field: 'fechahora' //Nombre del campo en la base de datos
        },
        propina:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'propina' //Nombre del campo en la base de datos
        },
        totalVenta:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'totalventa' //Nombre del campo en la base de datos
        },
        exento:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Exento' //Nombre del campo en la base de datos
        },
        impuesto15:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Impuesto15' //Nombre del campo en la base de datos
        },
        impuesto18:{
            type: DataTypes.DOUBLE,
            allowNull: true,
            field: 'Imppuesto18' //Nombre del campo en la base de datos
        },
        exonerado:{
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