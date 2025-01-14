<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

include 'db.php';

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT id, name, address, reason, duration, created_at FROM epasse WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your E-Passes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    .button {
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
        }
</style>
<body>
    <h2>Your Generated E-Passes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Reason</th>
            <th>Duration</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['address']); ?></td>
            <td><?php echo htmlspecialchars($row['reason']); ?></td>
            <td><?php echo htmlspecialchars($row['duration']); ?></td>
            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <nav>
        <button class="button"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a> </button>
   
    <button class="button"><a href="home.php" style="text-decoration: none; color: white;">Home</a></button>
    </nav>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
