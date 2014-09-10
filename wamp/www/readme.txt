                   -------------Aplicatie realizata de Snep Petru Adrian---------Grupa E213B-----An III-----------
				   
				   ---Pentru testarea si realizarea aplicatiei am folosit WAMP Server versiunea 2.2---
				   
           Pentru implementarea site-ului am folosit printre altele si tehnoogia "REST".Pentru a rula aplicatia este nevoie
     ca din 'command prompt' sa ne pozitionam pe folderul 'www'.Dam comanda "node server.js" dupa care rulam site-ul din
     chrome sau mozilla.In directorul 'routes' gasim rutele folosite pentru partea de server iar in fisierele 'autentificare.js',
     'profile.js','chat.js' se gaseste implementata partea de client. 	 
				   
				   
	 -----Pagina de home a aplicatiei-------
	 Contine o bara de navigatie cu 3 optiuni.Daca se da click pe optiunea "Home" pagina va fi reincarcata.Optiunea "Abouth" 
	 o sa incarce o noua pagina cu cateva informatii despre ceea ce inseamna de fapt un chat.Optiunea "Log in" va incarca o noua 
	 pagina in care utilizatorul are posibilitatea de a se loga sau a-si crea un nou cont.
	 
	 ----Pagina de log in a aplicatiei-----
	 
	 Pentru aceasta pagina am folosit la implementare tehnologia "REST".
	 
	 
	 Username:admin     Password:admin
	 Utilizatorul se paote loga in aplicatie folosind contul de mai sus.Daca unul din campurile "username" sau "password" nu au 
	 fost completate inainte de a apasa pe butonul login va fi afisat un mesaj corespunzator pentru logare nereusita prin intermediul
	 unui ajax.Totodata utilizatorul are posibilitatea de a-si crea un nou cont prin intermediul optiunii "Create new acount".

     ----Pagina de creare cont a aplicatiei-----

    Utilizatorul are posibilitatea de a crea un nou cont prin completarea campurilor cerute si apasarea butonului "create acount".
    Pentru realizarea codului captcha am folosit o biblioteca "open surse" numita botdetect.Am preluat din aceasta biblioteca partea
	de cod in php pentru verificare a codului introdus prin intermediul serverului precum si partea de generare a codului captcha
	de catre server.Prin modificarea fisierului "ChaptchaClass.php" am eliminat o parte din functionalitatile pe care le oferea 
	clasa pe care am folosito prin eliminarea apelului de functii din constructor.Pentru a putea realiza comunicarea cu serverul folosit 
	de mine a schimbat caile spre fisiere din fisierul "botdetect.php".Astfel partea de captcha functioneaza doar cu fisierele existente
    in folderul cu aplicatia.Pentru realizarea campurilor text am folosit atributele disponibile in css3.Singurul camp care poate 
    ramane necompletat este campul "Mobile_number".Daca butonul de creare cont este apasat inainte ca unul din celelalte campuri
    sa fie completat sau daca codul captcha introdus este gresit sau daca parola nu corespunde va fi afisat un mesaj corespunzator prin
    intermediul unui ajax.
	
	-----Pagina de chat a aplicatiei----
	 
	 Pentru aceasta pagina am folosit la implementare tehnologia "REST".
	 
	 
	Dupa ce utilizatorul s-a logat cu succes acesta se afla in pagina de chat a aplicatiei.Aceasta pagina contine un meniu cu urmatoarele
	functionalitati:Butonul "Friends" va realiza reincarcarea paginii.Pentru a realiza o conversatie utilizatorul trebuie sa faca click
	pe un prieten din lista de priteni dupa care scrie mesajul dorit in campul corespunzator si apasa fie tasta "Enter" fie butonul "Send".
	Butonul "Send a file..." nu este inca implementat.Prin apasarea butonului "Groups" in partea stanga va apare lista de grupuri iar 
	prin intermediul unui click pe un grup din lista utilizatorul poate incepe o conversatie cu grupul in timp ce in partea dreapta vor 
	apare toti membrii grupului.Butonul de "Conference" nu este implementat.Prin intermediul butonului "log out" utilizatorul poate reveni
	la pagina de home a aplicatiei.Prin apasarea butonului "Profile" va fi incarcata pagina de profil a aplicatiei.
	
	
   --------Pagina de profil a aplicatiei----
   
   Pentru aceasta pagina am folosit la implementare tehnologia "REST".
   
   Aceasta pagina ofera posbilitatea editarii profilului utilizatorului.In partea stanga sunt datele curente despre utilizator.
   Butonul "Change photo" nu este inca implememtat.Utilizatorul are posibilitatea de a adauga detalii la profilul sau prin completarea
   campurilor dorite si apasarea butonului "Change acount settings".Pentru a putea schimba parola in campul "Old password" utilizatorul
   trebuie sa introduca parola:admin.Daca nu se intampla acest lucru sau daca parola noua nu este introdusa corect va apare un mesaj
   corespunzator prin intermediul unui ajax.
   
   
      -----Am gandit aplicatia astfel incat sa fie intuitiva si usor de folosit.Pentru realizarea task-urilor am folosit atat jQuerry
   precum si javascript normal.Am incercat sa creez un design cat mai placut,un design pe care sa nu il incarc foarte mult.	  
	
    	
	