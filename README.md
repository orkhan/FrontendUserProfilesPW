FrontendUserProfilesPW Installation & Configuration
---------------------------------------------------------------------------
1. Upload all files & Install module
2. Open file */site/templates/head.inc*
3. Add 

	<pre><code>$fup = $modules->get('FrontendUserProfile');</code></pre>
	at the beginning of file
4. Add 
	
	<pre><code>if ($page->renderLogoutForm()) echo "&lt;li&gt;".$page->renderLogoutForm()."&lt;/li&gt;";</code></pre>
	after 

	<pre><code>	echo "&lt;li&gt;&lt;a$class href='{$child->url}'&gt;{$child->title}&lt;/a&gt;&lt;/li&gt;";
	}
	</code></pre>
5. Add 
	<pre><code>&lt;?php if ($message = $page->getMessage()): ?&gt;
    	&lt;p style="color:&lt;?php echo $message['type'] ?&gt;;"&gt;&lt;?php echo $message['content']; ?&gt;&lt;/p&gt;
    &lt;?php endif; ?>
	
	&lt;?php echo $page->renderLoginForm(); ?&gt;
	</code></pre>
	after
	
	<pre><code>&lt;div id="bodycopy"&gt;
	</code></pre>


REQUIREMENTS
---------------------------------------------------------------------------
1. Fieldtype DropDown by Hani79 (https://github.com/Hani79/Processwire_FieldType_Select_Drop_Down)


AUTHOR
---------------------------------------------------------------------------
Copyright 2013 by Orkhan Maharramli (orkhan.maharramli[at]gmail.com)