<?php
// SQLite storage for landlord accounts, accommodation listings and bookings.
$dataDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data';
if (!is_dir($dataDirectory)) {
    mkdir($dataDirectory, 0775, true);
}

$db = new PDO('sqlite:' . $dataDirectory . DIRECTORY_SEPARATOR . 'varsitystay.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->exec('PRAGMA foreign_keys = ON');
$db->exec("CREATE TABLE IF NOT EXISTS landlords (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password_hash TEXT NOT NULL,
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
)");
$db->exec("CREATE TABLE IF NOT EXISTS accommodations (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    landlord_id INTEGER NOT NULL,
    title TEXT NOT NULL,
    location TEXT NOT NULL,
    room_type TEXT NOT NULL,
    price REAL NOT NULL,
    description TEXT NOT NULL,
    available INTEGER NOT NULL DEFAULT 1,
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (landlord_id) REFERENCES landlords(id) ON DELETE CASCADE
)");
$db->exec("CREATE TABLE IF NOT EXISTS bookings (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    accommodation_id INTEGER NOT NULL,
    student_name TEXT NOT NULL,
    student_email TEXT NOT NULL,
    student_phone TEXT NOT NULL,
    move_date TEXT NOT NULL,
    message TEXT NOT NULL DEFAULT '',
    status TEXT NOT NULL DEFAULT 'pending' CHECK (status IN ('pending', 'accepted', 'declined')),
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (accommodation_id) REFERENCES accommodations(id) ON DELETE CASCADE
)");
