<?php include 'config.php'; ?>

<?php include '../includes/header.php'; ?>

<main>
    <h1>Contact Us</h1>
    <p>If you have any questions, feel free to contact us by filling out the form below:</p>

    <!-- Contact Form -->
    <form method="POST" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required />

        <label for="email">Email:</label>
        <input type="email" name="email" required />

        <label for="tell">Phone Number</label>
        <input type="text" placeholder="Phone Number" />

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>

<?php
// Handling form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone Number = htmlspecialchars($_POST['phone number']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Normally, you would send this data via email or store it in a database.
    // For now, we'll just display a success message.
    echo "<p>Thank you, $name! We have received your message:</p>";
    echo "<p>Phone Number: $phone</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}
?>
