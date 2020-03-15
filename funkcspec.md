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





## Igényelt folyamatok modellje

    Azért hogy egyszerűbbé tegyük a diákok és a tanárok feladatát, létrehozunk egy programot ami a mai kornak megelelően helyt tud álni az elektronikai világban. A tanároknak egyszerűbb lesz mert , csak egyszer kell felvinniük a rendszerbe a feladatsort és a helyes válaszokat is csak egyszer kell kiválasztania. Ezáltal nem kell minden dolgozatot eggysével étvizsgálni lepontoznia és érdemjegyet adni rá, gy sokkal több időt megtakaríthat. A diákoknak is sokkal jobb mert nem kell azon görcsölniük hogy milyen lett az eredmény mert a teszt kitöltése után egyből megtudják az eredményt és a hibás válaszokra is a helyes választ. Illetve tanulni is sokkal könnyeb nekik mert csak előkeresik a az éppen feladott leckét és már tanulhatják is és egyből ellenőrizhetik magukat. Nem kell minden egyes könvet külön elükeresni megkeresni a fejezetet végiglapozni. A szülők egyből értesülnek a dolgozatok eredményeiről.

## Követelmény lista






## Képernyőtervek





## Adatmodell







## Használati esetek







## Forgatókönyv

    Regisztráció:
    A weboldal felkeresése után, a kezdőképernyőn a Regisztráció gomb segítségével lehet regisztrálni. A regisztrációs 
    űrlap megfelelő kitöltését (Felhasználónév, E-mail, Jelszó, Jelszó megerősítése), és a Regisztráció gomb megnyomását
    követően, amennyiben a megadott adatok helyesek, a 'Sikeres regisztráció' üzenet jelenik meg, ami után be is léptet 
    a rendszer.
    
    Bejelentkezés:
    A weboldal felkeresése után, a kezdőképernyőn a Bejelentkezés gomb segítségével lehet belépni a felhasználói fiókba,
    melynek feltétele, hogy a korábbi regisztráció az oldalra. A gomb lenyomása után meg kell adni a bejelentkezéshez szükséges 
    adatokat(Felhasználónév, Jelszó), és amennyiben helyes adatok kerültek megadásra, úgy a Bejelentkezés gomb lenyomásával
    a rendszer bejelentkeztet a felhasználói fiókba.
    
    Elfelejtett jelszó: 
    Ammenyiben a felhasználó elfelejtette a jelszavát, úgy a weboldal felkeresése utána, a Bejelentkezés gomb lenyomása 
    után, az  Elfelejtett jelszó szövegre kattintva kérheti a jelszó változtatását. Itt a felhasználói fiókhoz tartozó
    e-mail cím megadása után, a Jelszó változtatás gombra rányomva, az 'Ellenőrizd az e-mail fiókod!' üzenetet jelenik meg. 
    Az új jelszó igényléséneklépéseit az e-mail üzenet tartalmazza.
    
    Profil adatok: 
    Bejelentkezést követően, a Fiókom menüpont alatt lehetőség van megtekinteni a felhasználó és a felhasználói fiókkal 
    kapcsolatos adatokat. Ezen a felületen lehetőség van a felhasználónév és a jelszó módosítására.
    
    Játéktípus kiválasztása: 
    Sikeres bejelentkezést követően Diák jogosultsági szinten, a főoldalon a választható játéktípusok jelennek meg.
    A tanulás megkezdéséhez ki kell választani az a játéktípust, amellyel a felhasználó tanulni szeretne. A játékon belül
    lehetséges kiválasztani a témakört és játékhoz tartozó egyéb beállításokat.
    
    Tananyag feltöltése, teszt létrehozás:
    Sikeres bejelentkezést követően Admin és Tanár jogosultsági szinten elérhető a tananyag feltöltése / módosítása 
    menüpont, melyen keresztül az Új feladat gomb megnyomását követően új tananyag / feladat adható a különböző 
    feladattípusokhoz vagy módosíthatók a már feltöltött feladatok.
    Az Új teszt gomb lenyomását követően teszt feladatsor adható a rendszerhez, amely hozzárendelhető a Diák jogosultságú
    felhasználókhoz, kitöltésre. 

## Fogalomszótár
