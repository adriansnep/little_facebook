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

exports.auten = function(req, res, next) {
	//setez headerele pentru access local
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "X-Requested-With");
	
	var username = req.params.username;
	var password = req.params.password;
	
	
	
	var query = "Select user_id,username, password from users where username like '"+username+"' and password like '"+password+"'";
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
			
			if(rows.length>0)
			{
				res.end(JSON.stringify(2));
				var query = "INSERT INTO  log_in(user_id) VALUES('"+rows[0].user_id+"')";
	//execut query-ul in baza de date. Deoarece Node.JS si JavaScript sunt asincrone, trebuie sa dau ca parametru un callback
	pool.query(query, function(err, rows, fields) {					 
		
		if (err) {
			//daca am eroare, scriu in consola serverului mesajul si intorc o lista de mesaje goala
			console.log(err+"");			 
			res.end(JSON.stringify([]));
		} else {
			//ok
			
		}
			});	
			}
			
				else
				res.end(JSON.stringify(1));
		}
	});
};