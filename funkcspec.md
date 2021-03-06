# Funkcionális Specifikáció

# Tartalom

* Áttekintés
* Jelenlegi helyzet
* Terjedelem
* Jelenlegi folyamatok modellje
* Igényelt folyamatok modellje
* Követelmény lista
* Képernyőtervek
* Adatmodell
* Használati esetek
* Forgatókönyv
* Fogalomszótár

## Áttekintés

    Egy olyan rendszert fejlesztünk, ami segíti a fiatalok tanulását, és a célunk, hogy a felhasználó a lehető legfrisebb tudáshoz jusson. 
    Lehetőségük lesz a felhasználóknak játékos formában tanulni és ezáltal az oktató színesebbé, és játékosabbá teheti az óráját. 
    Rengeteg téma közül lehet majd választani, épp ezért szinte bárki számára hasznos lesz ez az online felület. 
    Természetesen nem csak számítógépen lesz elérhető az alkalmazás, hanem célunk hogy minél több platformon hozzá lehessen férni. 
    Ez a rendszer ingyenes lesz, ezért bárki bárhonnan el tudja majd érni vagy esetleg interneten keresztül beregisztrál és máris hozzá jut a legfrissebb tudáshoz. 
    Különböző feladatok lesznek az egyes témák végén amivel a felhasználó próbára teheti a tudását. Minden ilyen feladat megoldása után az adott személy láthatja, 
    hogy mennyi pontot szerzett, és mint ez egy vissza igazolást ad a számára, hogy mennyire sikerült elsajátítania az adott témakört. 


## Jelenlegi helyzet

    A megrendelő szeretné kibővíteni az általa nyújtott oktatási szolgáltatások elérhetőségét, hogy versenytársaihoz képest így jusson piaci előnyökhöz.
    Egy új rendszer előállítását rendelte meg, amely interneten keresztül modern megoldásokat használva működik.
    A rendszer segítséget nyújt a diákok számára a tanulásban.
    A XXI. század megköveteli, hogy mindezt a hálózaton lehessen elérni.
    Eddig a megrendelő csak számítógépen való gyors írás elsajátításához használt egy Stamina nevű alkalmazást.
    Ez a fajta tanulás megtetszett a diákoknak, és a tanárok is felismerték, hogy egy játékos oktatóprogrammal eredményesebbé, szórakoztatóbbá tehetik az oktatást, mint a hagyományos, táblára írásos módszerrel.
    Ezért elkezdtek keresni számukra megfelelő, létező programokat. Találtak többet is (pl.:Kahoot), viszont ezek nem tetszettek nekik.
    Egy olyan programra lenne szükségük, amellyel a diákok önnálóan tudnak feladatot megoldani, és a többi játékos pontszámához képest tudják viszonyítani magukat.
    Ezen okokból kifolyólag megkértek minket, hogy csináljuk meg nekik a vágyott alkalmazást, ami sokkal könnyebbé teheti számukra az oktatást.




## Terjedelem

    Célunk egy olyan, a fiatalok tanulását segítő rendszer létrehozása, amely a modern technológiai eszközök (számítógép, tablet, mobiltelefon) segítségével az iskolai tananyag elsajátítására és a diákok tudásának felmérésére törekszik. A rendszer ezt játékos feladatokkal igyeszik megvalósítani.
    Cél, hogy a felhasználói felület könnyen kezelhető legyen az informatikában kevésbé jártas emberek, például az idősebb tanárok számára is, hogy ők is megkedveljék és nyitottak legyenek az újítások felé. Ezáltal a diákok tudásának ellenőrzése gyorsabban, kevesebb energia ráfordítással történne. A kitöltendő feladatok elkészítése és feltöltése a rendszerbe a tanárok feladata, ők felelősek azért, hogy tanítványaik a tudásuknak megfelelő nehézségű feladatokkal találkozzanak.
    Nem célja a rendszernek, hogy átvegye a tanár szerepét, megfosztva őt ettől és ezzel kizárva őt a tanulási folyamatból. Valamint az sem cél, hogy a diákok eszközöket kapjanak a puskázáshoz.


## Jelenlegi folyamatok modellje

    A mai világban az oktatás nem használja ki a már meglévő technológiákat arra, hogy a tanulást sokkal szórakoztatóbbá és interaktívabbá tegye. A jelenlegi világban a fiatalok egyre kevésbé hajlandóak a "klasszikus" módon tanulni, ezért a különböző oktatási intézmények alternatív módszereket keresnek. Jelenleg a diákok tankönyvekből tanulnak és papír alapon adnak számot tudásukról, amely a XXI. században elavultnak számít. Ez rengeteg nyomdai és nyomtatási költséget jelent. Az oktatóknak rengeteg időt elvesz az idejéből a dolgozatok egyesével való kijavítása. Illetve a dolgozatok megírása papíron is sokkal időigényesebb, mintha különböző alkalmazásokat használnánk a diákok számonkérésére.
    
