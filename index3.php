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
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>

<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ptm_kafedra/css/template.css" type="text/css" />

<!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
<div class="main">
<div class="fon"><div class="fon_left"></div><div class="fon_right"></div></div>
    <div class="telo">
        <header>
            <div>logo</div>
            <div>
                <div>
                	<a title="Кафедра Деталей машин и подъемно-транспортного оборудования" href="<?php echo $this->baseurl ?>"><div class="namesite"></div></a>
                </div>
                <nav>
                	<a title="О кафедре" href="<?php echo $this->baseurl ?>#1"><div class="o_kafedre"></div></a>
                    <a title="Абитуриенту" href="<?php echo $this->baseurl ?>#2"><div class="abiturientu"></div></a>
                    <a title="Студенту" href="<?php echo $this->baseurl ?>#3"><div class="studentu"></div></a>
                    <a title="Учебная деятельность кафедры" href="<?php echo $this->baseurl ?>#4"><div class="ucheba"></div></a>
                    <a title="Научная и инновациооная деятельность кафедры" href="<?php echo $this->baseurl ?>#5"><div class="innovacii"></div></a>
                </nav>
            </div>
            <div>gerb</div>
        </header>
        <article>
        <section></section>
        </article>
        <aside></aside>
        <footer></footer>
    </div>
</div>
<br />
    <div id="bag">
    <jdoc:include type="modules" name="debug" />
    </div>
</body>
</html>