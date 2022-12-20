<?php include'header.php' ?>
<?php include'functions.php' ?>

<?php

$drinks = get_drinks();

?>
    <main>
        <div class="header container">
            <h1>Our Beverages</h1>
            <p>This is our selection of high quality beverages suitable for your party.</p>
        </div>
        <div class="beverages container flex justify-center">
            <div class="w-33">
            <?php if (mysqli_num_rows($drinks)) { ?>
                <div class="beverage">
                <?php foreach ($drinks as $drink) { ?>
                    <div class="image">
                    <img src="images/<?= $drink['image'] ?>" alt="image" />
                        <div class="add-to-cart">
                            <div class="buttons">
                                <form action="">
                                <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                                <input type="hidden" id="item-<?= $drink['d_id'] ?>" name="quantity" value="1">
                                <button type="submit" name="add-to-cart" >Add To Basket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h1><?= $drink['name'] ?></h1>
                        <p>£ <?= $drink['price'] ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </main>


<?php include'footer.php' ?>