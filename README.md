<h1>Schindler, spol. s r.o.</h1>

<h3>Co budete potřebovat?</h3>
<ul>
    <li>Lokální webový server(PHP 7.1 a vyšší, MySQL(MariaDB))</li>
    <li>Git</li>
    <li>Composer</li>
</ul>

<hr />

<h3>Úkol:</h3>
<p>Vytvořte jednoduchý formulář, data z formuláře uložte do databáze a výsledky z databáze vypište do tabulky.
<br />
Využijte připravený Symfony(verze 4.4) projekt z Gitlabu(využijte Controller, Entity, templates, translations, atd.). Pro HTML prvky využijte Bootstrap, který je již součástí projektu. Vlastní CSS nevytvářejte.
<br />
Pokud si něčím nebudete úplně jistí, zkuste jít vlastní cestou a tu okomentujte. V krajním případě pište dotazy na email.
</p>

<hr />

<h3>Postup:</h3>
<ul>
    <li>Stáhněte si základní projekt(<b><i>git clone https://gitlab.com/schindler-it/test.git</i></b>)</li>
    <li>Spustit <b><i>composer install</i></b>, poté by měl být projekt funkční</li>
    <li>Na hlavní straně(index) vytvořte dva odkazy(Bootstrap buttons)
        <ul>
            <li>První odkaz bude směřovat na stránku /form, kde bude formulář pro ukládání dat do DB</li>
            <li>Druhý odkaz bude směřovat na stránku /list, kde bude tabulka s výpisem dat z DB</li>
        </ul>
    </li>
    <li>Vytvořte dvě tabulky(Entity). Jedna tabulka bude obsahovat jméno a příjmení. Druhá tabulka bude číselník pracovních pozic. Pro vytvoření DB schema a přidání ukázkových dat do číselníku pracovních pozic využijte migrace(<a href="https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema">https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema</a>)</li>
    <li>Stránka /form: Jméno, příjmení, pracovní pozice(html select). Klasický formulář, který po odeslání uloží data do DB.</li>
    <li>Stránka /list: Tabulkový výpis dat z DB. Př.: <table><tr><td>Jan</td><td>Novák</td><td>IT programátor</td></tr></table></li>
    <li>Hotový projekt zazipujte a pošlete emailem, případně přes vámi zvolené uložiště.</li>
</ul>

<h3>Užitečné odkazy:</h3>
<ul>
    <li><a href="https://getcomposer.org/">https://getcomposer.org/</a></li>
    <li><a href="https://getbootstrap.com/">https://getbootstrap.com/</a></li>
    <li><a href="https://symfony.com/doc/current/templates.html">https://symfony.com/doc/current/templates.html</a></li>
    <li><a href="https://symfony.com/doc/current/forms.html">https://symfony.com/doc/current/forms.html</a></li>
    <li><a href="https://symfony.com/doc/current/controller.html">https://symfony.com/doc/current/controller.html</a></li>
    <li><a href="https://symfony.com/doc/current/doctrine.html">https://symfony.com/doc/current/doctrine.html</a></li>
    <li><a href="https://symfony.com/doc/current/translation.html">https://symfony.com/doc/current/translation.html</a></li>
    <li><a href="https://symfony.com/doc/current/configuration.html">https://symfony.com/doc/current/configuration.html</a></li>
    <li><a href="https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema">https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema</a></li>
</ul>
