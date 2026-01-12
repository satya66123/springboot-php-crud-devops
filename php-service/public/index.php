<?php
$config = require __DIR__ . "/../src/config.php";

$dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8mb4";
$pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

require __DIR__ . "/../src/EmployeeDao.php";
$dao = new EmployeeDao($pdo);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $role = trim($_POST["role"] ?? "");

  if ($name !== "" && $email !== "") {
    $dao->create($name, $email, $role);
  }
  header("Location: /");
  exit;
}

if (isset($_GET["delete"])) {
  $dao->delete((int)$_GET["delete"]);
  header("Location: /");
  exit;
}

$employees = $dao->all();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>PHP CRUD - Employees</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    .card { padding: 16px; border: 1px solid #ddd; border-radius: 10px; margin-bottom: 18px;}
    input { padding: 10px; margin: 6px 0; width: 320px; max-width: 100%; }
    button { padding: 10px 14px; cursor:pointer; }
    table { width: 100%; border-collapse: collapse; margin-top: 14px; }
    th, td { border: 1px solid #ddd; padding: 10px; }
    th { background: #f3f3f3; }
    .danger { color: #b00020; }
  </style>
</head>
<body>

<h2>PHP Service - Employees CRUD (MySQL)</h2>

<div class="card">
  <h3>Add Employee</h3>
  <form method="post">
    <input name="name" placeholder="Name" required /><br/>
    <input name="email" placeholder="Email" required /><br/>
    <input name="role" placeholder="Role" /><br/>
    <button type="submit">Create</button>
  </form>
</div>

<div class="card">
  <h3>Employees</h3>
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Created</th><th>Action</th>
    </tr>
    <?php foreach ($employees as $e): ?>
      <tr>
        <td><?= htmlspecialchars($e["id"]) ?></td>
        <td><?= htmlspecialchars($e["name"]) ?></td>
        <td><?= htmlspecialchars($e["email"]) ?></td>
        <td><?= htmlspecialchars($e["role"]) ?></td>
        <td><?= htmlspecialchars($e["created_at"]) ?></td>
        <td>
          <a class="danger" href="/?delete=<?= (int)$e["id"] ?>" onclick="return confirm('Delete employee?')">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

</body>
</html>
