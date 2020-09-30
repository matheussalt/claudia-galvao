<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="contato">
  <div class="container">
    <h2>Contato</h2>

    <div class="contato-wrapper">
      <div class="contato-dados">
        <div class="contato-info">
          <a href="mailto:contato@draclaudiagalvao.com.br" target="_blank">contato@draclaudiagalvao.com.br</a>
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

        <a class="contato-endereco" href="https://goo.gl/maps/mwUxWp1kawft2qFS8" target="_blank">Rua da Bahia 2696 sala
          701, Lourdes - Belo
          Horizonte / MG
          CEP: 30160-019</a>

        <div class="contato-midia">
          <a href="https://instagram.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/insta.svg" />
          </a>

          <a href="https://facebook.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/face.svg" />
          </a>

          <a href="https://youtube.com" target="_blank">
            <img src="<?=get_template_directory_URI()?>/img/src/youtube.svg" />
          </a>
        </div>

        <div class="content-btn">
          <div class="content-btn-call">
            <p>Agendar Consulta</p>
            <a href="tel:3125527788" target="_blank" class="btn btn-blue">Ligar Agora</a>
          </div>

          <div class="content-btn-call">
            <p>Agendar Consulta</p>
            <a href="https://wa.me/+5531983668408" target="_blank" class="btn btn-green">Whatsapp</a>
          </div>
        </div>
      </div>

      <div class="contato-maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.6646242800116!2d-43.943688085085405!3d-19.938532786598916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699d79cdc0e67%3A0xc1ded5f0c26b6697!2sR.%20da%20Bahia%2C%202696%20-%20Lourdes%2C%20Belo%20Horizonte%20-%20MG%2C%2030160-012!5e0!3m2!1spt-BR!2sbr!4v1601416840615!5m2!1spt-BR!2sbr"
          frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer();