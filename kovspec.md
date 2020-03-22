# Követelmény Specifikáció

# Tartalom

* Áttekintés
* Jelenlegi helyzet
* Vágyálom rendszer
* Jelenlegi üzleti folyamatok modellje
* Igényelt üzleti folyamatok modellje
* Követelmény lista
* Fogalomszótár


## Áttekintés
    A rendszer segít a fiataloknak a tanulásban, és a tanagyag könnyebb feldolgozásában. A felhsználók játékos formában tanulhatnak és ezáltal az oktatók érdekesebbé tehetik a tanórákat.
    Különböző témák közül lehet választani, így mindenki megtalálja azt, amire szüksége van. A felhasználókat külön szerepkörökhöz rendeljük pl.: oktató, tanuló. 
	Az egyes szerepkörökhoz különböző jogosultságok társulnak. Míg például egy tanuló csak megoldani tudja a kész feladatokat, egy tanár akár személyre is szabhatja azokat vagy újakat hozhat létre. 
    A rendszer ingyenes, ezért bárki bárhonnan hozzáférhet a regisztrációt követően. Különböző feladatok találhatók az egyes témák végén amivel a felhasználó próbára teheti a tudását. 
	Minden ilyen feladat megoldása után a a felhasználó	azonnal megkapja az eredményeket,így láthatja mely részeket oldotta meg hibásan.



## Jelenlegi helyzet

	Somogyi TOMI ???
	A megrendelő szeretné kibővíteni az általa nyújtott oktatási szolgáltatások elérhetőségét, hogy versenytársaihoz képest így jusson piaci előnyökhöz.
    Egy új rendszer előállítását rendelte meg, amely interneten keresztül modern megoldásokat használva működik.
    A rendszer segítséget nyújt azok számára, akik valamilyen módon szeretnék tudásukat elmélyíteni egy adott területen, vagy új
    ismereteket szeretnének szerezni.
    A XXI. század megköveteli, hogy mindez hálózaton is elérhető legyen, ennek megfelelően weboldalt is a megrendelő rendelkezésére kell bocsátani.
    Ez a fajta tanulás megtetszett a diákoknak, és a tanárok is felismerték, hogy egy játékos oktatóprogrammal eredményesebbé, szórakoztatóbbá tehetik az oktatást,
    mint a hagyományos, táblára írásos módszerrel.
    Ezért elkezdtek keresni számukra megfelelő, létező programokat. Találtak többet is (pl.:Kahoot), viszont ezek nem tetszettek nekik.
    Egy olyan programra lenne szükségük, amellyel a diákok önnálóan tudnak feladatot megoldani.
    Ezen okokból kifolyólag megkértek minket, hogy csináljuk meg nekik a vágyott weboldalt, ami sokkal könnyebbé teheti számukra az oktatást.


## Vágyálom rendszer
<<<<<<< HEAD

Memóriajáték
    Bejelentkezés után a user kiválaszthatja, hogy memóriajátékot szeretne játszani.
    A játéknak van egy kezdőoldala, ahol játékot kiválaszthatja a következőket:
       * milyen típusú memóriajátékot szeretne játszani - képes vagy szöveges
       * milyen nehézségű legyen a játék (hány kártya jelenjen meg)
       * milyen témában szeretne játszani
    Játék indítása gomb megnyomását követően elindul a játék.
    Ha minden párt megtalál a játékos, a játék véget ér, egy felugró ablakban "Nyertél!" felirat jelenik meg 
    
    A játék során számoljuk a játékos által megtett lépéseket.
    A játék elkezdése és befejezése közt eltelt időt mérjük és mentsjük adatbázisba, a további kiértékelések érdekében.
    
    A megtett lépések az idő és a nehézségi szint alapján kap a játékos pontszámot
    A kapott pontszám megjelenik a képernyőn és tároljuk adatbázisban is.
=======
	A projekt célja egy olyan rendszer, ami játékos tanulás, gyakorlás lehetőségét biztosítja a fiatalok számára. A rendszer webes platformon lesz elérhető.
	Regisztrációt követően több típusú feladat közül választhat a felhasználó. Látványos, színes felülettel rendelkezik a program, hogy felkeltse a felhasználók figyelmét. 
	A szórakoztatóbb tanulás érdekében játékos elemeket tartalmaznak az egyes feladatok.
	A rendszer lehetőséget nyújt a felhasználók teljesítményének tárolására (toplista), ennek segítségével másokkal is összemérhetik a tudásukat.
	A rendszerben szükséges egy pontozási rendszer, amely a helyesen megválaszolt feladványok után adja a felhasználónak a pontokat.

     Memóriajáték
        Bejelentkezés után a felhasználó kiválaszthatja, hogy memóriajátékot szeretne játszani.
        A játéknak van egy kezdőoldala, ahol játékot kiválaszthatja a következőket:
           * milyen típusú memóriajátékot szeretne játszani - képes vagy szöveges
           * milyen nehézségű legyen a játék (hány kártya jelenjen meg)
           * milyen témában szeretne játszani
        Játék indítása gomb megnyomását követően elindul a játék.
        A játék során számoljuk a játékos által megtett lépéseket.
        A játék elkezdése és befejezése közt eltelt időt mérjük és mentjük adatbázisba, a további kiértékelések érdekében.
        A megtett lépések az idő és a nehézségi szint alapján kap a játékos pontszámot
        Ha minden párt megtalál a játékos, a játék véget ér, egy felugró ablakban "Nyertél!" felirat és az elért pontszám jelenik meg 
        Ha az első 3-ban benne van a játékos a pontszámok alapján, akkor a helyezés megjelenik és a felhasználó kap egy jelvényt.
