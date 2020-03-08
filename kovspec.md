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




## Fogalomszótár
