# Procent podobieństwa
<b>Autor:</b> Niesuch <br />
<b>Jezyk programowania:</b> PHP <br />

## Spis treści:
1. [Opis](https://github.com/niesuch/percentage-of-similarity#opis)
2. [Przykładowe użycie](https://github.com/niesuch/percentage-of-similarity#przykładowe-użycie)
3. [Logi zmian](https://github.com/niesuch/percentage-of-similarity#logi-zmian)
4. [Prawa autorskie i licencja](https://github.com/niesuch/percentage-of-similarity#prawa-autorskie-i-licencja)

## Opis:
StringSimilarity jest małą biblioteką napisaną w języku PHP, która służy do porównywania dwóch stringów. Wynikiem poprawnego użycia jest stopień ich podobieństwa wyrażony w procentach, który można uzyskać wywołując metodę `getPercentage()`.

## Przykładowe użycie
```php
$string1 = 'This is StringSimilarity lib test.';
$string2 = 'This is test.';

$stringSimilarity = new StringSimilarity($string1, $string2);
$stringSimilarity->compare();

echo 'Percentage of similarity: ' . $stringSimilarity->getPercentage() . '%';
```

Wynik: 
```
Percentage of similarity: 40.00%
```

## Logi zmian
Logi zmian dostępne są pod tym adresem: [CHANGELOG](https://github.com/niesuch/percentage-of-similarity/releases)

## Prawa autorskie i licencja
Copyright 2016 Niesuch, Inc. Kod wydany na licencji [MIT](https://github.com/niesuch/percentage-of-similarity/blob/master/LICENSE.md).

[Powrót do początku](https://github.com/niesuch/percentage-of-similarity/blob/master/README.md#procent-podobienstwa)
