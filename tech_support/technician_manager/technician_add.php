<?php include '../view/header.php'; ?>
<main>
    <h1>Add Technician</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="addTechnician">

        <label>First Name:</label>
        <input type="text" name="firstName"><br>

        <label>Last Name:</label>
        <input type="text" name="lastName"><br>

        <label>Email:</label>
        <input type="text" name="email"><br>

        <label>Phone Number:</label>
        <input type="text" name="phone" />

        <label>Password:</label>
        <input type="text" name="password" />

        <label>&nbsp;</label>
        <input type="submit" value="Add Technician" /><br>
    </form>
    <p><a href="?action=listTechnicians">View Technician List</a></p>
</main>
<?php include '../view/footer.php'; ?>