# Funkcionális Specifikáció

Követelménylista

Mik a memóriajáték fontos tulajdonságai

Fontos, hogy lehessen nehézségi fokozatokat váltani és szintet lépni, pl 1-10 szint létezik az első szinten 5 pár kép található a 10 szinten már 50 pár.
Továbbá elengedhetetlen a memóriajáték milyenségének kiválasztása, képeket akarok összehasonlítani? vagy szövegeket összeilleszteni?
Elengedhetetlen, hogy a képeket szövegeket ne tároljuk a kliens oldalon, ez azért szükséges, hogy ne lehessen kijátszani a memóriajátékot.
Az elért pontszámok jelenjenek meg a játék végén ezeket tároljuk adatbázisban a későbbi kalkulációk érdekében.

Kérem, mondja el forgatókönyvszerűen, hogyan szeretné használni a memóriajátékot belépéstől a kilépésig!

A webalkalmazás megnyitása után, kiválasztom a bejelentkezés opciót és ha van már felhasználó fiókom, akkor belépek, ha még nincs, akkor regisztrálok és belépek.
Ez után rámegyek a játékok menüpontra, ahol kiválaszthatom melyik játékkal szeretnék játszani, itt kiválasztom a memóriajátékot.
A memóriajáték oldalán, kitudom válaszani, hogy képekkel vagy szövegekkel szeretnék játszani, ez után pedig megjelenne, hogy milyen nehézségi szinten szeretném ezt megtenni.
A játékból minden további nélkül kilehetne lépni.
A játék végén megjelennének az eredmények pontokban kifejezve.

Milyen kivételes helyzetekre kell felkészülni.

A képek, szövegek authentikáció nélküli elérése.

A képek, szövegek elérése nem megfelelő időben és intervallumban, csak akkor érhessem el a képet, amikor rákkatintok és addig amíg az el nem tűnik.

