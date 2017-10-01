<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">


            <?php
            wp_tag_cloud();
            ?>

        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>

        <div class="sidebar-item__content">


            <?php

            wp_list_categories();
            ?>

        </div>


    </div>

    <div class="sidebar__sidebar-item">
        <?php get_calendar(false);  //posts calendar
        ?>
    </div>
</div>
