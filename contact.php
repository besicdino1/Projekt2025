<?php include "header.php"; ?>

<div class="forma_contact">
    <h1>- CONTACT -</h1>
    <p>Contact us for more info ...</p>
    <p>... you GREEN HELL</p>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="success-message">
            <p>Thank you for sending! Your message has been successfully received.</p>
            <a href="contact.php" class="new-form-btn">NEW</a>
        </div>
    <?php else: ?>
        <form action="process_contact.php" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your turn:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit !</button>
        </form>
    <?php endif; ?>
</div>


<?php include "footer.php"; ?>
