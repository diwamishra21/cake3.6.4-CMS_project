<!-- code to include header -->
<?php echo $this->element('header'); ?>
<script>
<?php echo 'var webroot ="' . $this->Url->build('/') . '"'; ?>
</script>
<!-- code to load content dynamically -->
<?php echo $this->fetch('content'); ?>
<!-- code to load footer -->
<?php echo $this->element('footer'); ?>
