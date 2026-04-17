  </main>
  <footer class="site-footer">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="Blood_Saathi.png" alt="Blood Saathi Logo" class="footer-logo" />
        <p>A focused donor coordination frontend designed to make urgent blood support feel faster, safer, and easier to trust.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook">Facebook</a>
          <a href="#" aria-label="Instagram">Instagram</a>
          <a href="#" aria-label="WhatsApp">WhatsApp</a>
        </div>
      </div>
      <div>
          <h3>Emergency & Trust</h3>
          <ul class="footer-links">
            <li><a href="emergency-help.php">Emergency Help</a></li>
            <li><a href="donor-dashboard.php">Donor Dashboard</a></li>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="terms.php">Terms of Service</a></li>
            <li><a href="safety-guidelines.php">Safety Guidelines</a></li>
            <li><a href="contact.php">Partner With Us</a></li>
          </ul>
        </div>

        <div>
          <h3>Contact</h3>
          <ul class="footer-links footer-contact">
            <li>Blood Saathi Coordination Desk</li>
            <li>New Delhi, India</li>
            <li>support@bloodsaathi.org</li>
            <li>+91 98765 43210</li>
            <li>Mon-Sun, 24/7 response desk</li>
          </ul>
      <div>
        <h3>Emergency Contact</h3>
        <ul class="footer-links">
          <li><a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $primaryPhone); ?>"><?php echo htmlspecialchars($primaryPhone); ?></a></li>
          <li><a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $emergencyPhone); ?>"><?php echo htmlspecialchars($emergencyPhone); ?></a></li>
          <li><a href="mailto:<?php echo htmlspecialchars($supportEmail); ?>"><?php echo htmlspecialchars($supportEmail); ?></a></li>
          <li><?php echo htmlspecialchars($address); ?></li>
        </ul>
      </div>
      <div>
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="find-blood.php">Find Donor / Request Blood</a></li>
            <li><a href="become-donor.php">Become a Donor</a></li>
            <li><a href="blood-groups.php">Blood Groups</a></li>
            <li><a href="how-it-works.php">How It Works</a></li>
            <li><a href="faq.php">FAQs</a></li>
          </ul>
</div>
    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</span>
    </div>
  </footer>
</div>
<script src="script.js"></script>
</body>
</html>
