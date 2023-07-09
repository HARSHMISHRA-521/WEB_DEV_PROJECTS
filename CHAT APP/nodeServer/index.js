//Node Server which will handle socket io connections

const express = require("express");
const cors = require("cors");

const app = express();
app.use(cors());

const server = app.listen(8080, () => {
  console.log("Server listening on port 8080");
});
// ..

const io = require("socket.io")(server);

const users = {};

io.on("connection", (socket) => {
  //If any new user joins,let other users connected to the server know!
  socket.on("new-user-joined", (names) => {
    // console.log("New user", names); -> print names in the termianl of new user
    users[socket.id] = names;
    socket.broadcast.emit("user-joined", names);
  });

  //If someone send message broadcast it to other people
  socket.on("send", (message) => {
    socket.broadcast.emit("receive", {
      message: message,
      name: users[socket.id],
    });
  });

  //If someone leaves the chat ,let others know
  socket.on("disconnect", (message) => {
    socket.broadcast.emit("left", users[socket.id]);
    delete users[socket.id];
  });
});
