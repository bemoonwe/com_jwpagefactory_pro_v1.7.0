<?php
/**
 * @author       JoomWorker
 * @email        info@joomla.work
 * @url          http://www.joomla.work
 * @copyright    Copyright (c) 2010 - 2019 JoomWorker
 * @license      GNU General Public License version 2 or later
 * @date         2019/01/01 09:30
 */
?>
<style>
.phpversion-container{
  max-width: 960px;
  margin: 0 auto;
}
.jwpf-callout {
    padding: 10px 20px;
    margin: 20px 0;
    border: 1px solid transparent;
    border-left-width: 5px;
    border-radius: 3px;
}

.jwpf-callout-danger {
    border-left-color: #ce4844;
}

.jwpf-callout-danger h4 {
    color: #ce4844;
}
</style>
<div class="phpversion-container">
    <div class="jwpf-callout jwpf-callout-danger" id="callout-progress-animation-css3">
      <h4>Your current PHP version <?php echo PHP_VERSION; ?> is too old for JW Page Factory</h4>
      <p>We are strongly recommended to use PHP <strong><?php echo $required_min_php_version; ?></strong> or higher. Please contact your web hosting provider's support/server administrator for help.</p>
    </div>
</div>
