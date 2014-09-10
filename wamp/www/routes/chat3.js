//incarc pluginul care lucreaza cu baza de date
var MySQLPool = require("mysql-pool").MySQLPool;

//setez detaliile de configurare. 
//Pentru exemplul de fata am configurat un pool de conexiuni de dimensiune 4,
//adica se pot face 4 requesturi simultan 
var pool = new MySQLPool({
	poolSize: 4,
	user:     "root", 
	password: "",
	database: "tema_web",
	host: "127.0.0.1",
	port: "3306"
});


exports.del = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	
	
	var query = "Select user_id from users where username like '"+username+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			//console.log(rows[0].user_id);
			var query = "Delete from log_in where user_id='"+rows[0].user_id+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			var result=[];
			for(var i=0;i<rows.length;i++)
			    result[i]=rows[i].group_id;
			res.end(JSON.stringify(result));
		}
			});	
			
		}
	});
};

exports.tk3 = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	
	
	var query = "Select user_id from users where username like '"+username+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			//console.log(rows[0].user_id);
			var query = "Select user_id from users ";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			var result=[];
			for(var i=0;i<rows.length;i++)
			    result[i]=rows[i].user_id;
			res.end(JSON.stringify(result));
		}
			});	
			
		}
	});
};

exports.tk4 = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	
	
	var query = "Select user_id from users where username like '"+username+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			//console.log(rows[0].user_id);
			var query = "Select user_id from users ";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			var result=[];
			for(var i=0;i<rows.length;i++)
			    result[i]=rows[i].user_id;
			res.end(JSON.stringify(result));
		}
			});	
			
		}
	});
};

exports.prf = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var num=req.params.num;
	
	var query = "Select user_id from users where username like '"+num+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			//console.log(rows[0].user_id);
			var query = "Select first_name,last_name,work_at,school,live_in,`e_mail` from profile where user_id='"+rows[0].user_id+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			
			var  result=[];
			result[0]=rows[0].first_name;
			result[1]=rows[0].last_name;
			result[2]=rows[0].work_at;
			result[3]=rows[0].school;
			result[4]=rows[0].live_in;
			result[5]=rows[0].e_mail;
			res.end(JSON.stringify(result));
		}
			});	
			
		}
	});
};


exports.msg = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var msg=req.params.msg;
	msg.replace(/\%20/g,"+");
	var usr=req.params.usr;
	var query = "Select user_id from users where username like '"+username+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			//console.log(rows[0].user_id);
			var idd=rows[0].user_id;
			var query = "Select user_id from users where username like '"+usr+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			var dst=rows[0].user_id;
			//console.log(grp);
			query="INSERT into  messages (sursa,dest,message) VALUES('"+idd+"','"+dst+"','"+msg+"')";
			pool.query(query, function(err, rows2, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			var result=[];
			for(var i=0;i<rows2.length;i++)
			    result[i]=rows2[i].friend_id;
			res.end(JSON.stringify(result));
			}
			});
		}
			});	
			
		}
	});
};