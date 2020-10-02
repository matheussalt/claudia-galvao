<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/banner.jpg');
}

.parallax {
  background-image: url('<?=get_template_directory_URI()?>/img/src/parallax.jpg');
}

@media screen and (min-width: 768px) {
  .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/src/banner@2x.jpg');
  }
}
</style>

<section class="banner">
  <div class="container">
    <div class="banner-btn" data-animar>
      <div class="banner-btn-call">
        <p>Agendar Consulta</p>
        <a href="tel:3125527788" target="_blank" class="btn btn-blue">Ligar Agora</a>
      </div>

      <div class="banner-btn-call">
        <p>Agendar Consulta</p>
        <a href="https://wa.me/+5531983668408" target="_blank" class="btn btn-green">Whatsapp</a>
      </div>
    </div>

    <div class="banner-txt" data-animar>
      <h1>Diagnóstico e tratamento dos distúrbios do sono</h1>
      <p>Você sabia que dormir bem reduz os riscos de desenvolver obesidade, hipertensão arterial e doenças cardíacas?
        Também contribui para uma maior produtividade no trabalho, para a redução dos níveis de estresse no dia a dia e
        oferece um estímulo maior ao raciocínio. Sono é qualidade de vida!</p>
      <a href="<?=site_url()?>/sobre" class="btn">Saiba mais</a>
    </div>
  </div>
</section>

<section class="dream-test">
  <div class="container">
    <div class="dream-test-wrapper">
      <img src="<?=get_template_directory_URI()?>/img/src/teste.svg" class="fadeUp" data-animar alt="Teste do sono" />

      <div class="dream-test-txt fadeLeft" data-animar>
        <h2>Teste do sono</h2>
        <p>Você ronca, sente sonolência durante o dia ou tem dificuldade para dormir? Faça agora o seu teste do sono e
          descubra se seu ronco pode ser apneia do sono ou se você tem hipersonolência diurna.</p>
        <a href="<?=site_url()?>/teste-do-sono/" class="btn btn-gold">Faça seu teste agora</a>
      </div>
    </div>
  </div>
</section>

<section class="home-about">
  <div class="container">
    <div class="dra-about-img fadeRight" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/dra_claudia.jpg" alt="Dra. Cláudia Galvão" />
    </div>

    <div class="home-about-txt fadeUp" data-animar>
      <h2>Dra. Cláudia Galvão</h2>
      <p>Claudia Galvão é doutora pela UFMG e especialista em Medicina do Sono, com certificação pela Academia
        Brasileira de Medicina e pela Associação Brasileira de Medicina do Sono.
        Sua atuação é focada na avaliação de pacientes com transtornos do sono. Realiza a propedêutica e avaliação de
        forma individualizada para indicação do tratamento clínico e cirúrgico dos casos de apneia do sono.</p>
      <ul>
        <li>> Especialista em Medicina do Sono</li>
        <li>> Especialista em Otorrinolaringologia</li>
        <li>> Atuação com foco nos transtornos do sono</li>
        <li>> Mestrado em Cirurgia pela UFMG</li>
        <li>> Doutorado na pesquisa do Respirador Oral da UFMG</li>
      </ul>

      <a href="<?=site_url()?>/sobre" class="btn btn-gold">Saiba Mais</a>
    </div>
  </div>
</section>

<section class="parallax"></section>

<section class="home-exames">
  <div class="container">
    <h2>Exames</h2>

    <div class="home-exames-wrapper">
      <?php
        $args = array(
            'post_parent' => 20,
            'post_type' => 'page',
            'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
      <a class="exames-item fadeUp" href="<?=the_permalink()?>" data-animar>
        <div>
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
          <h2><?=the_title()?></h2>
        </div>

        <p><?=custom_excerpt2(160)?></p>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<section class="cirurgias">
  <div class="container">
    <h2>Cirurgias</h2>

    <div class="cirurgias-wrapper">
      <?php
        $args = array(
            'post_parent' => 17,
            'post_type' => 'page',
            'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
      <a class="cirurgia-item fadeUp" data-animar href="<?=the_permalink()?>">
        <div>
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
          <h2><?=the_title()?></h2>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<section class="home-agende">
  <div class="container">
    <h2>Juntos pela sua qualidade de sono, saúde e bem-estar</h2>

    <a href="<?=site_url()?>/contato" class="btn btn-white">Agenda sua consulta</a>
  </div>
</section>

<section class="ebook">
  <div class="container">
    <div class="ebook-wrapper">
      <img src="<?=get_template_directory_URI()?>/img/src/ebook.jpg"
        alt="E-book 15 hábitos importantes para uma boa noite de sono" />

      <div class="ebook-txt">
        <h2>E-book</h2>
        <p>Neste material, você irá conhecer 15 hábitos importantes para ter uma boa qualidade de sono. Faça o download
          gratuito e coloque em prática estas dicas o quanto antes!</p>
        <a href="<?=site_url()?>/e-book" class="btn btn-gold">Download</a>
      </div>
    </div>
  </div>
</section>

<section class="home-blog">
  <div class="container">
    <h2>Blog</h2>

    <div class="blog-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3', 'cat' => '1' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer();