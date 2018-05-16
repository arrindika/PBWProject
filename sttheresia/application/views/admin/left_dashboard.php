<div class="list-group">
    <a href="<?php echo base_url(); ?>admin/home" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
    </a>
    <a href="<?php echo base_url(); ?>admin/news" class="list-group-item">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        News
        <span class="badge">
            <?php
                echo $this->db->count_all('info');
            ?>
        </span>
    </a>
    <a href="<?php echo base_url(); ?>admin/event" class="list-group-item">
        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
        Events
        <span class="badge">
            <?php
                echo $this->db->count_all('event');
            ?>
        </span>
    </a>
    <a href="<?php echo base_url(); ?>admin/teachers" class="list-group-item">
        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
        Teachers
        <span class="badge">
            <?php
                echo $this->db->count_all('dataguru');
            ?>
        </span>
    </a>
    
</div>
