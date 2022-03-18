<?php get_header(); ?>

<?php get_template_part(
  'components/hero/home-hero',
  null,
  [
    'heading' => 'CHRISTINE YIM',
    'body' => 'Student at Drexel University studying User Experience & Interaction Design, pursuing to become a UI/UX Designer.'
  ]
  ); ?>
<a href="http://christineyim.com/idm250-ccy29/works/" class="button">VIEW WORKS</a>
</div>

        <br>
        <br>

<div id="home-projects">
    <?php get_template_part('components/home-projects');?>
</div>



<?php get_footer();?>