
<?php 
    $jsondata = file_get_contents("product.json");
    $json = json_decode($jsondata);



?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script async src="script.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="modal hidden"></div>
            
            <div class="holder">
            <div class="form__container_flex hidden">
                    
                    <form class="form__form" action="send.php" method="post">
                        <h2>Форма</h2>
                        <span class="form__span">Имя</span>
                        <input type="text" name="name" placeholder="Укажите Ваше имя" required>
                        <span class="form__span">Телефон</span>
                        <input type="text" name="phone" placeholder="Укажите мобильный телефон" required>
                        <span class="form__span">Электронная почта</span>
                        <input type="text" name="email" placeholder="Укажите e-mail" required>
                        <span class="form__span">Наименование товара</span>
                        <input type="text" name="product_name" placeholder="Укажите название товара" required>
                        <span class="form__span"></span>
                        <input class="form__submit" type="submit" value="Отправить">
                    </form>
                </div>
            </div>
               
            
            
            
            <div class="cards__container_flex">

                <?php 
                    foreach ($json as $product)
                    {
                        foreach ($product as $k) 
                        {
                            echo "<div class=\"cards__card\"> ";
                            echo "<img src=\"";
                            echo $k->img;
                            echo "\">";
                            echo "<span>";
                            echo $k->name;
                            echo "</span>";
                            echo "<br>";
                            echo "<span class=\"cards__span_price\">";
                            echo $k->price;
                            echo "&#8381;";
                            echo "</span>";
                            echo "<div class=\"cards__btn\">";
                            echo "Купить";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                
                ?>

            </div>
        </div>
        
    </body>
</html>