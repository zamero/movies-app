# Mötesanteckningar u05 grupp 2

## Sprint 1

design + börja jobba med vyer

**31/1-23 - Första möte:**


Frågor till gruppen: 


- Skapa en .devcontainer-mapp, pusha upp så att alla kan klona ner repo [ y] :  
Samme fixade!

- Ska vi göra fler personas samt fller user-stories? [ n ]

- Vem gör vad första veckan med designen?  [ y ]  : 
Samme gör homepage design, Joselyn gör kategorisida design


- Ska vi bestämma när vi ska ha våra “scrum-möten”?  [ y ]:
 Måndagar 12:30 och onsdagar 12:30


- Sitemap: 
Oscar, Bager ,Viktoria,Joselyn


**2/2-23 - Scrum-möte:**

Frågor till gruppen: 

- Hur har det gått med designen hittills? Sitemaps och Hemsida-Kategorisida? [ v]
- Sitemaps e klar vi använder Joselyns
- Samme ska fortfarande styla home-page


- Ska vi börja jobba med vyerna (views)? Dessa bör vi väl göra utifrån Hemsida-designen och Kategori-designen som Samme och Joselyn gjort? [ v]
- Efter att home-page är klar 


- Hur gör vi wireframes, 1 hand-skiss och 1 Figma. Vilka gör dem, och för vilka sidor ska vi göra wireframes? [v ]
- Bager gör wireframes:en efter att home-page är klar


- Vi alla bör läsa igenom kravspecifikationen, där User Persona och User Stories finns för att bestämma hur vi ska utforma sidorna. [v ] 
- Vi läser alla på om dessa till nästa sprint


-Vore najs att börja skriva saker i “Project” i vårt repository på gitHub, göra till “issues” samt assigna uppgifter [ v]
- 1 sprint i taget



**Extra möte imorgon fredag 3/2 kl 11:15**



**3/2-23 - Extra Scrum-möte:**
Fortsätta som vi gör.


**Planering av Sprint 2:**

- Kodstruktur: ska vi använda branches eller inte? [ v]

- User och admin har en varsin User profile

- Vi bestämde vilka views vi skulle göra och vem som skulle göra vad:


**Bager** - wireframe/ help center

**Joselyn** - kategorier
**Samme** - home page +

**Oscar** - user profile (admin & user)

**Viktoria** - register/log in

**Saliem** - Film view sidan

- Views ska vara klara senast Fredag 10/2

Varje sida ska ha en egen branch!


# Sprint 2

**6/2-23 - Scrum-möte:**

Views ska vara klara till på fredag 
Wireframes kommer snart vara klara (både low-fi och high-fi)


**10/2-23 - Scrum-möte samt planering av Sprint 3:**

- Vi mergar! En i taget! 

Homepage [v]
Login [v]
Register [v]
FilmView [v]
Kategori [v]
User/admin [  ]
Helpcenter [  ]



Saker att diskutera inför sprint 3:

Kodstandard:

Alla ska ändra i sin .env fil så alla har samma databaskopplingar, lösen etc. - - - Databas skapad: Chasmovies


Model och Migration: 


I Users behöver vi ändra: Lägga till authentication i 
 users_table_migration för admin vs user (typ så här :$table->string(‘role’))
	
Watchlist Modell & Migration:
	
Film/Serie Modell & Migration
	
Definiera Routes: i web.php


Controller: hur många och för vad? 
- UserController
- AdminController



# Sprint 3

**13/2-23 - Scrum-möte:**


- Merga resten av views!
User/admin [ v]
Helpcenter [ v]

Borde vi installera breeze innan vi gör modeller/controllers/routes 
- JA

Vi använde breeze 


Installera breeze
Gör migration : userAddRole och lägg till funktioner från slidsen (up() och down())
Lägg till role i RegisteredUserController (...controllers/Auth)
Lägg till role i Model fillable
i view dashboard lägg in script (you’re logged in as…) typ:



Button: make admin? -> Skickas till en controller som ändrar role.


Gör fler Modeller, Migrationer och Controllers

Watchlist - modell & migration
Film/series - modell & migration
RegisteredUserController (Skapas automatiskt med breeze)


**14/2-23 - Scrum-möte:**

Osäker på om vi ska använda breeze över huvud taget.. [ skiter i ] 

Gör fler Modeller, Migrationer och Controllers

Watchlist - modell & migration
Film/series - modell & migration
UserController ( funktioner för users och admin såsom createMovie(), storeUser() med hash password, login(), register())

Admin - createMovieShows(), updateMovieShows(), deleteMovieShows(), CRUD för användare (admin eller vanliga) CRUD för kommentarer och watchlist, login(), register(), 
User - CRUD sina egna kommentarer och Watchlist


Möte med handledarna:

Vi pratade om att det är viktigt att vi strukturerar upp våra veckor noga nu de sista två veckorna, att alla försöker att komma på våra bestämda möten och att vi alla bidrar till projektets framfart.

