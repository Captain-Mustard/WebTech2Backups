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
        <?php foreach ($technicians as $technician): ?>
            <tr>
                <td><?php echo htmlspecialchars($technician['firstName']); ?></td>
                <td><?php echo htmlspecialchars($technician['lastName']); ?></td>
                <td><?php echo htmlspecialchars($technician['email']); ?></td>
                <td><?php echo htmlspecialchars($technician['phone']); ?></td>
                <td><?php echo htmlspecialchars($technician['password']); ?></td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="deleteTechnician">
                        <input type="hidden" name="techID"
                            value="<?php echo htmlspecialchars($technician['techID']); ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="?action=showAddForm">Add Technician</a></p>

</main>
<?php include '../view/footer.php'; ?>