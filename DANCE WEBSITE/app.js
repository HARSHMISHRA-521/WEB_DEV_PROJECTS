const express = require("express");
const path = require("path");
const app = express();
const port = 80;


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

//Start the server
app.listen(port,()=>{
    console.log(`The application started successfully on port ${port}`);
})