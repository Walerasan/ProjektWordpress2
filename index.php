<?php get_header(); ?>

<nav class="menu">
    <div class="logoGitHubBox">
        <a href="index.php"><img src="<?php bloginfo('template_directory') ?>/img/git.png" alt="logoGitHub" class="logoGitHub"></a>
    </div>
<?php
$args = array(
    'theme_location'    => "main-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    'container'         => "div",
    'container_class'   => "boxmenu",
    'menu_class'      => "poziom1",
    'depth'           => 2,
);
wp_nav_menu( $args );


?>
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
