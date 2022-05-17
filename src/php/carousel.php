<div class="carousel__wrapper  overflow-hidden">
    <?php 
        $connection = mysqli_connect('localhost', 'root', 'root', 'test_db');
        if ($connection == false) {
            echo 'произошла ошибка';
            echo mysqli_connect_error();
            exit;
        }
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            $id = 1;
        }
        $list = mysqli_query($connection, "SELECT * FROM `list` WHERE `slides_id`=$id");
        $result = mysqli_query($connection, "SELECT * FROM `slides` WHERE `id`=$id");
        $slide = [];
        while ( $item = mysqli_fetch_assoc($result) ) {
            $slide = $slide + $item;
        }
        mysqli_close($connection);
    ?>
        <div class="carousel__text-content">
            <div class='title'><?php echo $slide['title'] ?></div>
            <div class='subtitle'><?php echo $slide['subtitle'] ?></div>
            <ul class='list-unstyled'>
                <?php 
                    while ( $listItem = mysqli_fetch_assoc($list) ) {
                        echo '<li>' . $listItem['list item'] . '</li>';
                    }
                ?>
            </ul>
            <div class='price'>Всего <?php echo $slide['price'] ?> <span><?php echo $slide['oldPrice'] ?><span></div>
            <div class='btns__wrapper'>
                <button class='btn button openModal'>Записаться</button>
                <button class='btn button button__outline'>Подробнее</button>
            </div>
        </div>
        <img src='img/carousel/Frame1.png' alt='' class='carousel__bg d-none d-md-block'>
</div>


            