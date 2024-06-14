<?php include '../view/header.php'; ?>
<main>

    <!-- display a table of customer information -->
    <h2>View/Update Customer</h2>
    <form action="." method="post" id="aligned">
        <!--  ??? -->
        <input type="hidden" name="action" value="updateCustomer">

        <label>First Name:</label>
        <input type="text" name="firstName" value="<?php echo htmlspecialchars($customer['firstName']); ?>"><br>

        <label>Last Name:</label>
        <input type="text" name="lastName" value="<?php echo htmlspecialchars($customer['lastName']); ?>"><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($customer['email']); ?>"><br>

        <label>Phone Number:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($customer['phone']); ?>"/><br>

        <label>Password:</label>
        <input type="text" name="password" value="<?php echo htmlspecialchars($customer['password']); ?>"/><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Customer" /><br>
    </form>
    <p><a href="customer_search.php">Search Customers</a></p>

</main>
<?php include '../view/footer.php'; ?>