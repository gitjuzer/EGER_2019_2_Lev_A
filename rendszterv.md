# Rendszerterv

# Tartalom

1. Konceptuális rendszerterv
2. Részletes rendszerterv
    * Rendszer célja
    * Projekt terv
    * Üzleti folyamatok modellje
    * Követelmények
    * Funkcionális terv
    * Fizikai környezet
    * Absztrakt domain modell
    * Architekturális terv
    * Adatbázis terv
    * Implementációs terv
    * Tesztterv
    * Telepítési terv
    * Karbantartási terv


# Konceptuális rendszerterv

A rendszer célja, hogy a felhasználók egy egyszerű és játékos környezetben tudjanak tanulni. Célunk, hogy egy olyan programot létrehozzunk, amelyben a felhasználok, különböző szerepkörökben tudnak a rendszerrel interaktiválni. Fontos, hogy a rendszer használhatósága egyszerű legyen. Minden felhasználónak érthető legyen, hogy mit és hogyan lehet a rendszerben csinálni.

A felhasználók különböző szerepközökben, különböző dolgokat látnak és csinálhatnak. A szerepköröknek más-más céljuk és rendszeren belüli dolgokkal interaktiválhatnak. Minden szerepkörben elérhető lesz, egy Órarend, egy Elektronikus napló, és egy Üzenet felület, de mindegyikhez a különböző szerepkörök máshogy viszonyulnak. A Diákoknak és Tanároknak elérhető lesz egy Kvíz és Teszt felület, a Tanár itt tud létrehozni feladatokat a Diákoknak, a Diák időre töltheti ki a feladatokat amelyekre pontokat kap helyes válasz esetén, és a végén egy Toplistában láthatja eredményét. 

A programunk azért készül, hogy segítse a tanulást az iskolákban, a Diákoknak és a Tanároknok számára egyaránt. A felhasználók szívesebben dolgoznak egy számítógépes felületen, ahol mindent láthatnak (Elektronikus napló, Órarend, Üzenetek, stb.), és mindent elérhetnek könnyen és gyorsan. A felhasználók könnyen tudják tartani a kapcsolatot egymás között, és akármilyen hibát azonnal tudnak jelezni.

A programunk megvalósításához különböző eszközöket kell használnunk. Szükséges a GitHub Issue kezelője, hogy nyomon tudjuk követni, ki mit végez. Kell a GitHub, hogy az összes fájlunkat, egyhelyen és gyorsan elérhessük, és megkönnyitjük vele a dokumentumok és a programunk készítését több felhasználó esetén.
Szükséges egy Adatbázis-rendszer kezelő program, amelyben eltudunk készíteni egy adatbázist és annak a tervét.
Kell egy program amiben a programunkat készítjük, erre egy Androidos alkalmazás elkészítésére alkalmas programot választunk. Valamilyen rendszer- vagy képernyőtervező program / alkalmazás szükséges, hogy képeket képernyőterveket készíthessünk.

A rendszert egy előző féléves hasonló rendszerből (mondhatni prototípusból) és a saját tudásunkból készítjük. Biztosan mindenki aki a projekten dolgozik merít valamilyen inspirációt valahonnan, legyen az egy másik hasonló rendszer, egy teljesen más dologra használható program aminek az alapjai hasonlók, stb.. Minden dokumentumot, tervet, programot, képet és egyebet mi készítünk, ezeket az elöbb felsorolt eszközök segítségével tudjuk megvalósítani.

Megfeleltetés:

* Mit
* Hogyan
* Miből
* Miért
    
Egy bejentkezési felület, ahol a felhasználók beléphetnek a rendszerbe.
A felhasználó az email címe és a jelszava segítségével bejelentkezhet.
Egy felhasználó név és egy jelszó segítségével, a jelszónak tartalmaznia kell legalább 6 karaktert, 1 nagybetűt és 1 számot.
A felhasználóknak tudnia kell bejelentkezni a rendszerbe, hogy elérhessék annak többi részét.
Minden felhasználónak, van egy felhasználóneve és jelszava amivel beléphet a rendszerbe.
A jelszónak fontos a védelme, azért kell hozzá ennyi lépés.

