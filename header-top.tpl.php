<div class="zira-header-top" >
  <!-- <span id="clock"><?php //print t('Ruzveltova 35, 11000 Belgrade, Serbia, Tel: +381 11 555 555, fax: +381 11 555 555'); ?></span> -->
  <span id="zira-info"><?php print 'Ruzveltova 35, 11000 Belgrade, Serbia, Tel: +381 11 555 555, fax: +381 11 555 555 '; ?></span>
  <span id="clock"></span>
  <span id="temp"><?php print $vars[0][1] . '°C / ' . $vars[0][0] . '°F'; ?></span>

  <?php
    $path = drupal_is_front_page() ? '<front>' : $_GET['q'];
    $languages = language_negotiation_get_switch_links('language', $path);
  ?>

  <div id="language"><?php print drupal_render(drupal_get_form('lang_dropdown_form', $languages, 'language')); ?></div>
</div>
