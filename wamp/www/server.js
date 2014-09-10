var express = require('express'),
    autentificare = require('./routes/auten'),
	profile = require('./routes/profil'),
	chat = require('./routes/chat'),
	chat2 = require('./routes/chat2'),
	chat3 = require('./routes/chat3'),
	port = 2345;
 
var app = express();

//activam posibilitatea de a lua parametrii JSON de la utilizatori
app.use(express.bodyParser());

//definim rutele

app.post('/autentificare/:username/:password', autentificare.auten);
//////
app.post('/profile/:username/:nume/:prenume/:munca/:scoala/:loc/:mail', profile.change);
app.post('/profile/:username/:old_pass', profile.old_pass);
app.post('/profile/:username/:new_pass/:nv', profile.new_pass);
app.post('/profile/:username', profile.details);

//////
app.post('/chat/:username', chat.grp);
app.post('/chat/:username/:id', chat.grp2);
////
app.post('/chat2/:username/:nume', chat2.grp);
app.post('/chat2/:id', chat2.grp2);
app.post('/chat2/:username/:nume/:ivv', chat2.frd_req);
//
app.post('/chat3/:username', chat3.del);
app.post('/chat3/:username/:vr', chat3.tk3);
app.post('/chat3/:username/:vr/:vcc', chat3.tk4);
app.post('/chat3/:username/:vr/:vcc/:num', chat3.prf);
app.post('/chat3/:username/:vr/:vcc/:num/:usr/:msg', chat3.msg);

app.listen(port);
console.log('Listening on port ' + port + '...');