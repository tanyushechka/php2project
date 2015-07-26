<!DOCTYPE html>
<html>
<!------   ДЗ выполнено на кнопке класса .inset, вместо кнопок другого цвета - форма выбора цвета кнопок formColor   ------------->

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/style.css"/>
    <?php
    $rgb = (isset($_GET['color'])) ? $_GET['color'] : '#ff0000';
    $r = \App\Classes\Application::getR($rgb);
    $g = \App\Classes\Application::getG($rgb);
    $b = \App\Classes\Application::getB($rgb);
    $h = \App\Classes\Application::getH($rgb);
    $s = \App\Classes\Application::getS($rgb);
    $l = \App\Classes\Application::getL($rgb);
    $hNeon = \App\Classes\Application::getH('#0f192a');
    $sNeon = \App\Classes\Application::getS('#0f192a');
    $lNeon = \App\Classes\Application::getL('#0f192a'); ?>
    <style>
        a {
            color: inherit;
            text-decoration: none;
        }

        .clearfix:before, .clearfix:after {
            content: "";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        .box {
            width: 140px;
            padding: 30px;
            background-color: hsl(204.4, 84.9%, 60%);
            word-wrap: break-word;
            position: relative;
            float: left;
            font-size: 3em;
            margin: 20px 10px;
            background-color: hsl(<?php echo $h; ?> , 50%, 60%);
            color: hsl(<?php echo $h; ?> , 50%, 40%);
            box-shadow: 5px 5px 15px hsla(<?php echo $h; ?>, 50%, 30%, 0.8);
            text-shadow: 1px 1px 1px #555;
        }

        .box:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 55%);
        }

        .box:active {
            top: 1px;
        }

        .inset {
            border-radius: 25px;
            text-shadow: 0px -2px 2px #000, 0px 1px 1px #bbb;
            font-family: 'Microsoft Sans Serif', Tahoma, Arial, Verdana, Sans-Serif;

        }

        .blur {
            color: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .3);
            background-color: hsl(<?php echo $h; ?> , 50%, 20%);
            text-shadow: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .5) 0 0 15px,
            rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .5) 0 0 10px;
            transform: rotate(10deg);
            border-radius: 10px;

        }

        .blur:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 15%);
        }

        .neon {

            background-color: #0f192a;
            box-shadow: 5px 5px 15px hsla(<?php echo $hNeon; ?>, <?php echo $sNeon; ?>%, <?php echo $lNeon; ?>%, 0.8);
            color: <?php echo $rgb; ?>;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px <?php echo $rgb; ?>,
            0 0 30px <?php echo $rgb; ?>, 0 0 40px <?php echo $rgb; ?>, 0 0 55px <?php echo $rgb; ?>,
            0 0 75px <?php echo $rgb; ?>;
            border-radius: 90px;
        }

        .neon:hover {
            background-color: hsl(<?php echo $hNeon; ?>, <?php echo $sNeon; ?>%, <?php echo $lNeon-25; ?>%);
        }

        .fire {
            width: 200px;
            color: <?php echo $rgb; ?>;
            background-color: #333;
            text-shadow: #fff 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px;
            transform: skew(-10deg);
            border-radius: 5px;
        }

        .fire:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 20%);
        }

    </style>

</head>
<body>

<div id="wrapper">
    <header role="banner">
        <h1>The best centre</h1>

        <p>reliable information & perfect service</p>

        <div>
            logged <?php echo $_SESSION['role'] . ' ' . $_SESSION['username']; ?></div>

        <nav class="clearfix">
            <ul>

                <li>
                    <div class="box inset"><a href="/">Articles</a></div>
                </li>
                <li>
                    <div class="box blur"><a href="/">Video</a></div>
                </li>
                <li>
                    <div class="box neon">
                        <a href="/">Audio</a>
                    </div>
                </li>
                <li>
                    <div class="box fire"><a href="/">Hot News</a></div>
                </li>
            </ul>
        </nav>

<!------   форма для выбора цвета кнопок главного меню    ------------->

        <form id="formColor" action="" method="get">
            <input type="color" name="color" value="<?php $_GET['color']; ?>"/>
            <input type="submit"/>
        </form>

    </header>
    <br><br>
    <main role="main">
        <header>
            <h2>Review of a selected article</h2>

            <p><a href="/">All articles</a> > <a href="/">Category</a></p>
        </header>

        <article>
            <section>
                <header>
                    <h3><?php echo $items->title; ?></h3>

                    <p>posted <?php echo $items->date; ?></p>
                </header>
                <h4>chapter 1</h4>

                <p><?php echo $items->text; ?></p>
                <figure>
                    <figcaption>
                        comment for image
                    </figcaption>
                    <img src="/images/8.jpg">
                </figure>
                <details>
                    <summary>incidentally</summary>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores
                        consectetur cupiditate dicta harum libero modi molestiae nemo non omnis ratione repellendus
                        similique, soluta! Error impedit iste itaque unde voluptatem.</p>
                </details>

                <h4>chapter 2</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid commodi cupiditate distinctio
                    ducimus
                    explicabo facere illo in, inventore laboriosam libero nobis nostrum officiis pariatur, quibusdam
                    repellendus
                    rerum suscipit tenetur voluptatum.
                </p>
                <footer>
                    <p><?php echo 'by ' . $items->author; ?></p>

                    <p>tags: <a href="/">Lorem</a></p>
                </footer>
            </section>

            <section>
                <header>
                    <h3>Comments</h3>

                    <p>You can ask a question here</p>
                </header>
                <form action="" method="get" id="formComment">
                    <input type="text" name="userName" pattern="[a-zA-Z0-9]+" required="required"/>
                    <input type="email" name="email"/>
                    <input type="url" name="url"/>

                    <textarea name="text" required="required"></textarea>
                    <br>
                    <button>submit</button>
                </form>
            </section>
            <section>
                <article>
                    <h4>author & date</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam culpa, debitis
                        deleniti error incidunt, iste iure laboriosam maiores modi neque omnis optio quidem repellendus
                        tempore ut veritatis vero, voluptatum.
                    </p>
                </article>

            </section>
        </article>
    </main>
    <aside>
        <h2>Aside</h2>
        <section>
            <h3>Categories</h3>
            <ul>
                <li class="category"><a href="/">Latest</a></li>
                <li class="category"><a href="/">All</a></li>
                <li class="category"><a href="/">Deposit</a></li>
                <li class="category"><a href="/">Credit</a></li>
                <li class="category"><a href="/">Telebank</a></li>
            </ul>
        </section>
        <section>
            <h3>Helpful References</h3>
            <ul>
                <li><a href="http://www.lingvo-online.ru/ru">lingvo.ru</a></li>
                <li><a href="http://www.banki.ru/">banki.ru</a></li>
                <li><a href="http://www.plusworld.ru/">plusworld.ru</a></li>
                <li><a href="http://www.gramota.ru/">gramota.ru</a></li>
            </ul>
        </section>
        <h3>Helpful References</h3>
    </aside>

    <footer>
        <nav>
            <ul>
                <li><a href="/edit/editing/">edit</a></li>
                <li><a href="/edit/delete/<?php echo $_SESSION['pageid']; ?>">delete</a></li>
                <li><a href="/">home</a></li>
            </ul>
        </nav>

        <address>our address is: some text</address>
        <br><br>

        <p>no rights reserved</p>
        <copyright>
    </footer>
</div>
</body>
</html>