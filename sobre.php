<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.banner-sobre {
  background-image: url('<?=get_template_directory_URI()?>/img/src/banner_sobre.jpg');
}
</style>

<section class="banner-sobre">
  <div class="container">
    <div class="banner-sobre-txt fadeUp" data-animar>
      <h1>Juntos pela qualidade do seu sono</h1>

      <p>Prezar pela qualidade do sono trará ganhos significativos para o seu dia a dia. Nesse sentido, a Dra. Cláudia
        Galvão tem se dedicado, desde o início de sua vida acadêmica, aos estudos dos distúrbios respiratórios do sono.
      </p>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="dra-about-img fadeRight" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/dra_claudia.jpg" alt="Dra. Cláudia Galvão" />
    </div>

    <div class="about-txt fadeUp" data-animar>
      <h2>Dra. Cláudia Galvão</h2>
      <h3>Medicina do Sono | Otorrinolaringologia </h3>
      <p>Cláudia Galvão é otorrinolaringologista, formada pela UFMG e especialista em Medicina do Sono, com certificação
        pela Academia Brasileira de Medicina e pela Associação Brasileira de Medicina do Sono.</p>

      <p>Fez residência em otorrinolaringologia no Hospital das Clínicas da UFMG.</p>

      <p>Desde o início da sua vida acadêmica, se dedica aos estudos relacionados aos distúrbios respiratórios do sono.
        Atuou como bolsista do CNPq em projetos com ênfase em apneia do sono na infância, desenvolvidos na Faculdade de
        Medicina da UFMG.</p>

      <p>Sua atuação é focada na avaliação de pacientes com transtornos do sono. Realiza a propedêutica e avaliação de
        forma individualizada para indicação do tratamento clínico e cirúrgico dos casos de apneia.</p>

    </div>

    <div class="about-txt-yellow fadeUp" data-animar>
      <p>Dra. Cláudia Galvão possui formações complementares, como:</p>

      <ul>
        <li>> Estágio no serviço de Sleep Medicine e Sleep Surgery na Universidade de Stanford (2018);</li>
        <li>> Curso de Medicina do Sono no Instituto do Sono em São Paulo (2011);</li>
        <li>> Mestrado em cirurgia pela UFMG (concluído em 2010).</li>
        <li>> Doutorado na Faculdade de Medicina da UFMG em linha de pesquisa do Respirador Oral. (2013-2017)</li>
      </ul>

      <p>Além disso, em 2013 foi a médica responsável pela fundação do Serviço de Medicina do Sono, no Núcleo de
        Otorrinolaringologia em Belo Horizonte.</p>
    </div>

    <div class="about-img-2 fadeLeft" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/dra_claudia2.jpg" alt="Dra. Cláudia Galvão" />
    </div>

    <a href="<?=site_url()?>/publicacoes-cientificas/" class="about-ad fadeUp" data-animar>
      <h2>Publicações científicas</h2>
      <img src="<?=get_template_directory_URI()?>/img/src/publicacoes.jpg" alt="Publicações Científicas" />
      <p>Conheça quais foram as publicações científicas escritas por Dra. Cláudia Galvão</p>
    </a>

    <a href="<?=site_url()?>/adenoamigdalectomia-nao-elimina-problemas-respiratorios-do-sono-em-criancas-com-respiracao-oral/"
      class="about-ad fadeUp" data-animar>
      <h2>Entrevistas / imprensa</h2>
      <img src="<?=get_template_directory_URI()?>/img/src/entrevistas.jpg" alt="Entrevistas/imprensa" />
      <p>Adenoamigdalectomia não elimina problemas respiratórios do sono em crianças com respiração oral</p>
    </a>
  </div>
</section>

<?php get_footer();