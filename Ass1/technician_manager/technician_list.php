<?php include '../view/header.php'; ?>
<main>

    <h1>Technician List</h1>

    <!-- display a table of technicians -->
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($technicians as $technician) : ?>
             <!--  ??? -->
        <?php endforeach; ?>
    </table>
    <p><a href="?action=showAddForm">Add Technician</a></p>

</main>
<?php include '../view/footer.php'; ?>