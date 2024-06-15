<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)): ?>
        <!--  ??? -->
        <?php echo htmlspecialchars($message); ?>
    <?php else: ?>
        <form action="." method="post" id="aligned">
            <!--  ??? -->
            <?php echo "<select>";
            while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row[' productCode'] . "'>" . $row['productName'] . "</option>" ; } 
            echo "</select>" ; ?>
        </form>
     <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>