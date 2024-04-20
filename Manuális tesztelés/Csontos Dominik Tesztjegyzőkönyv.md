# Manuális tesztjegyzőkönyv
## Tesztelő: Csontos Dominik
## Dátum: 2024.04.20
## Böngésző: Mozilla Firefox Browser
## Verzió: 124.0.2(64 bites)

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
|----------------|-------------------------------|-----------------------------|-----------------------------|-----------------------------|
Bejelentkezés nélküli kurzus indítás|19:17|A kurzus nem nyílik meg|Sikeres|Nincs
Bejelentkezés gomb|19:20|Átirányítja a bejelentkezés felületre|Sikeres|Nincs
Nincs még fiókja regisztráció gomb|19:21|Átirányítja a regisztráció felületre|Sikeres|Nincs
Van már fiókja bejelentkezés gomb|19:22|Átirányítja a bejelentkező felületre|Sikeres|Nincs
Főoldal gomb|19:22|Átirányítja a főoldalra|Sikeres|Nincs
Regisztráció gomb|19:23|Átirányítja a regisztráció felületre|Sikeres|Nincs
Regisztráció megadott adatok nélkül|19:24|Hibaüzenet minden kötelezően kitöltendő mező esetén|Sikeres|Nincs
Regisztráció 3 karakternél rövidebb felhasználónévvel|19:25|Hibaüzenet a felhasználónévnél a minimum karakterszámmal kapcsolatban|Sikeres|Nincs
Regisztráció 3 karakternél rövidebb keresztnévvel|19:26|Hibaüzenet a keresztnévnél a minimum karakterszámmal kapcsolatban|Sikeres|Nincs
Regisztráció 3 karakternél rövidebb felhasználónévvel|19:27|Hibaüzenet a vezetéknévnél a minimum karakterszámmal kapcsolatban|Sikeres|Nincs
Regisztráció helytelen email címmel|19:29|Hibaüzenet az email címnél a helytelenül megadott adatokkal kapcsolatban|Sikeres|Nincs
Regisztráció helytelen jelszóval|19:30|Hibaüzenet a jelszónál|Sikeres|Nincs
Regisztráció a két jelszó nem egyezése esetén|19:31|Hibaüzenet a jelszónál, hogy nem egyeznek|Sikeres|Nincs
Regisztráció helyes adatokkal|19:33|Sikeres regisztráció|Sikeres|Nincs
Kijelentkezés gomb|19:34|Sikeres kijelentkezés|Sikeres|Nincs
Bejelentkezés üres mezőkkel|19:35|Hibaüzenet az üres mezőknél|Sikeres|Nincs
Bejelentkezés helytelen adatokkal|19:36|Hibaüzenet a név mezőnél|Sikeres|Nincs
Bejelentkezés helyes adatokkal|19:37|Sikeres bejelentkezés|Sikeres|Nincs
Bejelentkezett felhasználó kurzus megnyitása|19:40|Átirányítás a kurzus oldalára|Sikeres|Nincs
Kurzus fejezetek léptetése kurzus fejezet címekkel|19:41|Oldalak váltása|Sikeres|Nincs
Kurzus fejezetek léptetése következő gombbal|19:42|Oldalak váltása|Sikeres|Nincs
Kurzus fejezetek léptetése előző gombbal|19:43|Oldalak váltása|Sikeres|Nincs
Kurzus végi teszt feladatai|19:44|feladatok válaszai bejelölhetők|Sikeres|Nincs
Kurzus végi teszt visszajelzés gomb|19:44|Helyes vagy helytelen eredmény megjelenítése, magyarázat megjelenítése|Sikeres|Nincs
Főoldal gomb a kurzusokon belül|19:46|Átirányítja a főoldalra|Sikeres|Nincs
Bejelentkezés az admin felhasználó adataival|19:47|Sikeres bejelentkezés,felhasználók menüpont megjelenése|Sikeres|Nincs
Felhasználók gomb|19:52|Átirányítja az admint a felhasználókat kezelő felületre, megjelennek a felhasználó adatai|Sikeres|Nincs
Módosítás gomb|19:53|Átirányítja az admint egy adott felhasználót módosító felületre|Sikeres|Nincs
Módosítás felület|19:54|Az adatok módosítható formában jelennek meg|Sikeres|Nincs
Módosítás felület mentés gomb|19:55|Elmenti a módosítást, visszairányítja a felhasználók felületre|Sikeres|Nincs
Törlés gomb|19:56|Törli az adott felhasználót|Sikeres|Nincs

## A tesztelés lefedte az alkalmazás funkcióit és nem talált hibát, a program esztétikailag is a tervezetteknek megfelelő