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


exports.grp = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var num = req.params.nume;
	
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
			var query = "Select group_id from groups where name='"+num+"' and user_id='"+rows[0].user_id+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			var grp=rows[0].group_id;
			//console.log(grp);
			query="Select friend_id from users_groups  where group_id='"+grp+"' and user_id='"+idd+"'";
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

exports.grp2 = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var id=req.params.id;
	
			var query = "Select username from users where user_id='"+id+"'";
			//console.log(id);
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
			    result[i]=rows[i].username;
			res.end(JSON.stringify(result));
		}
			});	
			
	
};
exports.frd_req = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var num=req.params.nume;
	
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
			var query = "INSERT INTO  friend_req(usr_name,friend_name) VALUES('"+num+"','"+username+"')";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			
			res.end(JSON.stringify([]));
		}
			});	
			
		}
	});
};

