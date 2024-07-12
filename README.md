<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Compiled-js-css-files-laravel-10
Using compiled JavaScript and CSS files directly from resources folder

**Advantages**
- Using compiled JavaScript and CSS files will improve the application performance
- It increase the speed of application. 
- Compiled files are less readable on client side 

**Dis-advantanges**
- It is not much efficient for small applications


## Steps to use - 

1. install the node modules 
```sh
npm install
```

2. Ways to use CSS/JS files
   ## Load on specific location
    - you can use blade `@vite()` directive to load your CSS and JS files
    ```html
    <!-- for css -->
    @vite(['resources/css/myStyles.css']) 

    <!-- for js -->
    @vite(['resources/js/myScript.js'])
    ```
    - Full Example
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        @vite(['resources/css/myStyles.css'])
    </head>
    <body>
        
        <!--rest of your code...-->
        
        @vite(['resources/js/myScript.js'])
    </body>
    </html>
    ```

   ## Load at once
    you can actually register all CSS and JS files in single JavaScript file `app.js` - and use that file

    - register other files in `resources\js\app.js`
    ```js
    import './bootstrap';

    import '../css/myStyles.css';

    import './myScript';
    ```
    - link them at once 
    ```html
    @vite(['resources/js/app.js'])
    ```
    - full example
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        
        <!--rest of your code...-->
        
    </body>
    </html>
    ```





3. start the development server for live change reflection
    ```sh
    npm run dev
    ```
    when you are happy with your changes confirm the build of comilation files
    ```sh 
    npm run build
    ```
    **Note** : The Compilation is done by `npm run build` command

## Files on which i made changes
- resources\js\myScript.js
- resources\js\app.js
- resources\css\myStyles.css
- resources\views\welcome.blade.php

<br />
<br />
<p align="center">⭐️ Star my repositories if you find it helpful.</p>
<br />