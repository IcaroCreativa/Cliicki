# Cliicki
Website allows you to comment on the entire internet.



# Project Name
Cliiki
<!-- ![logo](http://127.0.0.1:5173/resources/js/images/C-Y-red.png) -->


## General Information
Cliiki is a web application allowing any registered user (older than 13 years old) to comment on any content found on the internet.  
The comment can then be shared with the application's community. Any comment can be liked by other users. We don't like dislikes. That's why you won't find the dislikes button in our application.  If something offends, there is the possibility to alert the administrator. 
If the user is a site administrator, he can measure the efficiency of his application through several KPIs.  
The application is responsive.

Have a good time.




# Technologies  



List of technologies used in this project : 
* <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="90" alt="Laravel Logo">[Laravel Breeze](https://laravel.com/docs/9.x/starter-kits) : Version 9.
* <img src="https://vue3-fr.netlify.app/logo.png" width="30" alt="Vue3js Logo">[Vue3.js](https://vue3-fr.netlify.app/guide/migration/introduction.html) : Version 3.0
* <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15d13IJ7gtixCZJXH-N-EctmRjvZyI8yw6BcbTX7A-g&s" width="60" alt="MySQL Logo">[MySQL](https://upload.wikimedia.org/wikipedia/commons/0/0a/MySQL_textlogo.svg) : Version 5.7 +
* <img src="https://cdn.tealfeed.com/articles/content-images/62f4025dde3f9a8b1dedc06f/1660158733560.jpeg" width="100" alt="Tailwindcss Logo">[Tailwindscss](https://tailwindcss.com/) : Version 3.0

# User interface language
French


# Installation  
After cloning the project, type the following shell commands:   

1. go into the project  
`cd Cliiki`

2. create an .env file at the root of the project 
`cp .env.example .env`

3. install composer dependencies  
`composer update`

4. install npm dependencies  
`npm install`

5. generate a key for your application  
`php artisan key:generate`

6. add the database connection config to your .env file  
`DB_CONNECTION=mysql`  
`DB_HOST=127.0.0.1`  
`DB_PORT=3306`  
`DB_DATABASE=commit_yowl`  
`DB_USERNAME=root`  
`DB_PASSWORD=*votre mot de passe de mysql*`

7. run the migration files to generate the schema  
`php artisan migrate`

8. seed your database with some users, categories, posts and comments  
`php artisan db:seed`

9. run webpack in 2 terminals  
`npm run dev`
`php artisan serve`  

10. Warning !  
Requires prior installation of Nodejs  version 16.17.1 
[nodejs](https://nodejs.org/en/)  


## License
This application is open-source under the [MIT license](https://opensource.org/licenses/MIT).  


## Remerciements  

La version initiale de ce guide a été rédigée par **[@Antonio][1], [@Christelle][2], [@Mathieu][3]** and **[@Nayel][4]**.    

Thanks to @Vetea for her support and advice.

[1]:https://github.com/IcaroCreativa
[2]:https://github.com/Christelle97431
[3]:https://github.com/MathD59
[4]:https://github.com/NayelAb

<!-- ------------------------------

**Mettre en gras du texte**

*Mettre en italique*

knklskvfqdhfjvhKLKVHLDKQVHKLFQHVJFQDJBJ   
ET REVENIR a LA LIGNE

Faire une liste à puces
* Liste 1
* Liste 2
* Liste 3

Faire une liste ordonnée
1. élément 1
2. élément 1
3. élément 1

Imbicartion de liste ordonnée
1. élément 1
    * liste 1
    * liste 2
2. élément 1
3. élément 1

Faire une citation
> ceci est une citation  
je suis revenue à la ligne

Afficher un bout de code
`le bout de code`

Mettre un lien dans le readme.md
Mon blog [nom du lien](https://nom du lien)

Mettre une image, un logo
![logo](https://lien amenant à l'image) -->
