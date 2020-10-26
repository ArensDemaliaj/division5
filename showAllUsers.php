<table class="table table-striped table-hover" style="background-color: rgba(255, 255, 255, 0.4); border-radius:30px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Admin</th>
            <th style="text-align:center">Delete</th>
            <th style="text-align:center">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once 'db_connect.php';
        if (isset($_COOKIE["fullname"]) && isset($_COOKIE["admin"])) {
            $sql1 = "SELECT id, firstName, lastName, email, admin FROM users";
            $result = $conn->query($sql1);

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["firstName"] . "</td>";
                echo "<td>" . $row["lastName"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["admin"] . "</td>";
                echo "<td style='text-align:center'><a href='deleteUser.php?id=" . $row["id"] . "'>X </a>";
                echo "<td style='text-align:center'><a href='editUser.php?id=" . $row["id"] . "'>O </a>";
            }
        } else {
            header("location: login.php?fehler=2");
        }
        ?>
    </tbody>
</table>