=== Share a Draft Conditional ===
Contributors: simonwheatley
Tags: post, post, draft, posts, drafts, share, sharing, share a draft
Requires at least: 3.5
Tested up to: 3.5
Stable tag: 1.0

A conditional template tag/filter to identify Share A Draft shared drafts, and show messages and functionality to the people you're sharing with.

== Description ==

A conditional template tag/filter to identify Share A Draft shared drafts, and show messages and functionality to the people you're sharing with.

Here's some example code for a template in your theme showing how to show content to people you're sharing a draft with:
`
<?php if ( apply_filters( 'sad_is_draft', false ) ) : ?>
	<p>Welcome! This is a shared draft!</p>
<?php endif; ?>`

Here's some example code to add a Contact Form 7 form to a shared draft ([more on embedding Contact Form 7 forms](http://contactform7.com/faq/#Can_I_embed_a_contact_form_into_my_template_file)):
`<?php if ( apply_filters( 'sad_is_draft', false ) ) : ?>
	<?php echo do_shortcode( '[contact-form-7 id="14" title="Contact form 1"]' ); ?>
<?php endif; ?>`

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the whole `shareadraft-conditional` folder to `/wp-content/plugins/`
1. Activate the plugin through the `Plugins` menu in WordPress

== Changelog ==

= 1.0 =
* First release

