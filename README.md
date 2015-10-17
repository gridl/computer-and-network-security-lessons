# computer-and-network-security-lessons

Книга "Хакинг. Искусство экслойта". стр.17-216.

== Важная теория ==
Компиляция с подключением отладочной информации - флаг g.

gcc -g firstprog.c 

Изучение скомпилированного двоичного файла a.out.
Просмотр машинного кода, в который была транслирована функция main()

objdump -D a.out -M intel | grep -A20 main.:

Результат передаем на вход команды grep. 

[Про grep](http://habrahabr.ru/post/229501/)

Запуск отладчика с флагом q для пропуска приветствия:

gdb -q ./a.out

[Про gdb](http://habrahabr.ru/post/181738/)
[Учебник](https://www.opennet.ru/docs/RUS/gdb/gdb_toc.html)
[Подсказка](http://users.ece.utexas.edu/~adnan/gdb-refcard.pdf)
[Архитектура gdb](http://www.aosabook.org/en/gdb.html)

[Регистры архитектуры x86](http://ccfit.nsu.ru/~kireev/lab2/lab2reg.htm)
[Учебник по языку ассемблера в ОС UNIX (синтаксис intel)](http://www.stolyarov.info/books/pdf/nasm_unix.pdf)
[Ассемблер в Linux для программистов C (синтаксис AT&T)](https://ru.wikibooks.org/wiki/%D0%90%D1%81%D1%81%D0%B5%D0%BC%D0%B1%D0%BB%D0%B5%D1%80_%D0%B2_Linux_%D0%B4%D0%BB%D1%8F_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%81%D1%82%D0%BE%D0%B2_C)

Установить для gdb формат команд intel:
set disassembly-flavor intel


==Практические задания==

Контрольная точка 1:
Теоретические основы (отразить всё в отчете).
1. Сопоставить исходный код на языке С и дизассемблированный текст:
1.1. Ветвления (пишем программу на С, дизассемблируем, сопоставляем С код и язык ассемблера). 
1.2. Циклы с пред- и постусловиями.
1.3. Вызов функции. 
1.4. Возможности оптимизации gcc (-O1, -O2, -O3). 
Практическая работа (отразить всё в отчете).
2.	Индивидуальное задание: дизассемблирование исполняемого файла (используем только OBJDUMP и GDB). На выходе восстановить алгоритм работы программы. (Проще: распечатать дизассемблированный текст и изучить алгоритм, изображая вызовы и переменные).

Контрольная точка 2:
Примерные темы исследовательских работ (окончательно выбранная тема согласуется с преподавателем):
- Устройство памяти в Linux, загрузка и исполнение ELF-файлов, зловредное ПО в Linux.
- Переполнение буфера в Linux и методы противодействия.
- Принцип работы отладчика, методы противодействия отладке.
- Принцип работы дизассемблера, методы противодействия дизассемблированию.
- Методы поиска уязвимостей, статический анализ.
- Методы поиска уязвимостей, динамический поиск уязвимостей (фаззинг).
- Эксплуатация уязвимостей в Linux. Написание эксплойтов и шелл-кода в Linux.

Требования к выполнению контрольной точки 2:
Текст в электронном виде:
- 5-10 страниц (Times, 12, интервал 1,5 см, поля по 2 см) + список литературы со ссылками в тексте. 
- Практическая направленность, примеры выполнения. 
- Презентация о проделанной работе + выступление на 5-10 минут, ответы на вопросы (публичная защита).

Некоторые ссылки по темам:
1. Методы противодействия отладке и дизассемблированию. 
- [Книги об отладчике gdb](https://goo.gl/R72TPH)
- [Книги по языку ассемблера](https://goo.gl/MKfBGD)
- [Книги об ELF-формате](https://goo.gl/poiuyR)
2. Методы поиска уязвимостей, статический анализ файлов.
- [Книги](https://goo.gl/etWwk0)
3. Методы поиска уязвимостей, динамический поиск уязвимостей (фаззинг).
- [Книги](https://goo.gl/etWwk0)
4. Написание эксплойтов и шелл-кода в Linux.
- [Книги](https://goo.gl/Q5wJv8)

Статьи: 
- [exploit-db](https://www.exploit-db.com/papers/)
- [packetstormsecurity](https://packetstormsecurity.com/files/tags/paper/)