Egy regisztrációs felület, ahol a felhasználók szerepköröket választhatnak.
Egy regisztrációs gombra kattintva, a felhasználó választhat felhasználó nevet és jelszavat amivel felregisztrálhat.
Egy regisztráció gomb segítségével, amely jól látható és a belépés gomb mellett található.
A felhasználóknak muszáj regisztrálniuk, hogy betudjanak jelentkezni a programba.
Regisztráláskor a felhasználó szerepköröket tud választani, amelyek fontosak
ahoz hogy, jogosultsági szinteket adjunk.

Egy "Teszt készítés", mely új tesztek létrehozására szolgál.
A "Teszt" gombra kattintva válik elérhetővé, Tanár jogosultsággal rendelkezőknek
Teszt menübe navigálva, az almenük között található meg a Tanárok számára.
A tanárok számára biztosítani kell egy könnyen kezelhető felületet, mely a tesztek létrehozására szolgál. 
A teszt létrehozása után, egyből elérhetővé válik és ki lehet tölteni a diákoknak.

Jogosutsági szinteket, ahol megkülönböztetjük a szerepköröket.
A különböző szerepkörökhöz, különböző jogosultsági szinteket társítunk.
Szerepkörökből jogosultsági szinteket.
Regisztrálásnál a felhasználó szerepkört választ. Minden szerepkörnek különböző
elérései vannak, így mást látnak. Fontos, hogy ne minden szerepkör lássa ugyan azokat a dolgokat.

Felhasználó név módosítása.
Egy bejentkezési adatok modosítása gombbal, elérhető egy felület, ahol felhasználó nevet és jelszavat lehet modosítsani.
Egy gomb segítségével elérhető egy felület ahol a felhasználó nevet lehet módosítani.
Ha a felhasználó nincs megelégedve azonosítójával, vagy esetleg a felhasználó neve
helytelen, gúnyos, sértő, stb. Akkor a felhasználó vagy nagyobb jogosultsággal lévők
itt tudják megváltoztatni.

Jelszó módosítása.
Egy bejentkezési adatok modosítása gombbal, elérhető egy felület, ahol felhasználó nevet és jelszavat lehet modosítsani.
Egy gomb segítségével elérhető egy felület ahol a jelszavat lehet módosítani.
Ha például, egy Tanár vagy Admin készít egy felhasználónak azonosítót, akkor
egy gyenge jelszavat adnak meg. A felhasználó itt tudja megváltoztatni jelszavát,
ha nem elégedett vele.	

Elfelejtett felhasználó név, jelszó módosítása.
Egy külön "Elfelejtett bejelentkezési azonosítók" gomb segítségével, ahol elérhető egy külön felület.
Egy gomb segítségével, ahonnan elérhető egy felület, ahol a felhasználó elfelejtett azonosítóit tudja módosítani.
Meglehet, hogy egy felhasználó szimplán elfejeltette a felhasználó nevét vagy jelszavát,
de az is lehet, hogy a felhasználó már nagyon régen regisztrált, vagy nem használta a
rendszert, így nem tudja már milyen felhasználó nevet, vagy jelszavat használt.

Egy "Főmenü" felület az összes felhasználónak.
A bejelentkezés után ez a felület jelenjen meg az összes szerepkör számára.
Egy külön felület létrehozásával, ahonnan elérhető az összes további felület, az egyes szerepkörök mást láthatnak itt.
Szükséges létrehozni egy ilyen felületet, hogy minden egy helyen megtalálható legyen.
Itt lesz található a Felhasználó név és Jelszó módosítása, Tananyag, Feladat megoldó felület,
az Üzenet felület, az elektronikus napló felület, az Órarend felület, és az Adminok
számára, az Admin felület.

