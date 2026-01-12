<?php

class EmployeeDao {
  private PDO $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  public function all(): array {
    $stmt = $this->pdo->query("SELECT id, name, email, role, created_at FROM employees ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create(string $name, string $email, string $role): void {
    $stmt = $this->pdo->prepare("INSERT INTO employees(name, email, role) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $role]);
  }

  public function delete(int $id): void {
    $stmt = $this->pdo->prepare("DELETE FROM employees WHERE id=?");
    $stmt->execute([$id]);
  }
}
