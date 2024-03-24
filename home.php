

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php require_once 'header.php'; ?>

<section class="products">

   <h1 class="title">Orders</h1>

   <div style="font-size: 15px;">
    <table id="orders_table" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Method</th>
                <th>Address</th>
                <th>Total Products</th>
                <th>Total Price</th>
                <th>Placed On</th>
                <th>Payment Status</th>
            </tr>
        </thead>
    </table>
</div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Have any questions?</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
      <a href="contact.php" class="btn">Contact us</a>
   </div>

</section>

<?php require_once 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="js/script.js"></script>
<script>
$(document).ready(function() {
    $('#orders_table').DataTable({
        "ajax": {
            "url": "get_orders.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "user_id" },
            { "data": "name" },
            { "data": "number" },
            { "data": "email" },
            { "data": "method" },
            { "data": "address" },
            { "data": "total_products" },
            { "data": "total_price" },
            { "data": "placed_on" },
            { "data": "payment_status" }
        ]
    });
});
</script>
</body>
</html>
