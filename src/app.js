const express = require('express');
const morgan = require('morgan');
const path = require('path');
const { engine } = require('express-handlebars');
require('dotenv').config();
const app = express();
const mysql = require('mysql2')
const myconn = require('express-myconnection') ;
app.engine('handlebars', engine());
app.set('view engine', 'handlebars');
app.set('views', path.join(__dirname, './views'));
app.use('/public' , express.static(path.join(__dirname, 'public/')));
app.use(morgan("common"));
app.use(express.urlencoded({extended: false}));
app.use(express.json());
const dbOptions = {
    host: '127.0.0.1',
    port: 3306,   //puerto que esta utulizando la base
    user: 'root',  //usuario
    password: '', //contrasenna
    database: 'sifcon'   //nombre de pase
}

app.use(myconn(mysql, dbOptions, 'single'))

app.use('/app/', require('./rutas/index'));
app.use('/app/detalle', require('./rutas/RutasDetalle'));
app.use('/app/sag', require('./rutas/rutasSag'));
app.use('/app/constancia', require('./rutas/rutasConstancia'));
app.use('/app/credito', require('./rutas/rutasCredito'));
app.use('/app/ventas', require('./rutas/rutasVentas'));
app.use('/app/exenta', require('./rutas/rutasExenta'));
app.use('/app/pos', require('./rutas/rutasPos'));
app.use('/app/anuladas', require('./rutas/rutasAnuladas'));
app.set('port',4306); 

app.listen(app.get('port'), () => {  
    console.log('Servidor iniciado en el puerto ' + app.get('port'));
    
});