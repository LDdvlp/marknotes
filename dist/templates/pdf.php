<?php
/**
* markdown - Script that will transform your notes taken in the Markdown format (.md files) into a rich website
* @version   : 1.0.5
* @author    : christophe@aesecure.com
* @license   : MIT
* @url       : https://github.com/cavo789/markdown
* @package   : 2017-03-27T08:34:06.641Z
*/?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Markdown | Notes management" />
		<meta name="designer" content="Markdown | Notes management" />
		<meta name="keywords" content="%TITLE%" />
		<meta name="description" content="%TITLE%" />
		<meta property="og:url" content="%URL_PAGE%" />

		<title>%TITLE%</title>

		<link media="screen" rel="stylesheet" type="text/css" href="%ROOT%/libs/bootstrap/css/bootstrap.min.css" />
		<link media="screen" rel="stylesheet" type="text/css" href="%ROOT%/libs/font-awesome/css/font-awesome.min.css" />
		<link media="screen" rel="stylesheet" type="text/css" href="%ROOT%/assets/css/markdown_html.css" />

	</head>

	<body>

		<div class="container">
			<article id="top">
				%CONTENT%
			</article>
		</div>

	</body>

</html>
