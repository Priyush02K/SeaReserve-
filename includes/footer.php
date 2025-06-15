<!-- includes/footer.php -->
<footer class="site-footer  text-light pt-5 pb-4">
  <div class="container">
    <div class="row">

      <!-- About -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase font-weight-bold mb-3">Boat Booking System</h5>
        <p>Explore scenic rivers and enjoy luxurious boat rides with our 30 years of sailing expertise.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 mb-4">
        <h6 class="text-uppercase font-weight-bold mb-3">Quick Links</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../status.php"> Booking Status</a></li>
          <li><a href="../services.php"> Services</a></li>
          <li><a href="../contact.php">Contact</a></li>
         
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold mb-3">Contact</h6>
        <p class="mb-1">
          <span class="icon-room mr-2"></span>River Dock Road, City 12345
        </p>
        <p class="mb-1">
          <span class="icon-phone mr-2"></span>+1 555 123 4567
        </p>
        <p class="mb-0">
          <span class="icon-envelope mr-2"></span>info@boatbooking.com
        </p>
      </div>

      <!-- Newsletter -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase font-weight-bold mb-3">Newsletter</h6>
        <form action="#" class="footer-newsletter">
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Email address">
            <div class="input-group-append">
              <button class="btn btn-warning" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
      </div>

    </div>

    <hr class="bg-secondary">

    <div class="row">
      <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
        © <?php echo date('Y'); ?> Boat Booking System. All rights reserved.
      </div>
      <div class="col-md-6 text-center text-md-right">
        <a href="#" class="px-2"><span class="icon-facebook"></span></a>
        <a href="#" class="px-2"><span class="icon-twitter"></span></a>
        <a href="#" class="px-2"><span class="icon-instagram"></span></a>
      </div>
    </div>
  </div>
</footer>
<style>

  footer{
    background-color: #10b1ff;
  }

  .site-footer a {
  color: #ffffff;         /* muted gray */
  transition: color .2s;
}
.site-footer a:hover {
  color: #0579ed;         /* your brand orange */
  text-decoration: none;
}
.footer-links li {
  margin-bottom: .5rem;
}
.footer-newsletter .form-control {
  border-radius: 0;
}

</style>