>>>>>>> 4e8b9b09d0edd13022d32320ae47924d26c8f188


## Jelenlegi üzleti folyamatok modellje
    A mai világban az oktatás nem használja ki a már meglévő technológiákat arra, hogy a tanulást sokkal szórakoztatóbbá és interaktívabbá tegye. A jelenlegi világban a fiatalok egyre kevésbé hajlandóak a "klasszikus" módon tanulni, ezért a különböző oktatási intézmények alternatív módszereket keresnek. Jelenleg a diákok tankönyvekből tanulnak és papír alapon adnak számot tudásukról, amely a XXI. században elavultnak számít. Ez rengeteg nyomdai és nyomtatási költséget jelent. Az oktatóknak rengeteg időt elvesz az idejéből a dolgozatok egyesével való kijavítása. Illetve a dolgozatok megírása papíron is sokkal időigényesebb, mintha különböző alkalmazásokat használnánk a diákok számonkérésére.





## Igényelt üzleti folyamatok modellje

    A felhasználó a fő oldalon regisztrál vagy ha már korábban megtette, bejelentkezik felhasználónév és jelszó segítségével,
    ezt ingyenesen és bárhonnan megteheti.
    Bejelentkezést követően szerepkörtől függően (oktató, diák) különböző funkciókhoz fér hozzá a felhasználó.
    Oktató szerepkörrel új feladatok állíthatók össze illetve a meglévők szerkeszthetőek. Választható feladattípusok:
    akasztófa, memóriajáték, kvíz feladat. 
    A témakörökre megkötés nincs.
    Diák szerepkörrel csak feladatmegoldásra van lehetőség az oldalon szereplő feladattípusok és témakörök szerint. 
    A feladatmegoldás során automatikus a visszajelzés a megoldás helyességéről, így önállóan használható valamint
    pontozási rendszer segítségével nyomon követhető a teljesítmény.
    


## Követelmény lista

<<<<<<< HEAD
=======
Modul | ID | Név | v. | Kifejtés
------------ | ------------- | ------------- | ------------- | -------------
Jogosultság | K1 | Bejelentkezési felület | 1.0 | A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap.
Jogosultság | K2 | Regisztráció | 1.0 | A felhasználó a felhasználói nevének, email címének és jelszavának megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót.
Jogosultság	| K3 | Jogosultsági szintek	| 1.0 | <ul><li>Admin : Rendszerhozzáférés, feladatok feltöltése, felhasználók / feladatok modósítása.</li><li> Tanár : Feladatok feltöltése / létrehozása.</li><li>Diák : Feladatok kitöltése / elvégzése.</li></ul>
Modifikáció | K4 | Felhasználó módosítása | 1.0 | A felhasználó módosítani tudja saját Felhasználónevét. Ehhez szükséges a régi és az új felhasználók megadása, az új megerősítése.
Modifikáció | K5 | Jelszó módosítása | 1.0 | A felhasználó módosítani tudja saját jelszavát. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése.
Modifikáció	| K6 | Elfelejtett  jelszó | 1.0 | Ha a felhasználó elfejeltette a jelszavát akkor ezzel a megadott email címére kapni fog egy utasítást hogyan tud újat kapni.
Feladattípus | K7 | Kérdés-felelet | 1.0 | Több kérdésből áll, a feladat a helyes válasz kiválasztása több lehetőség közül. A felhasználó az eltelt idő függvényében pontot kap.
Feladattípus | K8 | Memóriajáték | 1.0 | Állítható nehézségű játék, ahol az egymáshoz tartozó kártyákat kell megtalálni.A felhasználó az eltelt idő és megtett lépések függvényében pontot kap. 
Feladattípus | K9 | Akasztófa | 1.0 |	
Felület | K10 | Bejelentkezés | 1.0	| A felhasználók itt tudnak bejeletkezni a rendszerbe, probléma esetén jelszót, emailt változtatni.
Felület | K11 | Teszt létrehozás | 1.0 | Az admin, illetve tanári jogosultságú felhasználóknak elérehtő a teszt létrehozás, amit később kiadhat diákok számára.
Felület | K12 | Admin felület | 1.0 | Felület az admin fiókkal rendelkező felhasználó számára.
>>>>>>> 4e8b9b09d0edd13022d32320ae47924d26c8f188



## Fogalomszótár
<<<<<<< HEAD
=======

bug: fejlesztési hiba ami által a program nem a várt eredményt hozza
main menu: A fő menü, amely a weboldal/program indulásakor megjelenik
gameboard: Játék közben, a különböző elemeket tartalmazó felület
backend: A kiszolgáló, ahonnan az alkalmazást el lehet érni
frontend:  egy réteg ami feladata a rendszerből kijutó adatok prezentálása, illetve a bejövő adatok fogadása
web-service: különböző programnyelveken írt és különböző platformokon futó szoftveralkalmazások interneten keresztül történő adatcseréjére asznált vebszolgáltatások.
multiplatform: több környezetben futtatható alkalmazás
final menu: A játék végén megjelenő panel, amely a statisztikát mutatja
>>>>>>> 4e8b9b09d0edd13022d32320ae47924d26c8f188