## Igényelt folyamatok modellje

    Azért hogy egyszerűbbé tegyük a diákok és a tanárok feladatát, létrehozunk egy programot ami a mai kornak megelelően helyt tud álni az elektronikai világban. A tanároknak egyszerűbb lesz mert , csak egyszer kell felvinniük a rendszerbe a feladatsort és a helyes válaszokat is csak egyszer kell kiválasztania. Ezáltal nem kell minden dolgozatot eggysével étvizsgálni lepontoznia és érdemjegyet adni rá, gy sokkal több időt megtakaríthat. A diákoknak is sokkal jobb mert nem kell azon görcsölniük hogy milyen lett az eredmény mert a teszt kitöltése után egyből megtudják az eredményt és a hibás válaszokra is a helyes választ. Illetve tanulni is sokkal könnyeb nekik mert csak előkeresik a az éppen feladott leckét és már tanulhatják is és egyből ellenőrizhetik magukat. Nem kell minden egyes könvet külön elükeresni megkeresni a fejezetet végiglapozni. A szülők egyből értesülnek a dolgozatok eredményeiről.

## Követelmény lista


	Modul				Név								Kifejtés
	Jogosultság			Bejelentkezési felület			A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap.
	Jogosultság			Regisztráció					A felhasználó a felhasználói nevének, email címének és jelszavának megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagynem felel meg a követelményeknek,akkor a rendszer értesíti erről a felhasználót.
	Jogosultság			Jogosultsági szintek			- Admin : új feladat feltöltése - Felhasználó : feladatok kitöltése, toplista megtekintése, jelszó módosítása - Vendég : regisztráció, belépés
	Modifikáció			Felhasználó módosítása			A felhasználó módosítani tudja saját Felhasználónevét. Ehhez szükséges a régi és az új felhasználók megadása, az új megerősítése, valamint a felhasználó jelszavának megadása.
	Modifikáció			Jelszó módosítása				A felhasználó módosítani tudja saját jelszavát. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése.
	Modifikáció			Elfelejtett felh / jelszó		Ha a felhasználó elfejeltette a felhasználónevét, vagy jelszavát akkor ezzel az opcióval egy Adminhoz tud fordulni.
	Feladattípus		Akasztófa
	Feladattípus		Memóriajáték
	Feladattípus
	Feladattípus		Kérdez-Felelek
	Jogosultság			Admin felület					Felület az admin fiókkal rendelkező felhasználó számára. Tartalmaz egy felületet az új feladatok feltöltéséhez.




## Képernyőtervek

 Regisztrációs felület:

![alt text](https://github.com/gitjuzer/EGER_2019_2_Lev_A/blob/develop/images/registration.png "Registration")

Bejelentkező felület:

![alt text](https://github.com/gitjuzer/EGER_2019_2_Lev_A/blob/develop/images/login.png "Login")

Quiz felület:

![alt text](https://github.com/gitjuzer/EGER_2019_2_Lev_A/blob/develop/images/quiz.png "Quiz")	
	

## Adatmodell

![alt text](https://github.com/gitjuzer/EGER_2019_2_Lev_A/blob/develop/images/datamodel.png "Data model")	




## Használati esetek

    Hozzáférések jogosultság szerint:
        - adminisztrátor
        - sima felhasználó
    
    Adminisztrátor használati esetei:
        - Bejelentkezés: Az adminisztrátor képes bejelentkezni a rendszerbe.
        - Feladatok: Az adminisztrátor képes feladatok feltölteni és eltávlítani.
        - Felhasználók kezelése: Az admin képes a felhasználók kezelésére.
        - Feladatok kitöltése: Az admin képest a adatbázisban lévő teszteket kitölteni ellenörzés céljából.

    Sima felhasználó használati esetei:
        - Regisztráció: A felhasználó képes önmagát beregisztrálni a rendszerbe.
        - Bejelentkezés: Regisztráció után megnyílik a bejelentkezés lehetősége a rendszerbe.
        - Feladatok: Az adatbázisba lévő feladatok kitöltése és eredmény áttekintése.
        - Felhasználói adatok módosítása: A felhasználó megtudja változtani néhány személyes adatát.





## Forgatókönyv






## Fogalomszótár