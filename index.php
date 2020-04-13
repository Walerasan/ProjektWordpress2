<?php get_header(); ?>
<?php

wp_nav_menu($args = array(
    'theme_location'    => "main-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    'menu_class'        => "poziom1", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    'container_class'   => "menu", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    'before'          => "<li class='item'>",
    'after'           => "</li>",
    'link_before'       => "", // (string) Text before the link text.
    'link_after'        => "", // (string) Text after the link text.
    'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
));

?>
    <nav class="menu">
            
                <ul class="poziom1">
                   <li><a href="index.php"><img src="<?php bloginfo('template_directory') ?>/img/git.png" alt="logoGitHub" class="logoGitHub"></a></li>
                   <li class="item"><a href="#">Strona główna</a></li>
                   <li class="item"><a href="#">Hobby</a></li>
                   <li class="item"><a href="#">Galeria</a><i class="arrow"></i>
                       <ul class="poziom2">
                           <li class="item"><a href="#">ASG</a></li>
                           <li class="item"><a href="#">TATRY</a></li>
                       </ul>
                   </li>
                   <li class="item"><a href="#">Praca</a><i class="arrow"></i>
                       <ul class="poziom2">
                           <li class="item"><a href="#">Programowanie</a></li>
                           <li class="item"><a href="#">Edukacja</a></li>
                       </ul>
                   </li>
                   <li class="item"><a href="#">Kontakt</a></li>
                </ul>
            
        </nav>
    <div class="wrapperstrona">
        <div class="container">
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu</h1>
                </header>
                <p><img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
                <div class="stopkaartykulu">
                    <footer>
                        <span> <i>Autor: Walerasan </i> <button class="przyciski">Więcej...</button></span>
                    </footer>
                </div>
            </article>
            <div class="clear"></div>
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu</h1>
                </header>
                <p><img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
                <div class="stopkaartykulu">
                    <footer>
                        <span> <i>Autor: Walerasan </i> <button class="przyciski">Więcej...</button></span>
                    </footer>
                </div>
            </article>
            <div class="clear"></div>
            <article class="artykul">
                <header>
                    <h1>Tytuł artykułu</h1>
                </header>
                <p><img src="<?php bloginfo('template_directory') ?>/img/tatry1.jpg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Voluptatem, ex, porro inventore quasi praesentium quae mollitia officia 
                    aperiam necessitatibus maxime voluptatum eum. Tempora, voluptatem necessitatibus 
                    ullam non aperiam quod provident.
                </p>
     
                <div class="stopkaartykulu">
                    <footer>
                        <span> <i>Autor: Walerasan </i> <button class="przyciski">Więcej...</button></span>
                    </footer>
                </div>
            </article>
            <div class="clear"></div>
        </div>
        <div class="sidebar">
            <div class="sidebarsrodek">
                <h2>Programowanie w języku PHP - WORDPRESS 2020</h2>
                <div id="box"></div>
                <div class="ikony">
                    <a href="#"><img class="ikonyview" src="<?php bloginfo('template_directory') ?>/img/sass.svg"></a>
                    <a href="#"><img class="ikonyview" src="<?php bloginfo('template_directory') ?>/img/css3-alt.svg"></a>
                    <a href="#"><img class="ikonyview" src="<?php bloginfo('template_directory') ?>/img/php.svg"></a>
                    <a href="#"><img class="ikonyview" src="<?php bloginfo('template_directory') ?>/img/wordpress.svg"></a>
                    <a href="#"><img class="ikonyview" src="<?php bloginfo('template_directory') ?>/img/html5.svg"></a>
                </div>
                <div class="formularzkontaktowy">
                    <fieldset>
                        <legend>Formularz kontaktowy</legend>
                        <form>
                            <input type="text" placeholder="Podaj imię">
                            <input type="text" placeholder="Podaj nazwisko">
                            <textarea cols="80" rows="5"></textarea>
                            <input type="submit" value="Wyślij..." class="submitbtn">
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
     </div>
<?php get_footer(); ?>
