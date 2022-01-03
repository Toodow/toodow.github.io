<?php
/**
 * 这是由Viosey 基于 Google Material Design 开发的 Typecho 主题
 * 由Manyang901继续维护和更新
 *
 * @package New.Material
 * @author Viosey & Manyang901
 * @version 2.10.1
 * @link https://github.com/manyang901/material
 *
 */

//Include header.php
$this->need('inc/header.php');
//Include Language Dictionary
if ($this->options->langis == '0') {
    require_once(dirname(__FILE__) . '/inc/lang/en-us.php');
} elseif ($this->options->langis == '1') {
    require_once(dirname(__FILE__) . '/inc/lang/zh-cn.php');
} elseif ($this->options->langis == '2') {
    require_once(dirname(__FILE__) . '/inc/lang/zh-tw.php');
}
$MultiLang = new LangDict();
?>

    <!-- Standalone CSS Calling For Page -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link class="pjax-load " rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/index.css" />
        <?php else: ?>
            <link class="pjax-load" rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/index.css'); ?>" />
        <?php endif; ?>
    <!-- Standalone CSS END -->

    <link rel="prefetch" href="<?php $this->options->themeUrl('css/post.css') ?>" as="style">

</head>

<!-- Html Head END -->




<!-- Html Body Start-->

