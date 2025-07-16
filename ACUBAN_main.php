<?php 
    session_start();
    include("ACUBAN_header.php");
    require "DATABASE_connection.php";

    if (!isset($_SESSION['logged_in'])) {
        header("Location: ACUBAN_login.php");
        exit();
    }

    $query = $databaseName->query("SELECT * FROM players_table");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="mainpage_design.css">
</head>
<body>
    <div class="main-container">
           <h2>Add a Player</h2>
    <div class="form-section">
        <form action="ACUBAN_insert.php" method="POST" enctype="multipart/form-data">
            <label>Full Name</label>
            <input type="text" name="iname" required>

            <label>Age</label>
            <input type="number" name="iage" required>

            <label>Jersey Number</label>
            <input type="number"  name="ijerseyNum" required>

            <label>Position</label>
            <input type="text" name="iposition" required>

            <label>Height(in cm)</label>
            <input type="number" step="0.01" name="iheight" required>

            <label>Weight(in kg)</label>
            <input type="number" step="0.01" name="iweight" required>

            <label>Current Status</label>
            <input type="text" name="istatus" required>


            <label>Photo</label>
            <input type="file" name="userfile" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <h2>Player List</h2>
    <div class="table-section">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Jersey Number</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Current Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while($result = $query->fetch_assoc()): ?>
                <tr>
                    <td><?= $result['players_id'] ?></td>
                    <td><img src="<?= $result['photo'] ?>" class="player-photo"></td>
                    <td><?= $result['full_name'] ?></td>
                    <td><?= $result['age'] ?></td>
                    <td><?= $result['jersey_number'] ?></td>
                    <td><?= $result['height_cm'] ?></td>
                    <td><?= $result['weight_kg'] ?></td>
                    <td><?= $result['current_status'] ?></td>
                    <td>
                        <a href="ACUBAN_edit.php?itid=<?= $result['players_id'] ?>" class="btn-edit">EDIT</a>
                        <a href="ACUBAN_delete.php?itid=<?= $result['players_id'] ?>" class="btn-delete">DELETE</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("ACUBAN_footer.php"); ?>
</body>
</html>