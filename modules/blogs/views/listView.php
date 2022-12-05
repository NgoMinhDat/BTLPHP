<?php get_header(); ?>

<div id="main-content-wp" class="clearfix blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title">Blog</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <?php if(!empty($data)) foreach ($data['0'] as  $value) {?>
                        <li class="clearfix">
                            <a href="?modules=blogs&controllers=index&action=detail&id=<?php echo $value['id']; ?>" class="thumb fl-left">
                                <img src="<?php echo $value['image']; ?>" alt="">

                            </a>
                            <div class="info fl-right">
                                <a href="?modules=blogs&controllers=index&action=detail&id=<?php echo $value['id']; ?>" class="title"><?php echo $value['title']; ?></a>
                                <span class="create-date"><?php echo $value['create_date']; ?></span>
                                <p class="desc"><?php echo $value['description'].'...'; ?></p>
                            </div>
                        </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php for ($i=1; $i <= $data['1'] ; $i++) { ?>
                        <li>
                            <a <?php if($i == $data['2']) echo 'style="background-color: green;"';  ?>  href="?modules=blogs&controllers=index&action=list&page=<?php echo $i; ?>" title=""><?php echo $i; ?></a>
                        </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </div>
<?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer() ;?>