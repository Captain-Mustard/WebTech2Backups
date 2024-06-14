<?php include '../view/header.php'; ?>
<main>
    <h2>Customer Search</h2>

    <!-- display a search form -->
    <form action="." method="post">
        <!--  ??? -->
        <input type="hidden" name="action" value="searchCustomers">

        <label>Last Name:</label>
        <input type="text" name="lastName"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Search" /><br>
    </form>

    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php elseif ($customers): ?>
        <h2>Results</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer): ?>
                <!--  ??? -->
                <tr>
                    <td><?php echo htmlspecialchars($customer['firstName' + ' ' + 'lastName']); ?></td>
                    <td><?php echo htmlspecialchars($customer['email']); ?></td>
                    <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="displayCustomer">
                            <input type="hidden" name="productCode"
                                value="<?php echo htmlspecialchars($customer['customerID']); ?>">
                            <input type="submit" value="Select">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>