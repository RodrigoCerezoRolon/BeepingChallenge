<h1>Challange Beeping</h1>

<h3>Pasos para iniciar el proyecto </h3>
<p>
    En el archivo .env
    Las variables tienen que ser

    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=beeping
    DB_USERNAME=root
    DB_PASSWORD=
</p>
<ol>
    <li> Executar comando php artisan migrate</li>
    <li> Executar comando php artisan db:seed</li>
    <li> Executar comando php artisan calculate-costs</li>
</ol>

<h3>Endpoint de la tabla</h3>

<ul>
    <li> GET tabla URL:
        http://127.0.0.1:8000/orders o http://localhost/orders
    </li>

</ul>