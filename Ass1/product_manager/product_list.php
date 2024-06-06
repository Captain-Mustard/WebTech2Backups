<?php include '../view/header.php'; ?>
<main>
    <h1>Product List</h1>
    <!-- display a table of products -->
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Version</th>
            <th>Release Date</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo htmlspecialchars($product['productCode']); ?></td>
            <td><?php echo htmlspecialchars($product['name']); ?></td>
            <td><?php echo htmlspecialchars($product['version']); ?></td>
            <td><?php echo htmlspecialchars($product['releaseDate']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="deleteProduct">
                <input type="hidden" name="productCode"
                       value="<?php echo htmlspecialchars($product['productCode']); ?>">
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="?action=showAddForm">Add Product</a></p>

</main>
<?php include '../view/footer.php'; ?>