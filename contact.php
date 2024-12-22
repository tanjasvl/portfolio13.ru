<?php
$pageName = "Contact me";
$pageTitle = "Contact me";

include("_config.php");
include("_start.php");
include("_header.php");
?>

    <main id="main-contact">

        <div class="container">

            <section class="get-in-touch">
                <h2>Contact me</h2>
                <form id="contact-form" class="contact-form row">
                    <div class="form-field col x-50">
                        <input id="name" class="input-text js-input" type="text">
                        <label class="label" for="name">Name</label>
                    </div>
                    <div class="form-field col x-50">
                        <input id="email" class="input-text js-input" type="email">
                        <label class="label" for="email">E-mail</label>
                    </div>
                    <div class="form-field col x-100">
                        <input id="message" class="input-text js-input" type="text">
                        <label class="label" for="message">Message</label>
                    </div>
                    <div class="form-field col x-100 align-center">
                        <input class="submit-btn" type="submit" value="Send message">
                    </div>
                </form>
            </section>

        </div>

    </main>

<?php
include("_footer.php");
include("_end.php");