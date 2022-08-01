// exports.Inicio = (req, res) =>{
//     res.send("Hola");
// }
// exports.Home = (req, res) =>{
//     const titulo = 'Ejemplo vista en node js';
//     res.render('home', {
//         titulo,
//     });
// }
exports.Inicio = (req, res) =>{
    const titulo = 'Este es el inicio';
    res.render('inicio', {
        titulo,
    });
}