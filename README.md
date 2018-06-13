# JS_School_PDFfiller

1. Таблица
Напишите функцию которая  выводит таблицу размером n×n, 
заполненную числами от 1 до n*n по спирали, выходящей из левого 
верхнего угла и закрученной по часовой стрелке

2. Сортировка
Есть упорядоченный массив чисел [11, 22, 48, 54] и 
массив каких-то чисел той же длины. 
Нужно написать метод, который сравнит эти два массива и 
вернет true, если они состоят из тех же элементов (порядок может отличаться). 

Примеры:
Первый массив  [11, 22, 48, 54] 
Второй массив [11, 48, 54, 22] -> true
Второй массив [11, 12, 48, 54] -> false

3. Pub Sub
Написать свой издатель-подписчик. У класса должно быть 2 метода 
emit(event, data) - создает событие event с данными data
on(event, handler) - позволяет выполнять метод handler на событие event. 
Метод первым аргументом получает данные data, отправленные вместе с событием