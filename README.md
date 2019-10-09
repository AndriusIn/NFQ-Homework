# NFQ-Homework
NFQ namų darbai
## Rezultatai
```console
$ php -f index.php
calculateHomeWorkSum: 6.2
Nfq\Akademija\NotTyped\calculateHomeWorkSum: 6
Nfq\Akademija\Soſt\calculateHomeWorkSum: 6
Nfq\Akademija\Strict\calculateHomeWorkSum: 6
```
## Pirma funkcija
```console
calculateHomeWorkSum(3, 2.2, '1'): 6.2
```
```php
function calculateHomeWorkSum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // $sum = 3 + 2.2 + 1 = 6.2
    return $sum;
    // Grąžina 6.2
}
```
## Antra funkcija
```console
Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1'): 6
```
```php
namespace Nfq\Akademija\NotTyped;

function calculateHomeWorkSum(...$numbers): int {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // $sum = 3 + 2.2 + 1 = 6.2
    return $sum;
    // Grąžina int(6.2) = 6 (nes nurodėme, kad funkcija grąžintų int)
}
```
## Trečia funkcija
```console
Nfq\Akademija\Soſt\calculateHomeWorkSum(3, 2.2, '1'): 6
```
```php
namespace Nfq\Akademija\Soſt;

function calculateHomeWorkSum(int...$numbers): int {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // Antras argumentas = int(2.2) = 2 (nes funkcijos argumentams nurodėme int tipą)
    // $sum = 3 + 2 + 1 = 6
    return $sum;
    // Grąžina int(6) = 6
}
```
## Ketvirta funkcija
```console
Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'): 6
```
```php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int...$numbers): int {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // Antras argumentas = int(2.2) = 2 (nes funkcijos argumentams nurodėme int tipą)
    // $sum = 3 + 2 + 1 = 6
    return $sum;
    // Grąžina int(6) = 6
    // Faile strict.php declare(strict_types=1) jokios įtakos neturi, nes argumentai yra tikrinami tik kviečiant funkciją
    // Jeigu declare(strict_types=1) perkeltume į index.php failą, tada rodytų 2 ir 3 argumento tipo klaidą (nes kviečiame funkciją)
}
```
