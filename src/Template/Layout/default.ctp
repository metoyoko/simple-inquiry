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

$cakeDescription = 'MARIWEB Vessel finder';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap/bootstrap.min.css') ?>    
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('mariweb.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('jquery-3.2.1.min.js') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area" style="padding-left: 7px;">
            <?php if($this->request->params['controller'] == 'Items' && $this->request->params['action'] == 'index'){ ?>
            <li class="name">
                <span id="showBar" style="padding: 8px;background: #1f6c97; color:white; margin-right: 10px; cursor: pointer;">Search Bar</span>
                <h1><a href=""><?php //= $this->fetch('title') ?></a></h1>
            </li>
            <?php } ?>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
            <li><?= $this->Html->link('CLEAR SEARCH', ['action' => 'index']) ?></li>
            <li class="item-upload bar-item"><a href="upload">UPLOAD</a></li>
            <li class="item-inquiry bar-item"><a href="inquiry">INQUIRY</a></li>
            <li><a href="Users/logout">LOGOUT</a></li>
        <!--         <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
            </ul>
            <span class="topnav box2 left-skew pull-right" style="">
                <?php //echo $this->Html->image('logo.png', ['style'=>'width:50px','class'=>'pull-left']); ?>
                <span class="app-title pull-left" style="margin-left: 20px">Mariweb Vessel Finder</span>
            </span>
            <!-- <span class="pull-right" style="width: 60%;background: white;color:black;z-index: -99">ssssssssssss</span> -->
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <!-- <div class="breadcrumbs pull-left">SSSSSS</div> -->
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div style="height: 50px;background:#000;text-align: center;padding-top:5px;bottom:0px;">
            <span class="label">Powered by:</span>
            <span class=""><?php //echo $this->Html->image('fc-icon.jpeg',['style'=>'margin: 10px;height:20px']); ?></span>
            <span style="font-size: 10px; color: #AAA"> Filmetrics Corp.</span>
            <span class="pull-right">Copyright © 2017, FILMETRICS. All Rights Reserved.</span>
            <span class="pull-left">MARIWEB Vessel Finder version 1</span>
            <!-- <p style="color:white"> Filmetrics Corp.</p> -->
        </div>
    </footer>
</body>
</html>