Lägger till scrum-möten:

 Måndagar 12:30, onsdagar 12:30 och fredagar 11:00


**15/2-23 - Scrum-möte kl 8:**

Vi använder breeze!


Vad vi behöver göra från och med nu:

- Lägga till olika behörigheter för admin och vanlig user i RegisteredUserController.php ('role' => 1,)

- CRUD för admin i (ProfileController???): 
Create movies/shows, 
readAll movies/shows, 
update movies shows, 
delete movies shows.
readAll comments, 
delete comments
readAll watchlists för en specifik user, 
ge roller till users, 
delete/blocka users


- CRUD för users  (ProfileController???):
readAll movies/shows, 
Create watchlists, 
update watchlists, 
delete watchlists
readAll comments, 
Create comments, 
update comments,
delete comments




Arbetsfördelning:

Bager - 
Joselyn - 
Samme - roles för admin och user
Oscar - 
Viktoria - Förslag på CRUD-funktioner
Saliem - URI:s för admin och user


NYTT!!!:
Vi kör Scrummöte varje veckodag

Måndagar: 12:30-13:00
Tisdagar: 11:00:-11:30
Onsdagar: 12:30-13:00
Torsdagar: 12:30-13:00
Fredagar: 11:00-11:30




Deadlines i sprint 3: 

Onsdag - roles och URI:s





**16/2-23 - Scrum-möte kl 12:30:**

Frågor:

- Lägga till Comment - Model & migration [V]

- Lägga till Genre - Model & migration [V]

- Lägga till “img”-kolumn till filmer och tv-serier i migrations?  [ ]
 
- Vi borde göra ett ER-diagram för att kunna hantera Eloquent ORM (foreign keys, 1-M, 1-1 relations osv)  [v]

- Lägga till Eloquent ORM saker i modellerna och i migrationerna…. (foreign keys osv)  [v]

- Kör php artisan migrate:refresh för att uppdatera kolumnerna i databasen  [ v]

- Ska vi köra seeders så blir det lättare att massinlägga filmer, serier, användare etc?
  Kan bara göras när vi känner oss klara med controllers, migrations och Models  [ ]




**17/2-23 - Scrum-möte kl 12:30:**

Frågor:


- Lägga till “img”-kolumn till filmer och tv-serier i migrations?  [ ]

- Ska vi köra seeders så blir det lättare att massinlägga filmer, serier, användare etc?
  Kan bara göras när vi känner oss klara med controllers, migrations och Models  [ ]

- Vi borde fixa till dashboard för admin vs user  [ ]

Vi fortsätter med CRUD för admin



# Sprint 4

**Deadlines i sprint 4:**


Måndag -
Tisdag - 
Onsdag - CRUD funktionalitet klar kl 09:00
Torsdag -
Fredag -


**20/2-23 - Scrum-möte:**

Arbetsfördelning:

Viktoria tar Update CRUD för movies shows, user

Samme och Oscar tar dashboard CRUD (bara admin)


Saliem och Bager tar Watchlist CRUD och readOneMovie (till film-view.blade) (bara vanlig user)


Joselyn tar Comment CRUD (både User och admin) (i RegisteredUserController.php)



**21/2-23 - Scrum-möte:**

Fortsätta med uppgifter från måndagen
Oscar och Bager finputsar på help center-bladen.

**21/2-23 - Möte med handledarna:**

Forsätta som vi gör, vara nogranna med gitHub projects



**23/2-23 - Scrum-möte:**


**24/2-23 - Scrum-möte:**

Agenda för dagen:


Genre??? Koppla till filmer, serier och watchlists.

Recensioner (Vi gör det BARA om vi får tid över-  vi har ju redan kommentarer)


Från kravspecifikationen:


Arbetsfördelning:

Samme & Viktoria & Oscar tar Genre (i egen branch )
Bager tar Home-page länkar och buttons a-tags (i egen branch)
Saliem tar lägga till registerknapp på /login (i egen branch)
Joselyn?



# Sprint 5

**Deadlines i sprint 5:**

Måndag - Klara med arbetsuppgifterna från 24/2
Tisdag - Oscar och Bager klara med sina arbetsuppgifter från 24/2
Onsdag - Prova deployment!?
Torsdag -
Fredag  

**27/2-23:**

Möte med handledarhanna kl 09:00:

- Vi gör Actors bara om vi hinner, men verkar tydligen inte vara ett starkt krav från Sebastians sida.

- Försöker fixa Watchlist-problematiken, inte löst…


**Scrum-möte kl 13:00:**

Agenda :

- Hur har det gått med uppgifterna?


- Mergea brancher: “updatecrud”, “comment”, [ v]



**28/2-23 - Scrum-möte:**

Checkin med handledarhanna kl 13:00:

Försöker få watchlist problematiken att fungera


**1/3-23 - Scrum-möte kl 10:00:**