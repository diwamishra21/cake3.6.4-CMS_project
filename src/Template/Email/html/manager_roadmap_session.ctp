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
 
<p> Hi <?= $first_name ; ?> <?= $last_name ; ?><b>, </p>
<p><b>Your Session meeting  with <?= $employee_first_name; ?> <?= $employee_last_name; ?>  </b></p>
<p> Schedule Date -  <?= $session_date_0; ?> </p>
<p> Schedule Time -  From <?= $start_time ?> To <?= $end_time; ?> </p>


 
 
 <br>
<p><b>Thanks & Regards,</b></p>
<p><b>Spring Board</b></p>






