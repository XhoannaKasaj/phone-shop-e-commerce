<?php
include 'header.php';
?>

<section class="contact">

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5992.99587980435!2d19.81287712680775!3d41.31978446708136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503102c27b29a1%3A0x83c76478ab685ee!2sBlloku%2C%20Tirana!5e0!3m2!1sen!2s!4v1641906383496!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>

        <form action="form.php" method = "POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="name" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="text" name="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" name="mobile" placeholder="mobile">
            </div>
            <input type="submit" value="contact now" class="btn1">
        </form>

    </div>

</section>

<?php
include 'footer.php';
?>