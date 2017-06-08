<?php

$dbConfig = array(
    'driver'    => 'sqlite',
    'database'  => 'contact-form.sqlite'
);

$connection = new \Pixie\Connection('sqlite', $dbConfig);
$qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);

$qb->query("
  CREATE TABLE IF NOT EXISTS contacts (
    id integer PRIMARY KEY,
    name text NOT NULL,
    phone text NOT NULL,
    email text NOT NULL,
    message text NOT NULL DEFAULT ''
  )
");