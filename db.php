<?php

$dbConfig = array(
    'driver'    => 'sqlite',
    'database'  => 'chinook.db'
);

$connection = new \Pixie\Connection('sqlite', $dbConfig);
$qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);

$qb->query("
  CREATE TABLE IF NOT EXISTS tests (
    id integer PRIMARY KEY,
    fname text NOT NULL,
    phone text NOT NULL,
    email text NOT NULL
    )
");