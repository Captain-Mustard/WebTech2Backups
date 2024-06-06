<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="addProduct">

        <label>Code:</label>
        <input type="text" name="code"><br>

        <label>Name:</label>
        <input type="text" name="name"><br>

        <label>Version:</label>
        <input type="text" name="version"><br>

        <label>Release Date:</label>
        <input type="text" name="releaseDate" />
        <label class="message">Use 'yyyy-mm-dd' format</label><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" /><br>
    </form>
    <p><a href="?action=listProducts">View Product List</a></p>

</main>
<?php include '../view/footer.php'; ?>