Egy Tananyag felület a Diák és Tanár számára.
A főmenün belül legyen elérhető egy Tananyag felület a Diák és Tanár szerepkör számára.
Egy külön gomb megnyomásával a Főmeün elérhető a felület, ahol a felhasználók láthatják a Tananyagot
A Diákok és Tanárok számára ez a felület elengedhetetlen. A Diákok láthatják a tanárok által
közzétett tananyagokat a különböző óráikhoz, míg a Tanárok ide tudják a tananyagot feltölteni.

Egy "Feladatok" felület, ahol elérhető a Kvíz és Teszt típusok.
A főmenün belül egy gombra kattintva elérhető a "Feladatok" felület, ahol feladattípusokat lehet elvégezni.
Egy külön felületet hozunk létre, amely a Főmenün belül lesz elérhető, ide csak a Diák és Tanár tud belépni.
Itt lesznek elérhetők különböző feladat típusok amelyeket a Diák tud elvégezni eredményekért,
amelyek lehetnek érdemjegyek is. A Tanár itt tudja ezeket a feladattípusokat létrehozni a Diákok számára.
A Szülő szerepkör ide nem léphet be.

Egy "Kvíz" formájában lévő feladattípus.
A főmenüben elérhető "Feladatok" menün belül elérhető "Kvíz" gombra kattintva elérhető.
Jogosultsági szintek, gombok, és a Tanár szerepkör összességével lehet létrehozni egy Kvízt.
A Diák és Tanár szerepkörnek elérhető egy Kvíz felület, ahol feladatokat kell megoldani időre.
A Tanár tudja létrehozni ezeket a kvízeket, a Diák pedig kitölteni.
A Diák pontotokat kap a kvíz megoldásáért, és egy Toplistában láthatja eredményét.

Egy "Teszt" formájában lévő feladatípus.
A főmenüben elérhető "Feladatok" menün belül elérhető "Teszt" gombra kattintva elérhető.
Jogosultsági szintek, gombok, és a Tanár szerepkör összességével lehet létrehozni egy Tesztet
A Diák és Tanár szerepkörnek elérhető egy Teszt felület, ahol feladatokat kell megoldani időre.
A Tanár tudja létrehozni ezeket a teszteket, a Diák pedig kitölteni.
A Diák pontotokat kap a tesztek megoldásáért, a pontok és az hátra maradt idő alapján érdemjegyet kaphat.

Egy "Toplista", amely a Kvíz / Teszt felület után jelenik meg.
A kvíz, és a Teszt után lehet megjeleníteni, hogyha azt a Tanár engedélyzi.
A Tanár szerepkör egy külön beállítással tudja engedélyezni, hogy a Toplista megjelennyen-e.
A Diákok láthatják eredményeiket egy Toplistában, hogy a Tanár engedélyezi azt.
Itt láthatják pontszámaikat, mennyi idő alatt teljesítette a kvízt / tesztet, érdemjegyüket, és
hogy milyen pozícióban vannak.

A felhasználóknak nyomon kell tudniuk követni teljesítményeiket. Itt láthatóak a
Diák érdemjegyei, rovásai, dicséretei. A Tanár itt tudja ezeket adni egy Diáknak, a Szülő pedig láthatja a Diákja eredményeit.

Egy "Admin" felület, az Admin szerepkörben, vagy jogosultsággal lévőknek.
Egy külön felület a Főmenün belül, ahol elérhető egy gomb megnyomásával.
Egy gomb megnyomásával a főmenün, az Admin-nok elérhetnek egy, a rendszer szintte teljes működését képest vezérelni lévő felületet. Az Admin szerepkörben lévők, illetve Admin jogosultsággal lévőknek fontos, hogy elérhessenek egy ilyen felület. Felhasználók adatait, jelszavait, eredményeit itt tudják módosítnai, valamint egyéb triviális, vagy nagyobb dolgokat is.
	
