FrontendUserProfilesPW Installation & Configuration
---------------------------------------------------------------------------
1. Upload all files & Install module
2. Add 
	<pre><code>$fup = $modules->get('FrontendUserProfile');</code></pre>
   at the beginning of file *head.inc*
3. Add *if ($page->renderLogoutForm()) echo "<li>".$page->renderLogoutForm()."</li>";* after *echo "<li><a$class href='{$child->url}'>{$child->title}</a></li>"; \n }*
4. Add *<?php if ($message = $page->getMessage()): ?>
                <p style="color:<?php echo $message['type'] ?>;"><?php echo $message['content']; ?></p>
            <?php endif; ?>

            <?php echo $page->renderLoginForm(); ?>* after *<div id="bodycopy">*


REQUIREMENTS
---------------------------------------------------------------------------
1. Fieldtype DropDown by Hani79 (https://github.com/Hani79/Processwire_FieldType_Select_Drop_Down)

FrontendUserProfilesPW, Copyright 2013 by Orkhan Maharramli