<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?> mdui-theme-accent-<?php $this->options->AccentColor(); ?> <?php if (in_array('DarkTheme', $this->options->FunctionSwitch)) { echo 'mdui-theme-layout-dark'; }?>" >

		<main>

			<!-- Auto Hiding Header & Appbar & Title BEGIN -->
			<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide header-responsive" id="header">
				<div class="mdui-toolbar mdui-color-theme mdui-color-white" >

                    <!-- menu icon -->
					<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#sidebar', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>

                    <!-- title in appbar header -->
                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-center">
						<?php $this->options->title(); ?>
					</a>

				</div>
			</header>
			<!-- Header & Appbar & Title End -->


			<!-- Blog Header BEGIN -->
            <!-- Contain Left Main-pic , Right main-logo and slogan -->
            <div class="mdui-container-fluid mdui-appbar-with-toolbar pjax-load" >

                <!-- Provide a switch of showing first row of content -->
                <?php if (in_array('ShowMainPic',$this->options->FunctionSwitch)): ?>

                    <!-- First Row Of Content-->
                    <div class="mdui-row">

                        <!-- Left Main Picture Column-->
                        <div class="mdui-col-xs-12 mdui-col-md-7 mdui-col-offset-md-1">
                            <!-- Left Main-pic MD card BEGIN -->
                            <div class="mdui-card top-card">
                                <!-- Main-pic Picture -->
                                <div class="mdui-card-media" >
                                    <a href="<?php $this->options->MainPicHref(); ?>">
                                        <?php if (!empty($this->options->MainPic )): ?>
                                            <img class="main-pic" alt="main-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php $this->options->MainPic(); ?>">
                                        <?php else: ?>
                                            <img class="main-pic" alt="main-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php $this->options->themeUrl('img/MainPic.jpg') ?>" />
                                        <?php endif; ?>
                                    </a>

                                    <!--Slogan BEGIN-->
                                    <div class="mdui-card-media-covered mdui-card-media-covered-gradient">
                                        <div class="mdui-card-primary">
                                            <div class="mdui-card-primary-title">
                                                <?php $this->options->slogan(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slogan END-->
                                </div>
                                <!-- Main-pic Picture END -->
                            </div>
                            <!-- Left Main-pic MD card END -->
                        </div>
                        <!-- Left Main Picture Column END -->

                        <!-- Right Part BEGIN -->
                        <!-- Including main-logo and a title -->
                        <div class="mdui-col-xs-12 mdui-col-md-3" >
                            <!-- Right MD card -->
                            <div class="mdui-card top-card" >

                                <div class="mdui-card-media mdui-center" >
                                    <!-- Main-logo with a href -->
                                    <a href="<?php $this->options->LogoHref(); ?>">
                                        <?php if (!empty($this->options->Logo )): ?>
                                            <img class="main-logo" alt=
                                        "main-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php $this->options->Logo(); ?>">
                                        <?php else: ?>
                				            <img class="main-logo" alt="main-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php $this->options->themeUrl('img/Avatar.jpg') ?>" >
                                        <?php endif; ?>
                                    </a>
                                    <!-- Main-logo END -->
                                </div>

                                <!-- A small divider between Main-logo and title -->
                                <div class="mdui-divider"></div>

                                <!-- A Blog title -->
                                <div class="mdui-card-actions mdui-valign">
                                    <div class="main-logo-title mdui-float-left mdui-text-color-theme-secondary">
                                        <?php $this->options->title(); ?>
                                    </div>

                                    <div class="mdui-toolbar-spacer"></div>

                                    <div id="main-search-container" class="main-search" >
                                        <div class="main-search-form-wrapper">
                                            <form method="post" action="" class="main-search-form">

                                                <input id="main-search-text" type="text" name="s" class="text" size="16" />
                                                <input type="submit" class="submit mdui-btn mdui-btn-dense mdui-btn-raised mdui-color-white" value="Search" />

                                            </form>

                                        <button id="main-search-close" class="mdui-btn mdui-btn-icon mdui-btn-dense mdui-ripple">
                                            <i class="mdui-icon material-icons">close</i>
                                        </button>

                                        </div>
                                    </div>

                                    <button id="main-search-btn" class="mdui-float-right mdui-btn mdui-btn-icon">
                                        <i class="mdui-icon material-icons">search</i>
                                    </button>
                                </div>
                            </div>
                            <!-- Right MD card END -->
                        </div>
                        <!-- Right Part END -->

                    </div>
                    <!-- First Row Of content END -->

                <?php endif; ?>

            </div>
            <!-- Blog Header END -->



            <!-- Blog Posts Output BEGIN -->
            <div class="mdui-container-fluid pjax-load" >

                <?php while ($this->next()): ?>

                        <!-- Each Post Occupy One MD Row-->
						<div class="mdui-row" >

                            <!-- Post MD Card Wrap Location -->
                            <div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1" >

                                <!-- MD Card Used to Contain Post Info Begin-->
								<div class="mdui-card mdui-hoverable">

                                    <!-- Show First Pic in post as thumbnail -->
                                	<?php if ($this->options->ThumbnailOption == '1'): ?>

                                        <div class="mdui-card-media index-post-card-media" >

                                            <!-- Post ThumbNail -->
                                            <picture>
	    									    <img alt="ThumbNail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php showThumbnail($this); ?>" >
                                            </picture>
                                            <!-- Post ThumbNail END -->

											<!-- Post Title Displays Above Bottom in ThumbNail-->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self">
                                                        <?php $this->title() ?>
                                                    </a>
												</div>
                                            </div>
                                            <!-- Post Title End -->

		    							</div>

                                    <!-- Show A Blue SVG as thumbnail -->
                                    <?php elseif ($this->options->ThumbnailOption == '2'): ?>

                                        <div class="mdui-card-media index-post-card-media" >

                                            <!-- Post ThumbNail -->
                                            <picture>
	    									    <img alt="Post Thumbnail" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBzdGFuZGFsb25lPSJ5ZXMiPz4NCg0KPHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2ZXJzaW9uPSIxLjEiDQp4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPg0KDQo8cmVjdCB3aWR0aD0iMTAwMCIgaGVpZ2h0PSIxMDAwIiBmaWxsPSIjNjRCNUY2Ij4NCjwvcmVjdD4NCjwvc3ZnPg==" >
                                            </picture>

											<!-- Post Title Displays Above Bottom of ThumbNail -->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a>
												</div>
                                            </div>
                                            <!-- Post Title END -->

		    							</div>

                                    <!-- Directly Show Random ThumbNail -->
                                    <?php elseif ($this->options->ThumbnailOption == '3'): ?>

                                        <div class="mdui-card-media index-post-card-media" >

                                            <!--Post ThumbNail-->
                                            <picture>

                                                <source media="(min-width: 1024px)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php randomThumbnail($this); ?>" type="image/jpeg">
                                                <img alt="ThumbNail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P8+vXrfwAJpgPg8gE+iwAAAABJRU5ErkJggg==" data-src="<?php randomThumbnail($this); ?>" >

                                            </picture>

											<!-- Post Title Displays Above ThumbNail -->
                                        	<div class="mdui-card-media-covered mdui-card-media-covered-gradient" >
                                        		<div class="mdui-card-primary mdui-typo" >
				    								<a class="mdui-card-primary-title mdui-text-color-white" href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a>
												</div>
                                            </div>
                                            <!-- Post Title END -->

		    							</div>

                                    <?php endif; ?>


                                    <!-- Post content BEGIN -->
                                    <div class="mdui-card-content mdui-clearfix">
                                        <!-- Control Output Length -->
                                        <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;

                                        <!-- Show Additional parts -->
                                        <span class="mdui-typo mdui-float-right" >
                                    		<a  href="<?php $this->permalink(); ?>" target="_self">
                                            	<?php echo $MultiLang->get('Continue Reading'); ?>
                                    		</a>
                                        </span>

                                    </div>
                                    <!--Post Content END-->

	    							<div class="mdui-divider"></div>

                                    <!-- Post info-->

                                    <!-- Author avatar -->
                                    <div class="mdui-card-header mdui-float-left" >
                                        <?php if (!empty($this->options->avatarURL)): ?>
                                            <img class="mdui-card-header-avatar" data-src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
                                        <?php else: ?>
                                            <?php $this->author->gravatar(64,'X','https://i.loli.net/2018/06/10/5b1d11b5bed74.png',"mdui-card-header-avatar"); ?>
                                        <?php endif; ?>

                                        <!--Author Name-->
                                        <span class="mdui-card-header-title mdui-typo"><a  href="<?php $this->author->permalink(); ?>">
                                            <?php $this->author(); ?></a>
                                        </span>

                                        <span class="mdui-card-header-subtitle" >
                                            <?php if ($this->options->langis == '0'): ?>
                                                <?php $this->date('F j, Y'); ?>
                                            <?php else: ?>
                                                <?php $this->dateWord(); ?>
                                            <?php endif; ?>
                                        </span>
                                        <!--Row Of Subtitle End-->

                                    </div>
                                    <!--Md Card Header End-->


                                    <!--Right Part Of Md Card Header(Under) -->
                                    <div class="mdui-typo mdui-float-right index-post-card-header-rightinfo" style="color:<?php $this->options->alinkcolor(); ?>">

                                        <div class="mdui-text-color-pink-accent" >
                                            <?php $this->category(', '); ?>

                                            <!-- Statistic of Views -->
                                            <?php if (in_array('ViewCount',$this->options->FunctionSwitch)): ?>
                                                <a href="<?php $this->permalink() ?>">
                                                    <?php echo '|'; ?>
                                                    <?php _e(getViewsStr($this)); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                    <!--Right Part Of Md Card Header End-->

                                </div>
                                <!--Md Card Of Post End-->


                            </div>
						</div>
                <?php endwhile; ?>
                <!--Post Md Cards Output End-->

			</div>
			<!-- Posts Output MD Container End-->

            <!-- Echo Prev & After Page-->
                    <div class="mdui-container pjax-load" >
                            <nav class="">
                                <div class="mdui-col-xs-3 mdui-m-y-3">
                                    <?php $this->pageLink(
                        '<div>
                            <button class="mdui-btn mdui-shadow-1 mdui-color-white mdui-ripple round-btn">
                                <i class="mdui-icon material-icons">arrow_back</i>
                            </button>
                        </div>'); ?>
                                </div>

                                <div style="line-height: 36px;" class="mdui-text-center mdui-col-xs-6 mdui-m-y-3">page
                                <?php if ($this->_currentPage>1) {
                            echo $this->_currentPage;
                        } else {
                            echo 1;
                        }?> of
                                <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                                </div>

                                <div class="mdui-col-xs-3 mdui-m-y-3" >
                                <?php $this->pageLink(
                        '<div>
                            <button class="mdui-btn mdui-shadow-1 mdui-color-white mdui-ripple mdui-float-right round-btn">
                                <i class="mdui-icon material-icons">arrow_forward</i>
                            </button>
                        </div>', 'next'); ?>
                                </div>
                            </nav>

                    </div>
                <!-- Echo Navigation Icon End-->

<?php $this->need('inc/sidebar.php'); ?>
<?php $this->need('inc/footer.php'); ?>


