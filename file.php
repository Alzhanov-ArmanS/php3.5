<?php

// Задача 1: Создание простого массива
echo "<h2>Задача 1: Создание простого массива</h2>";
$friends = ["Иван", "Анна", "Петр", "Мария"];
foreach ($friends as $friend) {
    echo $friend . "<br>";
}

// Задача 2: Индексы массива
echo "<h2>Задача 2: Индексы массива</h2>";
$numbers = [5, 10, 15, 20, 25];
echo "Элемент с индексом 2: " . $numbers[2] . "<br>";

// Задача 3: Ассоциативный массив
echo "<h2>Задача 3: Ассоциативный массив</h2>";
$friendInfo = [
    "name" => "Иван",
    "age" => 30,
    "city" => "Москва"
];
echo "Имя: " . $friendInfo['name'] . ", Возраст: " . $friendInfo['age'] . "<br>";

// Задача 4: Массивы с циклами
echo "<h2>Задача 4: Массивы с циклами</h2>";
$nums = [5, 12, 8, 20, 3];
echo "Числа больше 10: ";
foreach ($nums as $num) {
    if ($num > 10) {
        echo $num . " ";
    }
}
echo "<br>";

// Задача 5: Работа с массивами функций
echo "<h2>Задача 5: Работа с массивами функций</h2>";
$numbersForSum = [10, 20, 30, 40, 50];
echo "Сумма чисел: " . array_sum($numbersForSum) . "<br>";

// Задача 6: Учет товаров в магазине
echo "<h2>Задача 6: Учет товаров в магазине</h2>";
$products = [
    ["name" => "Товар 1", "price" => 100, "quantity" => 10],
    ["name" => "Товар 2", "price" => 150, "quantity" => 5],
    ["name" => "Товар 3", "price" => 200, "quantity" => 20],
    ["name" => "Товар 4", "price" => 250, "quantity" => 8],
    ["name" => "Товар 5", "price" => 300, "quantity" => 15]
];

function displayProducts($products) {
    foreach ($products as $product) {
        echo "Название: " . $product['name'] . ", Цена: " . $product['price'] . "<br>";
    }
}

function addProduct(&$products, $name, $price, $quantity) {
    $products[] = ["name" => $name, "price" => $price, "quantity" => $quantity];
}

function updateProductQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
        }
    }
}

displayProducts($products);
addProduct($products, "Товар 6", 350, 12);
updateProductQuantity($products, "Товар 1", 15);
echo "Обновленный список товаров:<br>";
displayProducts($products);

// Задача 7: Расчет среднего балла студентов
echo "<h2>Задача 7: Расчет среднего балла студентов</h2>";
$students = [
    ["name" => "Алексей", "grades" => [4, 5, 3, 4]],
    ["name" => "Ольга", "grades" => [5, 5, 4, 4]],
    ["name" => "Светлана", "grades" => [3, 4, 4, 3]]
];

function averageGrade($grades) {
    return array_sum($grades) / count($grades);
}

function bestStudent($students) {
    $best = null;
    $highestAverage = 0;
    foreach ($students as $student) {
        $avg = averageGrade($student['grades']);
        if ($avg > $highestAverage) {
            $best = $student['name'];
            $highestAverage = $avg;
        }
    }
    return $best;
}

foreach ($students as $student) {
    echo "Средний балл " . $student['name'] . ": " . averageGrade($student['grades']) . "<br>";
}
echo "Лучший студент: " . bestStudent($students) . "<br>";

// Задача 8: Поиск дубликатов в массиве
echo "<h2>Задача 8: Поиск дубликатов в массиве</h2>";
$numbersWithDuplicates = [1, 2, 3, 4, 5, 1, 2, 3];
function findDuplicates($arr) {
    $duplicates = [];
    $seen = [];
    foreach ($arr as $number) {
        if (in_array($number, $seen)) {
            $duplicates[] = $number;
        } else {
            $seen[] = $number;
        }
    }
    return array_unique($duplicates);
}

echo "Дубликаты: " . implode(", ", findDuplicates($numbersWithDuplicates)) . "<br>";

// Задача 9: Объединение и сортировка массивов
echo "<h2>Задача 9: Объединение и сортировка массивов</h2>";
$array1 = [3, 5, 1];
$array2 = [4, 2, 6];
function mergeAndSort($array1, $array2) {
    $merged = array_merge($array1, $array2);
    sort($merged);
    return $merged;
}

echo "Объединенный и отсортированный массив: " . implode(", ", mergeAndSort($array1, $array2)) . "<br>";

// Задача 10: Фильтрация массива
echo "<h2>Задача 10: Фильтрация массива</h2>";
$numbersToFilter = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function filterEvenNumbers($arr) {
    return array_filter($arr, function($number) {
        return $number % 2 == 0;
    });
}

echo "Четные числа: " . implode(", ", filterEvenNumbers($numbersToFilter)) . "<br>";

?>
