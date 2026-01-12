<?php
return [
  "db_host" => getenv("MYSQL_HOST") ?: "mysql",
  "db_name" => getenv("MYSQL_DATABASE") ?: "appdb",
  "db_user" => getenv("MYSQL_USER") ?: "appuser",
  "db_pass" => getenv("MYSQL_PASSWORD") ?: "apppass",
];
