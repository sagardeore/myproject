<div class="row topHeader clearfix">
    <div class="span4">
    <?php echo $this->Html->image("logo.png", array(
    "alt" => "logo",
    'url' => array('controller' => '/'),
)); ?>
    </div>

</div>
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><?php echo $this->Html->link('Home', '/'); ?></li>
            <li><?php echo $this->Html->link('About', '/htmls/about'); ?></li>
            <li><?php echo $this->Html->link('Contact', '/htmls/contact'); ?></li>
            <li><?php echo $this->Html->link('Services', '/htmls/service'); ?></li>
        </ul>
    </div>
</div>