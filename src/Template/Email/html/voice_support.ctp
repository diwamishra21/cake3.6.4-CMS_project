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
<p style=""><b>Hi Infrastructure Services Team,</b></p>
<p> <?= $first_name ; ?> <?= $last_name ; ?><b>would be joining as <?= $designation ; ?> on <?= $doj ; ?> in  </p>
<p><b>Quatrro Processing Services Pvt Ltd.</b></p>

 <p>Request you to please arrange <b>Voice Support(Gurgaon, Plot-119 ).</b></p>
 <p>In case of any clarification, feel free to reach me. </p>
 
 
 <br>
<p><b>Thanks & Regards,</b></p>
<p><b>Ankit Maharaj Singh</b></p>






