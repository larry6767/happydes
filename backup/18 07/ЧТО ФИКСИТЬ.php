﻿<?php
// Надо было бы это комментамми оставить, git бы сказал где править, но пока так

структура

путь
--файл
----строки,если сложная структура
-------что сделать
----строки,если сложная структура
-------что сделать

--файл


views\blocks\project-page
project-slider
// Здесь нужно выравнивание контента(и w и h , в данный момент можно подобрать картинку жестким разрешенией под desktop, но на планшете и телефоне она будет слишком крупной. Если это сложно невозможно-дать мне возможность вставить мне разный размер для каждого разрешения ) по центру div и убрать выделение блока при миссклике на картинку, вместо стрелки, если лайтбокс не будет открываться при нажатии. Можно ещё увеличить зону клика на стрелку наложением этой зоны на область отображения картинки.
// 
// Лайтбокс? Вроде итак крупно
project-info.html 4,5,7
// класс вравнивания по правому краю(может ещё где пригодится, поэтому лучше классом)


views\blocks\resume-page
resume-certificates.html 3-12 
resume-publications.html 3-12
// Лайтбоксы 
resume-first-screen 8-11
// можно ещё добавить эффекта при hover на div(наприме opacity) тень эту вообще не видно, если не знать что она есть
// тот же класс кинуть на иконки в хедере


views\blocks\common\header
header-bottom.html 6-7
// убрать подчеркивание и hover ссылок,вкинь любую ссылку рыбу на одной строке
// ну и нужно что бы весь div кнопки был ссылкой, а не сам текст-нажимать неудобно вообще, вроде li в div предлогал?





?>