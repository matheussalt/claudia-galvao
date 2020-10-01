<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="footer-wrapper">
    <div class="container">
      <div class="footer-contact">
        <img src="<?=get_template_directory_URI()?>/img/src/logo_footer.svg" alt="Logotipo Cláudia Galvão" />

        <a class="footer-endereco" href="https://goo.gl/maps/mwUxWp1kawft2qFS8" target="_blank">
          <span>Rua da Bahia 2696 sala 701, Lourdes - Belo
            Horizonte / MG
            CEP: 30160-019</span>
        </a>

        <div class="footer-contact-info">
          <a href="mailto:contato@draclaudiagalvao.com.br" target="_blank">
            <span>contato@draclaudiagalvao.com.br</span>
          </a>
          <a href="https://wa.me/+5531983668408" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#whatsapp"></use>
            </svg>
            <span>(31) 98366-8408</span>
          </a>
          <a href="tel:3125527788" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#tel"></use>
            </svg>
            <span>(31) 2552-7788</span>
          </a>
        </div>
      </div>

      <div class="footer-links">
        <div class="footer-links-midias">
          <a href="https://instagram.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/insta_white.svg" />
          </a>

          <a href="https://facebook.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/face_white.svg" />
          </a>

          <a href="https://youtube.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/youtube_white.svg" />
          </a>
        </div>

        <div class="footer-links-sitemap">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuTopo', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
        </div>

        <a href="<?=site_url()?>/contato" class="btn btn-white">Agende sua consulta</a>
      </div>

      <div class="footer-form">
        <p>Envie sua mensagem:</p>

        <? echo do_shortcode('[contact-form-7 id="7" title="Form Footer"]'); ?>
      </div>
    </div>
  </div>

  <?php if (!is_page(59)) { ?>

  <div class="footer-maps">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.6646242800116!2d-43.943688085085405!3d-19.938532786598916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699d79cdc0e67%3A0xc1ded5f0c26b6697!2sR.%20da%20Bahia%2C%202696%20-%20Lourdes%2C%20Belo%20Horizonte%20-%20MG%2C%2030160-012!5e0!3m2!1spt-BR!2sbr!4v1601416840615!5m2!1spt-BR!2sbr"
      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

  <?php } ?>

  <div class="rodape">
    <div class="container">
      <p>Dra. Cláudia Galvão<br />
        CRM 38988 | RQE: 14272 e 42028</p>

      <p>Copyright ©. Todos os os direitos reservados. Desenvolvido por
        <a href="https://agenciasalt.com.br" target="_blank">Agência Salt</a>
      </p>

      <a href="https://agenciasalt.com.br" class="salt" target="_blank">
        <img src="<?=get_template_directory_URI()?>/img/src/salt.png" alt="Agência Salt" />
      </a>
    </div>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>