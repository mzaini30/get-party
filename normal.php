<?php include "html-1.php" ?>

<!-- Highlight -->

<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.4.0/build/styles/default.min.css"/>
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.4.0/build/highlight.min.js"></script>

<pre><code class="language-css">.namae-wa {
	display: flex;
	position: absolute;
	color: rgba(0, 0, 0, 0.2);
}</code></pre>

<script>hljs.highlightAll();</script>

<!-- Marked -->

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<div class="marked"></div>
<script>
	document.querySelector(".marked").outerHTML = marked.parse(`# Hello World

Lorem ipsum dolor sit amet

> I love your attitude`)
</script>

<!-- Mermaid -->

<script src="https://unpkg.com/mermaid@8.13.10/dist/mermaid.min.js"></script>

<div class="mermaid">
graph TD;
    A-->B;
    A-->C;
    B-->D;
    C-->D;
</div>

<script>mermaid.initialize({startOnLoad:true});</script>

<?php include "html-2.php" ?>
