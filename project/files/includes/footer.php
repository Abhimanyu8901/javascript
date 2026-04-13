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
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <?php foreach ($quickLinks as $link): ?>
            <li><a href="<?php echo htmlspecialchars($link['href']); ?>"><?php echo htmlspecialchars($link['label']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
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
        <h3>Policies</h3>
        <ul class="footer-links">
          <li><a href="privacy.php">Privacy Policy</a></li>
          <li><a href="terms.php">Terms of Service</a></li>
          <li><a href="safety.php">Safety Guidelines</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</span>
    </div>
  </footer>
</div>
<script src="script.js"></script>
</body>
</html>
