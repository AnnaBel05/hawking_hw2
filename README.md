# Hawking School Homework #6

См. папку Converter - https://github.com/AnnaBel05/hawking_hw2/tree/master/Converter

# Hawking School Homework #5

Проанализирован проект, созданный на прошлых занятиях. Т.к. проект небольшой,
изменений практически нет.

Изучены следующие принципы программирования:

1. SOLID - SINGLE RESPONSIBILITY PRINCIPLE:
- На каждый объект возлагается одна обязанность.
- В моем коде данное условие выполнено.

2. SOLID - OPEN/CLOSED PRINCIPLE:
- Программные сущности открыты для расширения, но закрыты для изменения.

3. SOLID - LISKOV SUBSTITUTION PRINCIPLE
- Объекты в программе можно заменить их наследниками без изменения свойств программы.

4. SOLID - INTERFACE SEGREGATION PRINCIPLE
- Клиенты не должны быть вынуждены реализовывать методы, которые они не будут использовать.

5. SOLID - DEPENDENCY INVERSION PRINCIPLE

6. DRY - DON'T REPEAT YOURSELF

7. KISS - KEEP IT SHORT & SIMPLE

8. YAGNI - YOU AREN'T GONNA NEED IT

# Hawking School Homework #4

Логика из предыдущих ДЗ перенесена в классы

Созданы классы-сущности для работы с данными из БД

Добавлены интерфейс и абстрактный класс

Логика работы с БД вынесена в файл /Services/Db.php

# Hawking School Homework #3

Домашнее задание 3 - Установка и настройка nginx - Размещено в файле nginx hawking.docx, который содержит описание этапов выполнения работы вместе со скриншотами. Данный файл находится в ветке main, которая доступна по ссылке: https://github.com/AnnaBel05/hawking_hw2/tree/main

# Hawking School Homework #2
Главный файл проекта, в котором устанавливается связь с БД и происходит обработка операций CREATE & DELETE, а также вывод информации из БД на страницу - main.php. 


read.php - Отдельная страница для операции READ (для примера взаимодействия двух страниц), в которую приходит id записи, что позволяет вывести всю информацию по одной записи из таблицы.


validate.js - проверяет, введено ли имя персонажа в поле при добавлении персонажа в БД. Результат действия представлен на Рисунке 1 в ветке https://github.com/AnnaBel05/hawking_hw2/tree/main
