#  Warsztaty

#### Zadanie1.php

Plik zawiera prosty formularz, który :  
   * prosi o imię użytkownika
   * po kliknięciu przycisku `wyślij` przekierowuje na podstronę witającą użytkownika słowami `„Cześć, {$name}!”`
   * formularz przekierowuje na tę samą stronę metodą POST


#### Zadanie2.php

W pliku znajduje się prosty symulator Lotto.  
* Symulator składa się ze strony z formularzem pozwalającym wybrać `6` liczb z zakresu `1-49`
* Po wysłaniu formularza strona losowo wybiera `6` liczb z tego samego zakresu
* Po wylosowaniu wyświetla wylosowane liczby
* Sprawdza, które liczby wybrane przez użytkownika pokrywają się z wylosowanymi losowo i wyświetla odpowieni komunikat

-------------------------------------------------------------------------------

#### Flights

> W tym katalogu znajduje się funkcjonalny formularz do generowania biletów lotniczych w PDF  

1. W katalogu znajduje się plik `index.php` z podstawową strukturą strony.
2. W katalogu `includes` znajduje się plik `visits.php` który:  
   * Sprawdza czy użytkownik posiada zapisane ciasteczko o nazwie `visits`, jeśli nie, wyświetli komunikat: `Witaj pierwszy raz na naszej stronie`  
     Dodaje ciasteczko o nazwie `visits` zapisując mu wartość `1` i czas ważności `1` rok
   * Jeśli ciasteczko jest zapisane, pobiera jego aktualną wartość i wypisuje na stronie komunikat `Witaj, odwiedziłeś nas już X razy`  
     Zwiększa wartość ciasteczka o `1`
 3. W pliku `form.php` znajduje się formularz wyboru:
   * lotniska wylotu i przylotu    
   * czas startu i długość lotu
   Lista lotnisk znajduje się w pliku `airports.php`

 Przetwarzanie danych pobranych z formularza.  

1. Plik `pdf.php` w katalogu głównym, odbiera dane z formularza
2. Sprawdza czy użytkownik nie wybrał takiego samego lotniska wylotu i przylotu
3. Sprawdza czy data i czas lotu zostały podana
4. Sprawdza czy cena lotu jest większa od `0`
5. Pobiera dane z formularza do zmiennych
6. Znajduje strefę czasową lotniska wylotu i zapisuje ją do zmiennej
7. Znajduje strefę czasową lotniska przylotu i zapisuje ją do zmiennej
8. Dodaje do daty czas lotu i wybiera strefę czasową lotniska przylotu

Wyświetlenie danych przetworzonych w poprzednim zadaniu.  

1. Tworzę w html tabelę zawierającą dane:  
   * lotnisko wylotu z czasem wylotu i kodem lotniska
   * lotnisko przylotu z czasem przylotu i kodem lotniska
   * czas lotu
   * cenę lotu
2. Korzystając z biblioteki [fzaninotto/faker - packagist][fzaninotto/faker-packagist] [fzaninotto/faker - github][fzaninotto/faker-github],  
   generuję imię i nazwisko pasażera


3. Korzystając z biblioteki [kwn/number-to-words - packagist][kwn/number-to-words-packagist] [kwn/number-to-words - github][kwn/number-to-words-github],  
   generuję słowną cenę lotu 

4. Korzystając z biblioteki [mpdf/mpdf - packagist][mpdf/mpdf-packagist] [mpdf/mpdf - github][mpdf/mpdf-github],  
   generuję plik `PDF` po przesłaniu formularza

#### Podsumowanie

W katalogu głównym znajduje się przykładowy wygenerowany plik `flight_ticket.pdf`

<!-- Links -->
[fzaninotto/faker-packagist]:https://packagist.org/packages/fzaninotto/faker
[fzaninotto/faker-github]:https://github.com/fzaninotto/Faker
[kwn/number-to-words-packagist]:https://packagist.org/packages/kwn/number-to-words
[kwn/number-to-words-github]:https://github.com/kwn/number-to-words
[mpdf/mpdf-packagist]:https://packagist.org/packages/mpdf/mpdf
[mpdf/mpdf-github]:https://github.com/mpdf/mpdf
[mpdf-output]:https://mpdf.github.io/reference/mpdf-functions/output.html