# Részletes rendszerterv

## Rendszer célja

A rendszer általános célja, hogy segítse a diákokat a tanulásban és az elsajátítandó tananyag könnyebb feldolgozásában.

Ehhez a diákok játékos formában oldhatnak meg különböző témakörökben feladatokat, hogy mélyítsék tudásukat, melyről 
tesztfeladatsor megoldásával adhatnak számot. Az alkalmazás feladatmegoldás közben visszajelzéseket ad a megoldások 
helyességéről, valamint a játékosság és motiváció növelésére pontozza a feladatmegoldás gyorsaságát és helyességét.

Feladatokat, tesztfeladatokat és megoldásokat a tanárok illetve az adminok tölthetnek fel a rendszerbe és módosíthatják 
a meglévő adatokat.

Cél, hogy az alkalmazást az interneten elérhessék a felhasználók, így nem szükséges különböző eszközökön egyesével 
telepíteni a programot, a futtatáshoz elégséges legyen az internetkapcsolat és egy webes böngészőprogram.

Fontos, hogy a felhasználók könnyen el tudjanak igazodni a felületeken, így a különböző jogkörökkel rendelkező felhasználók
csak a hozzájuk tartozó nézetet láthassák, valamint ezek a felületek egyszerűek, letisztultak és egyértelműek legyenek.

A rendszer fő célja, hogy a Követelmény és Funkcionális specifikációban meghatározott megrendelõi igények által növelje a 
diákok tanulásának hatékonyságát, csökkentse a tanárok feladatellenőrzésre és értékelésre fordított idejé és energiáját.


## Projekt terv









## Üzleti folyamatok modellje


## Igényelt folyamatok modellje

    Azért hogy egyszerűbbé tegyük a diákok és a tanárok feladatát, létrehozunk egy programot ami a mai kornak megelelően helyt tud álni az elektronikai világban. A tanároknak egyszerűbb lesz mert , csak egyszer kell felvinniük a rendszerbe a feladatsort és a helyes válaszokat is csak egyszer kell kiválasztania. Ezáltal nem kell minden dolgozatot eggysével étvizsgálni lepontoznia és érdemjegyet adni rá, gy sokkal több időt megtakaríthat. A diákoknak is sokkal jobb mert nem kell azon görcsölniük hogy milyen lett az eredmény mert a teszt kitöltése után egyből megtudják az eredményt és a hibás válaszokra is a helyes választ. Illetve tanulni is sokkal könnyeb nekik mert csak előkeresik a az éppen feladott leckét és már tanulhatják is és egyből ellenőrizhetik magukat. Nem kell minden egyes könvet külön elükeresni megkeresni a fejezetet végiglapozni. A szülők egyből értesülnek a dolgozatok eredményeiről.
    
#Memória játék

    Szeretnénk egy olyan játékot amivel akár már gyermekkorban ellehet kezdeni a memória fejlesztését.
    Gondolok itt a kódolásra ami az infirmáció befogadása és feldolgozása kombinálása, ezen túl még a tárolásra vagyis a kódolt i   nformáció tartós regisztrálása és az előhívásra egyaránt, vagyis az eltűrolt információ felidézése valamely inger hatására.
    Szeretnénk minél szélesebb korban fejleszteni a memóriát, tehát 0 - végtelen korig.Emiatt nem csak szimpla képek felidézése a cél, hanem versek, szövegek összekötése is.






## Követelmények


A rendszertervben megtalálható követelmények az iskola átal elfogadott Rendszerjavaslat alapján lettek kidolgozva. Ez azt jelenti, hogy a követelmények a Sikeres lefejlesztés követelményei alapján vannak felsorolva

