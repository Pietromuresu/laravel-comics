<div align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
<h1><strong style="color: #EF3B2D;">Laravel-comics</strong></h1></div>

# Refactoring 'vite-comics' from Vue to Laravel
Questa repo template contiene una versione modificata del pacchetto `laravel/laravel`. Tale versione differisce nei seguenti punti:

- `PostCSS` è stato rimosso
- È stato installato `SASS`
- È stato installato `Bootstrap`
- La cartella `resources/css` è stata rimossa
- È stata aggiunta la cartella `resources/scss` contenente il file `app.scss`
- Il file `vite.config.js` è stato modificato al fine di includere i file `resources/scss/app.scss` e `resources/js/app.js` nella compilazione. Sono stati inoltre aggiunti gli alias per le cartelle `/resources/` e `node_modules/bootstrap`
- Nella view `welcome`:
    - Sono stati inclusi gli asset tramite direttiva `@vite`
    - È stato rimosso lo stile preesistente
    - È stato modificato il contenuto


# To do: 

- Tradurre la repository 'vite-comics' in Laravel
