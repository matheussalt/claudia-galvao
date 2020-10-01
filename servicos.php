<?php
/**
 * Template Name: servicos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
$GLOBALS["link2"] = get_the_permalink(wp_get_post_parent_id(get_the_ID()));
$GLOBALS["nome2"] = get_the_title(wp_get_post_parent_id(get_the_ID()));
get_header(); ?>

<?php
$pai = wp_get_post_parent_id(get_the_ID());

if(has_children())
{
$mypages2 = get_pages( array( 'child_of' => get_the_ID(), 'sort_order' => 'desc' ) );
foreach( $mypages2 as $page2 ) { $linkpage = get_page_link( $page2->ID ); } ?>

<script>
window.open('<?=$linkpage?>', '_parent');
</script>
<? } else { 
$featuredMedia = get_the_post_thumbnail_url($post->post_parent, 'big');
?>

<section class="banner-servicos" style="background-image: url('<?=$featuredMedia?>');"></section>

<section class="servicos-inside">
  <div class="container">
    <h2>
      <? $parent_title = get_the_title($post->post_parent);
					echo $parent_title; ?>
    </h2>

    <div class="servico-wrapper">
      <aside class="servicos-menu">
        <?php $mypages = get_pages( array( 'child_of' => $pai, 'sort_order' => 'asc' ) ); 
        foreach( $mypages as $page ) { ?>
        <a href="<?php echo get_page_link( $page->ID ); ?>" class="<? if (get_the_ID() == $page->ID) { echo "
          active";}?>">
          <span><?php echo $page->post_title; ?></span>
        </a>
        <? } ?>
      </aside>

      <div class="servicos-content">
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <img class="servico-img-destaque" src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
        <h2><?=the_title()?></h2>
        <?=the_content()?>
        <?php endwhile; ?>

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
    </div>
  </div>
</section>

<section class="home-about">
  <div class="container">
    <div class="dra-about-img">
      <div>
        <img src="<?=get_template_directory_URI()?>/img/src/dra_claudia.jpg" alt="Dra. Cláudia Galvão" />
      </div>
    </div>

    <div class="home-about-txt">
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

<? } ?>
<?php get_footer();