ID			NÉV								KIFEJTÉS			
Kov_001		Egyszerű, letisztult felület	Olyan felületet szeretnénk, ami könnyen átlátható a gyermekek számára.
Kov_002		Játékos megoldások		        Fontos, hogy a memória játék kisiskolások számára minél élvezhetőbb legyen.
Kov_003		Felület							Legyen online felület.
Kov_004		Egyéni játék					Olyan programot kell létrehozni, amit egy iskolás kezel.
Kov_005		Adatvédelem						Az adatokat a GDPR-nak megfelelően kell kezeljék.
Kov_006		Jogosultság						Regisztrációhoz kötött a memóriajáték elérése.
Kov_007		Vizualitás						Képek és hangok könnyítsék meg a megértést.


## Funkcionális terv









## Fizikai környezet









## Absztrakt domain modell









## Architekturális terv









## Adatbázis terv









## Implementációs terv









## Tesztterv

A szoftver helyességét és hatékonyságát a szoftver fejlesztése közben, kiadás előtt folyamatosan szükséges tesztelni.
A tesztelések célja a szoftver funkcionalitásának teljes vizsgálata, ellenőrzése, a meghatározott üzleti folyamatok verifikációja.


#### Unit tesztelés
Célja a szoftver írása közbeni hibák elkerülése, ami segíti a fejlesztőcsapatot a költségek csökkentésében, a tesztidő 
lerövidítésében, a regressziós tesztek csökkentésében és a későbbi bővítések és karbantartás megkönnyítésében. A fejlesztőcsapat
végzi a fejlesztési időben.

#### Integrációs tesztelés
Célja az elkészült szoftverelemek, komponensek közötti kölcsönhatások tesztelése, a kockázatokat elkerülve, minden elkészült
komponens esetén. A fejlesztőcsapat végzi a fejlesztési időben.

#### Elfogadási tesztelés
A megrendelői igények alapján meghatározott üzleti folyamatok tesztelése manuálisan vagy end-to-end tesztek segítségével.
A fejlesztőcsapat végzi a fejlesztési időben.


#### Rendszertesztelés
Az elkészült szoftver tesztelése aszerint, hogy az megfelel-e a követelményspecifikációnak, a funkcionális specifikációnak 
és a rendszertervnek. Elvégzése a fejlesztés végén történik, független személyek által. A rendszertesztelés során feltárt
hibákat a tesztelők egy hibabejelentő rendszeren keresztül jelzik a fejlesztőcsapatnak.

#### Átvételi tesztelés
Az elkészült szoftver tesztelése a végfelhasználók által. A tesztelés során feltárt hibákat a tesztelők egy 
hibabejelentő rendszeren keresztül jelzik a fejlesztőcsapatnak. A tesztelés a következő sorrendben történik:
* Alpha tesztelés - szoftver segítségével a fejlesztők végzik
* Béta tesztelés - korlátozott számú végfelhasználó végzi
* Felhasználói átvételi tesztelés - nagy számú végfelhasználó végzi
* Üzemeltetői átvételi tesztelés - rendszergazdai és biztonsági tesztelése a szoftvernek.

A tesztelések során kijelölt hibabejelentő rendszeren keresztül, meghatározott tartalmi elemeknek megfelelő formátumban
lehetséges a hibajelzsre, mely alapján a fejlesztőcsapat reprodukálja a hibát és kijavítja azt. 

## Telepítési terv









## Karbantartási terv

A szoftver a jövőben nem igényel a fejlesztőcsapat részéről karbantartást. Új funkció hozzáadása vagy a szoftver esetleges
karbantartása külön megállapodás tárgyát képezi.
A szoftver üzemeltetése a rendszergazda feladata, aki a megrendelővel áll szerződésben. Az előre látható üzemeltetési feladatok
között a következők szerepelnek:
* rendszeres biztonsági mentés készítése
* hiba esetén az utolsó konzisztens állapot visszaállítása
* kiszolgáló szerver állpotának ellenőrzése, szükség szerint újraindítása
* biztonsági beállítások ellenőrzése
* rendszerellenőrzés és frissítés








