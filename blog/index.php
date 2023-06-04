<?php 
    require ("./components/head/HeadBuilder.php");
    require ("./components/blocks/blogpostBlocks.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $headBuilder = new HeadBuilder();
        $headBuilder
            ->setPageTitle("Blog-Home")
            ->addCssFile("/static/css/blog/blog_home_layout.css")
            ->addCssFile("/static/css/blog/layout-styles.css");
        echo $headBuilder->build();
    ?>
</head>
<body>

    <?php require ("./components/layout/header.php"); ?>
    
    <main>

        <?php 
            blogTitle("Recent Posts");
        ?>

        <article>
            <a href="/blog/php_lang/intro.php"><h3>Unlocking the Power of PHP for Web Development</h3></a>
            <p>PHP (Hypertext Preprocessor) is a widely-used scripting language designed for web development. It is known for its versatility, ease of use, and robustness, making it a popular choice among developers around the world. In this blog post, we will explore what PHP is, how it works, and why it has become a go-to language for creating dynamic and interactive websites</p>
            <br>
        </article>

        <article>
            <h3>Unlocking the Power of PHP for Web Development</h3>
            <p>PHP (Hypertext Preprocessor) is a widely-used scripting language designed for web development. It is known for its versatility, ease of use, and robustness, making it a popular choice among developers around the world. In this blog post, we will explore what PHP is, how it works, and why it has become a go-to language for creating dynamic and interactive websites</p>
            <br>
        </article>

        <article>
            <h3>Unlocking the Power of PHP for Web Development</h3>
            <p>PHP (Hypertext Preprocessor) is a widely-used scripting language designed for web development. It is known for its versatility, ease of use, and robustness, making it a popular choice among developers around the world. In this blog post, we will explore what PHP is, how it works, and why it has become a go-to language for creating dynamic and interactive websites</p>
            <br>
        </article>


    </main>

    <?php require ("./components/layout/footer.php"); ?>

</body>
</html>