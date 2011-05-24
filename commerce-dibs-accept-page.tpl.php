<?php

/**
 * @file dibs-accept-page.tpl.php
 *
 * Theme implementation to display the dibs accept page
 *
 * Available variables:
 * - $feedback: Full transaction array with all info about
 *   the transaction.
 *
 * @see template_preprocess()
 * @see template_preprocess_dibs_accept_page()
 */
?>
<div id="commerce-dibs-accept-page" class="dibs-accept-page clear-block">
  <p><?php print t('Your payment was accepted. Your order number is ') . $feedback['orderid'] . '.'; ?></p>
</div>
