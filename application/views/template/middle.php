<?php $this->load->view('/template/header') ?>

<div class="container">
    <?php isset($mainContent) ? $this->load->view($mainContent) : ''; ?>
</div>
<?php $this->load->view('/template/footer') ?>
