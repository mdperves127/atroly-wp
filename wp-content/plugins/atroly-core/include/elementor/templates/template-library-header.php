<?php $logo = ATROLY_EXT_LOGO_URL; ?>
<script type="text/template" id="atrolycore-harry-template-library-header-logo">
	<span class="harry-template-library-logo-wrap">
		<img src="<?php echo $logo; ?>" alt="ATROLYcore Logo">
	</span>
    <span class="liteTemplateLibrary_logo-title">{{{ title }}}</span>
</script>

<script type="text/template" id="atrolycore-liteTemplateLibrary_header-back">
	<i class="eicon-" aria-hidden="true"></i>
	<span><?php echo __( 'Back to Library', 'atrolycore' ); ?></span>
</script>

<script type="text/template" id="atrolycore-liteTemplateLibrary_header-menu">
	<# _.each( tabs, function( args, tab ) { var activeClass = args.active ? 'elementor-active' : ''; #>
		<div class="elementor-component-tab elementor-template-library-menu-item {{activeClass}}" data-tab="{{{ tab }}}">{{{ args.title }}}</div>
	<# } ); #>
</script>

<script type="text/template" id="atrolycore-liteTemplateLibrary_header-menu-responsive">
	
</script>

<script type="text/template" id="atrolycore-liteTemplateLibrary_header-actions">
	<div id="liteTemplateLibrary_header-sync" class="elementor-templates-modal__header__item">
		<i class="eicon-sync" aria-hidden="true" title="<?php esc_attr_e( 'Sync Library', 'atrolycore' ); ?>"></i>
		<span class="elementor-screen-only"><?php esc_html_e( 'Sync Library', 'atrolycore' ); ?></span>
	</div>
</script>