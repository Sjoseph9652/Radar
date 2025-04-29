<?php
session_start();
require 'includes/common.php';

// needs to be logged in ? 
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION['email'];
    $question = trim($_POST['question']);
    $category = $_POST['category'] ?? 'uncategorized';

    if (!empty($question)) {
        $query = "INSERT INTO requests (customer_email, question, category, responded) VALUES (?, ?, ?, 0)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sss", $email, $question, $category);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['question_success'] = true;
            $_SESSION['header_question_success'] = true;
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER']); // empty box
    }
}
?>
