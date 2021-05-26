<?php
$titre = "Page d'accueil";
require 'header.php';
?>

    <div class="row g-5">
      <div class="col-md-6">
        <h2>Starter projects</h2>
        <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
        <ul class="icon-list">
          <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
          <li class="text-muted">Bootstrap Parcel starter (coming soon!)</li>
        </ul>
      </div>

      <div class="col-md-6">
        <h2>Guides</h2>
        <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
        <ul class="icon-list">
          <li><a href="/docs/5.0/getting-started/introduction/">Bootstrap quick start guide</a></li>
          <li><a href="/docs/5.0/getting-started/webpack/">Bootstrap Webpack guide</a></li>
          <li><a href="/docs/5.0/getting-started/parcel/">Bootstrap Parcel guide</a></li>
          <li><a href="/docs/5.0/getting-started/build-tools/">Contributing to Bootstrap</a></li>
        </ul>
      </div>
    </div>
  
  <?php require 'footer.php'; ?>