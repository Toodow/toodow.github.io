<?php

$this->need('inc/header.php');
if ($this->options->langis == '0') {
    require_once(dirname(__FILE__) . '/inc/lang/en-us.php');
} elseif ($this->options->langis == '1') {
    require_once(dirname(__FILE__) . '/inc/lang/zh-cn.php');
} elseif ($this->options->langis == '2') {
    require_once(dirname(__FILE__) . '/inc/lang/zh-tw.php');
}
$MultiLang = new LangDict();
?>


    <!-- Standalone CSS Calling For Index -->
        <?php if (!empty($this->options->CDNUrl)): ?>
            <link class="pjax-load " rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNUrl(); ?>/MaterialCDN/css/page.css" />
        <?php else: ?>
            <link class="pjax-load" rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/page.css'); ?>" />
        <?php endif; ?>
    <!-- Standalone CSS END -->

    <link rel="prefetch" href="<?php $this->options->themeUrl('css/index.css') ?>" as="style">

</head>

<!-- Html Head END -->




<body class="mdui-drawer-body-left mdui-theme-primary-<?php $this->options->ThemeColor(); ?> mdui-theme-accent-<?php $this->options->AccentColor(); ?> <?php if (in_array('DarkTheme', $this->options->FunctionSwitch)) { echo 'mdui-theme-layout-dark'; }?>" >

		<main>

			<!-- Auto Hiding Header & Appbar & Title -->
			<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide header-responsive" >
				<div class="mdui-toolbar mdui-color-theme mdui-color-white" >

					<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#sidebar', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>

                    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-center"  >
						<?php $this->options->title(); ?>
					</a>

				</div>
			</header>
			<!-- Header & Appbar & Title END -->


			<div class="mdui-container-fluid mdui-appbar-with-toolbar pjax-load" >
				<div class="mdui-row mdui-p-b-4" >
					<div class="mdui-col-xs-12 mdui-col-md-10 mdui-col-offset-md-1">
						<div class="mdui-card" >
							<div class="mdui-card-primary" style="padding-left:30px;">
								<div clas="mdui-card-primary-title mdui-typo">
									<h1>404 Page Not Found</h1>
								</div>
							</div>
						</div>
						<!--Post Content MD Card End -->
					</div>
				</div>
			</div>


<?php include('inc/sidebar.php'); ?>
<?php include('inc/footer.php'); ?>
