### Учебный проект «Игры разума» Hexlet (PHP-разработчик)
[![Actions Status](https://github.com/MT-cod/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/MT-cod/php-project-lvl1/actions)
<a href="https://codeclimate.com/github/codeclimate/codeclimate/maintainability"><img src="https://api.codeclimate.com/v1/badges/a99a88d28ad37a79dbf6/maintainability" /></a>
[![superlinter](https://github.com/MT-cod/php-project-lvl1/workflows/superlinter/badge.svg)](https://github.com/MT-cod/php-project-lvl1/actions)
[![Latest Stable Version](https://img.shields.io/packagist/v/mt-cod/php-project-lvl1.svg)](https://packagist.org/packages/mt-cod/php-project-lvl1)

<h2>Цель</h2>

<p>Первый проект включает в себя интерактивную часть — взаимодействие с пользователем командной строки. Для этого понадобится дополнительная библиотека. А это значит, что нужно научиться ее устанавливать, подключать (импортировать) и запускать. Для последнего обязательно чтение документации. Именно так происходит реальная разработка.</p>

<p>В процессе создания файлов, функций, констант и переменных нужно постоянно думать о правильном именовании. Несмотря на наличие большого числа статей и рекомендаций, именование остается одной из самых сложных частей для всех, кто проходит проекты (да и программирует тоже).</p>

<p>Архитектура первого проекта — корневая часть всей системы. Она опирается на основные принципы организации кода: изоляцию побочных эффектов, создание правильных барьеров абстракций (высокая модульность). Здесь возникает множество вопросов: «кто за что отвечает?», «кто взаимодействует с пользователем?» «как игра запускается?» и многое другое. С архитектурой придется повозиться, даже если у вас есть опыт реальной разработки.</p>

<h2 id="opisanie">Описание</h2>
<p>«Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново. Игры:</p>

<ul>
<li>Калькулятор. Арифметические выражения, которые необходимо вычислить.</li>
<li>Прогрессия. Поиск пропущенных чисел в последовательности чисел.</li>
<li>Определение четного числа.</li>
<li>Определение наибольшего общего делителя.</li>
<li>Определение простого числа.</li>
</ul>

<p>Пример игры:</p>
<pre class="hljs"><code class="sh"><span style="color: #008080">$ </span>brain-progression
Welcome to the Brain Game!
What number is missing <span style="color: #000000;font-weight: bold">in </span>this progression?
May I have your name? Roman
Hello, Roman!
Question: 14 .. 18 20 22 24 26 28
Your answer: 16 <span style="color: #999988;font-style: italic"># Пользователь вводит ответ</span>
Correct!
Question: 5 6 7 8 9 .. 11 12
Your answer: 10 <span style="color: #999988;font-style: italic"># Пользователь вводит ответ</span>
Correct!
Question: 12 15 18 21 .. 27 30 33
Your answer: 24 <span style="color: #999988;font-style: italic"># Пользователь вводит ответ</span>
Correct!
Congratulations, Roman!
</code></pre>

<h3>Аскинемы с примерами игр</h3>

<a href="https://asciinema.org/a/Nk6MlJc49603tFHbmAI37btJQ">brain-even asciinema</a>
<br>
<a href="https://asciinema.org/a/R2hYESVl7wxzUFo1C79YA6p3B">brain-calc asciinema</a>
<br>
<a href="https://asciinema.org/a/YmV72bmgKM0yM5T8QNZp9oFiA">brain-gcd asciinema</a>
<br>
<a href="https://asciinema.org/a/HmGMlvQHKjcljbJj2TAvxHjtq">brain-progression asciinema</a>
<br>
<a href="https://asciinema.org/a/VZULvdiOqsGWzH0T3pP91To8R">brain-prime asciinema</a>
