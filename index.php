<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>

<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ptm_kafedra/css/template.css" type="text/css" />

<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 6]>
	<link href="templates/<?php echo $this->template ?>/css/ie6only.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>
<div class="main">
<div class="fon">
    <div class="telo">
        <div class="shapka">
            <a title="На главную" href="<?php echo $this->baseurl ?>"><div class="logo"></div></a>
            <div id="nm">
                	<a title="Кафедра Деталей машин и подъемно-транспортного оборудования" href="<?php echo $this->baseurl ?>"><div class="namesite"></div></a>
                <div class="nav">
                	<a title="О кафедре" href="<?php echo $this->baseurl ?>/index.php?option=com_content&view=section&layout=blog&id=1"><div class="o_kafedre"></div></a>
                    <a title="Абитуриенту" href="<?php echo $this->baseurl ?>/index.php?option=com_content&view=section&layout=blog&id=2"><div class="abiturientu"></div></a>
                    <a title="Студенту" href="<?php echo $this->baseurl ?>/index.php?option=com_content&view=section&layout=blog&id=5"><div class="studentu"></div></a>
                    <a title="Учебная деятельность кафедры" href="<?php echo $this->baseurl ?>/index.php?option=com_content&view=section&layout=blog&id=4"><div class="ucheba"></div></a>
                    <a title="Научная и инновациооная деятельность кафедры" href="<?php echo $this->baseurl ?>/index.php?option=com_content&view=section&layout=blog&id=3"><div class="innovacii"></div></a>
                </div>
            </div>
             <div class="lg">
                  	<div class="gerb"></div>
                    <a title="На главную" href="<?php echo $this->baseurl ?>"><div class="home"></div></a>
                    <a title="Контакты" href="<?php echo $this->baseurl ?>/index.php?option=com_phocaguestbook&view=phocaguestbook&id=1"><div class="mail"></div></a>
             </div>          
        </div>
        <div class="tt">
        <table >
            <tr>
                <td class="boader"><jdoc:include type="component" /></td>
                <td class="right_contents"><jdoc:include type="modules" name="right" style="" /></td>
            </tr>
        </table>
       </div>
       <div class="footer"><div class="footer-text">Copyrating <a href="#">k3kf.ru</a> 2011</div></div>
        </div>
</div>
</div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>