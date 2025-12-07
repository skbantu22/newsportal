<?php
$errors = [];
$options = ["General Inquiry", "Support", "Feedback"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('process_form.php'); // Make sure this validates and populates $errors
}
?>

<div class="contact-form-wrapper">
    <h2>যোগাযোগ করুন</h2>

    <?php if(!empty($errors)): ?>
        <ul class="error-list">
            <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form id="contactForm" action="" method="post" novalidate class="contact-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" placeholder="আপনার নাম লিখুন">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" placeholder="আপনার ইমেইল লিখুন">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="5" placeholder="আপনার বার্তা লিখুন"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
                <?php foreach($options as $option): ?>
                    <option value="<?php echo $option; ?>" <?php if(isset($_POST['subject']) && $_POST['subject']==$option) echo "selected"; ?>>
                        <?php echo $option; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <fieldset class="form-group">
            <legend>Preferred Contact Method:</legend>
            <label><input type="radio" name="contact_method" value="Email" <?php if(isset($_POST['contact_method']) && $_POST['contact_method']=='Email') echo "checked"; ?>> Email</label>
            <label><input type="radio" name="contact_method" value="Phone" <?php if(isset($_POST['contact_method']) && $_POST['contact_method']=='Phone') echo "checked"; ?>> Phone</label>
        </fieldset>

        <div class="form-group checkbox-group">
            <label><input type="checkbox" name="agree" value="1" <?php if(isset($_POST['agree'])) echo "checked"; ?>> I agree to terms</label>
        </div>

        <button type="submit" name="contact_submit" class="btn-submit">Submit</button>
    </form>
</div>
