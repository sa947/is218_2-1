
<?php
    $product_description = $_POST['product_description'];
        $list_price = $_POST['list_price'];
	    $discount_percent = $_POST['discount_percent'];
	    ?>
	    <!DOCTYPE html>
	    <html>
	    <head>
	    <title>Product Discount Calculator</title>
	    <link rel="stylesheet" type="text/css" href="main.css">
	    </head>
	    <body>
	    <main>

	    <label>Product Description:</label>
	    <span><?php echo $product_description; ?></span><br>

	    <label>List Price:</label>
	    <span><?php echo $list_price; ?></span><br>

	    <label>Standard Discount:</label>
	    <span><?php echo $discount_percent; ?></span><br>

	    </main>
	    </body>
	    </html>
