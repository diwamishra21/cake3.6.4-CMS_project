<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$content = explode("\n", $content);
$base_url=  $this->Url->build('/', true);
foreach ($content as $line) :
    //echo '<p> ' . $line . "</p>\n";
endforeach;?>
<p style="text-align:center"><?php echo $this->Html->image("springboard-logo.png", ['fullBase' => true]); ?></p>
<p style="">Hi Ankit Maharaj Singh ,</p>
<p> <?= $first_name ; ?> <?= $last_name ; ?><b>would be joining as <?= $designation ; ?> on <?= $doj ; ?>.
  </b></p>
<p>It's imperative that basic joining requests gets completed in time to provide a seamless onboarding experience to the new joiner.</p>
<p>Kindly support in taking care of the required logistics arrangements using the link below:</p>
<p> <?= $base_url;?>
 </p
 <p>Kindly feel free to get in touch for ant clarification.</p>
 
 
 <br>
<p><b>Thanks & Regards,</b></p>
<p><b>Employee Development Team</b></p>
<p><b>Phone # 0124-4561000 I Ext:6021 I 1119 I 1225</b></p>





