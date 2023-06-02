const express = require("express");
const path = require("path");
const app = express();
const bodyparser = require("body-parser");
const mongoose = require('mongoose');

main().catch(err => console.log(err));

async function main() {
    await mongoose.connect('mongodb://127.0.0.1:27017/contactDance');

const port = 80;

//define mongoose schema
    const contactSchema = new mongoose.Schema({
        name: String,
        phone: String,
        email: String,
        address: String,
        desc: String,

    });

    const contact = mongoose.model('contact', contactSchema);


// Express specific stuff
app.use('/static',express.static('static'))  // for serving static files
app.use(express.urlencoded())

// PUG Specific stuff
app.set('view engine', 'pug')  //Set the template engine as pug
app.set('views', path.join(__dirname , 'views'))  //set the views directory

// Endpoints
app.get('/',(req,res)=>{
    
    const params ={}
    res.status(200).render('home.pug',params);
})

app.get('/contact',(req,res)=>{
    
    const params ={}
    res.status(200).render('contact.pug',params);
})

    app.post('/contact', (req, res) => {

        var mydata = new contact(req.body);
        mydata.save().then(()=>{
            res.send("This item has been saved to the database")
        }).catch(()=>{
            res.status(400).send("Item was not saved to the database")
        })
        // res.status(200).render('contact.pug');
    })

//Start the server
app.listen(port,()=>{
    console.log(`The application started successfully on port ${port}`);
});
}