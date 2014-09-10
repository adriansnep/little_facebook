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

exports.change = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var nume = req.params.nume;
	var prenume = req.params.prenume;
	var munca = req.params.munca;
	var scoala = req.params.scoala;
	var loc = req.params.loc;
	var mail = req.params.mail;
	
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
			console.log(rows[0].user_id);
			var query = "UPDATE profile SET first_name = '"+nume+"',last_name='"+prenume+"',work_at='"+munca+"',school='"+scoala+"',live_in='"+loc+"',e_mail='"+mail+"'  where user_id='"+rows[0].user_id+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			res.end(JSON.stringify([1]));
		}
			});	
			
		}
	});
};

exports.old_pass = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var old_pass = req.params.old_pass;
	console.log("aaa");
	
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
			var query = "Select username from users   where user_id='"+rows[0].user_id+"' and password='"+old_pass+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			if(rows.length>0)
			{
			res.end(JSON.stringify(2));
		}
		if(rows.length==0)
			{
			res.end(JSON.stringify(1));
		}
		}
			});	
			
		}
	});
};
exports.new_pass = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var new_pass = req.params.new_pass;
	
	console.log("aavv");
	
	var query = "Select user_id from users where username like '"+username+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		res.header("Content-Type:","application/json");
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
		console.log(rows[0].user_id);
			//daca nu, trimit datele inapoi
            //res.end(JSON.stringify(rows));
			var query = "UPDATE users SET password='"+new_pass+"' where user_id='"+rows[0].user_id+"'";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
		
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			res.end(JSON.stringify(2));
		}
			});	
			
		}
	});
};

exports.details= function(req, res, next) {
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
			var query = "Select first_name,last_name,work_at,school,live_in,e_mail from profile where user_id='"+rows[0].user_id+"'";
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