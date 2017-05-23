<?php

use Illuminate\Database\Seeder;

class CanvasPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canvas_posts')->delete();
        
        \DB::table('canvas_posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'slug' => 'hello-world',
                'title' => 'Hello World',
                'subtitle' => 'Canvas is a simple, powerful blog publishing platform that lets you to share your stories with the world. Its beautifully designed interface allows you to create and publish your own blog, giving you tools that make it easy and even fun to do.',
                'content_raw' => 'Welcome to Canvas! I\'m your first post demonstrating Markdown integration. Don\'t delete me, I\'m very helpful! If you do delete me though, I can be recovered. Just grab me from:

```language-markup
resources/views/shared/helpers/welcome.blade.php
```

<div class="section-divider"></div>

## The Basics
---

Before I tell you about all the extra syntaxes and capabilities you have available to you, I\'ll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!

Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found [here](http://daringfireball.net/projects/markdown/syntax).

<div class="section-divider"></div>

## Typography
---

# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6

Just put angle brackets around an email and it becomes clickable: <user@example.com> `<user@example.com>`

Same thing with urls: <http://example.com> `<http://example.com>`

Perhaps you want to some link text like this: [Example Website](http://example.com "Title")
`[Example Website](http://example.com "Title")` (The title is optional)

Make [a link][arbitrary_id] `[a link][arbitrary_id]` then on it\'s own line anywhere else in the file:
`[arbitrary_id]: http://example.com "Title"`

If the link text itself would make a good id, you can link [like this][] `[like this][]`, then on it\'s own line anywhere else in the file:
`[like this]: http://example.com`

[arbitrary_id]: http://example.com "Title"
[like this]: http://example.com

Option name         | Markup           | Result
--------------------|------------------|-------------------------
Intra-word emphasis | `Intra-word em\\*pha\\*sis`   | Intra-word em<em>pha</em>sis
Strikethrough       | `\\~~Strikethrough\\~~`   | <del>Strikethrough</del>
Underline  | `\\_Underline\\_`      | <u>Underline</u>
Quote      | `\\"Quote\\"`  | <q>Quote</q>
Highlight           | `\\==Highlight\\==`    | <mark>Highlight</mark>
Superscript         | `Some\\^(superscript)`     | Some<sup>superscript</sup>
Italics            | `**Italics**`      | <em>Italics</em>
Bold | `*Bold text*`   | <strong>Bold text</strong>
HTML Entities | ``&copy;`` ``&#402;`` ``&#8482;`` ``&reg;`` | © ƒ ™ ®

<div class="section-divider"></div>

## Tables
---

##### **Markup**:
```language-markup
Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`
```

<div class="section-divider"></div>

##### **Result**:
Key                 | Value
------------------- | ---
SSH Host            | `example.com`
SSH User            | `username`
SSH Password        | `secret`
Database Host       | `127.0.0.1`
Database User       | `username`
Database Password   | `secret`

<div class="section-divider"></div>

## Code Blocks
---

`Inline code` is indicated by surrounding it with backticks:
`` `Inline code` ``

If your ``code has `backticks` `` that need to be displayed, you can use double backticks:
```` ``Code with `backticks` `` ````  (mind the spaces preceding the final set of backticks)

GitHub\'s fenced code blocks are supported in canvas::

```php
namespace App;

class Canvas extends Blog
{

/**
* Dreaming of a world without WordPress?
*
* @with  Canvas
*/
public function create()
{
// Make something awesome...
}
}
```

You can also use waves (`~`) instead of back ticks (`` ` ``):

~~~php
print(\'Hello world!\')
~~~

<div class="section-divider"></div>

## Lists
---

##### **Markup**:
```language-markup
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn\'t matter what number you use, it will render sequentially
```

<div class="section-divider"></div>

##### **Result**:
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1`
3. It doesn\'t matter what number you use, it will render sequentially

<div class="section-divider"></div>

## Block Quotes
---

##### **Markup**:
```language-markup
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though.
> > Block quotes can be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.
```

<div class="section-divider"></div>

##### **Result**:
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though.
> > Block quotes can be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.

<div class="section-divider"></div>

## Horizontal Rules
---

If you type three asterisks `***`, you will get a horizontal rule. Three dashes `---` will make the same rule.

<div class="section-divider"></div>

## Task List Syntax
---

1. [x] Support for rendering checkbox list syntax
* [x] Support for nesting
* [x] Support for ordered *and* unordered lists
2. [ ] No support for clicking checkboxes directly in the HTML window

<div class="section-divider"></div>

## Markdown Extra
---

Canvas supports **Markdown Extra**, which extends traditional **Markdown** syntax with some nice features. If you need some help or just want a refresher, read more about [Markdown syntax](https://daringfireball.net/projects/markdown/syntax) and [Markdown Extra](https://michelf.ca/projects/php-markdown/extra/).

<div class="section-divider"></div>

## Hack On
---

That’s about it. The best way to be proficient in anything is to know what tools you have available to you. You\'re one step ahead of the game now. Happy coding!',
                'content_html' => '<p>Welcome to Canvas! I\'m your first post demonstrating Markdown integration. Don\'t delete me, I\'m very helpful! If you do delete me though, I can be recovered. Just grab me from:</p>
<pre><code class="language-language-markup">resources/views/shared/helpers/welcome.blade.php</code></pre>
<div class="section-divider"></div>
<h2>The Basics</h2>
<hr />
<p>Before I tell you about all the extra syntaxes and capabilities you have available to you, I\'ll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!</p>
<p>Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found <a href="http://daringfireball.net/projects/markdown/syntax">here</a>.</p>
<div class="section-divider"></div>
<h2>Typography</h2>
<hr />
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>Just put angle brackets around an email and it becomes clickable: <a href="mailto:user@example.com">user@example.com</a> <code>&lt;user@example.com&gt;</code></p>
<p>Same thing with urls: <a href="http://example.com">http://example.com</a> <code>&lt;http://example.com&gt;</code></p>
<p>Perhaps you want to some link text like this: <a href="http://example.com" title="Title">Example Website</a>
<code>[Example Website](http://example.com "Title")</code> (The title is optional)</p>
<p>Make <a href="http://example.com" title="Title">a link</a> <code>[a link][arbitrary_id]</code> then on it\'s own line anywhere else in the file:
<code>[arbitrary_id]: http://example.com "Title"</code></p>
<p>If the link text itself would make a good id, you can link <a href="http://example.com">like this</a> <code>[like this][]</code>, then on it\'s own line anywhere else in the file:
<code>[like this]: http://example.com</code></p>
<table>
<thead>
<tr>
<th>Option name</th>
<th>Markup</th>
<th>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td>Intra-word emphasis</td>
<td><code>Intra-word em\\*pha\\*sis</code></td>
<td>Intra-word em<em>pha</em>sis</td>
</tr>
<tr>
<td>Strikethrough</td>
<td><code>\\~~Strikethrough\\~~</code></td>
<td><del>Strikethrough</del></td>
</tr>
<tr>
<td>Underline</td>
<td><code>\\_Underline\\_</code></td>
<td><u>Underline</u></td>
</tr>
<tr>
<td>Quote</td>
<td><code>\\"Quote\\"</code></td>
<td><q>Quote</q></td>
</tr>
<tr>
<td>Highlight</td>
<td><code>\\==Highlight\\==</code></td>
<td><mark>Highlight</mark></td>
</tr>
<tr>
<td>Superscript</td>
<td><code>Some\\^(superscript)</code></td>
<td>Some<sup>superscript</sup></td>
</tr>
<tr>
<td>Italics</td>
<td><code>**Italics**</code></td>
<td><em>Italics</em></td>
</tr>
<tr>
<td>Bold</td>
<td><code>*Bold text*</code></td>
<td><strong>Bold text</strong></td>
</tr>
<tr>
<td>HTML Entities</td>
<td><code>&amp;copy;</code> <code>&amp;#402;</code> <code>&amp;#8482;</code> <code>&amp;reg;</code></td>
<td>© ƒ ™ ®</td>
</tr>
</tbody>
</table>
<div class="section-divider"></div>
<h2>Tables</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<table>
<thead>
<tr>
<th>Key</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>SSH Host</td>
<td><code>example.com</code></td>
</tr>
<tr>
<td>SSH User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>SSH Password</td>
<td><code>secret</code></td>
</tr>
<tr>
<td>Database Host</td>
<td><code>127.0.0.1</code></td>
</tr>
<tr>
<td>Database User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>Database Password</td>
<td><code>secret</code></td>
</tr>
</tbody>
</table>
<div class="section-divider"></div>
<h2>Code Blocks</h2>
<hr />
<p><code>Inline code</code> is indicated by surrounding it with backticks:
<code>`Inline code`</code></p>
<p>If your <code>code has `backticks`</code> that need to be displayed, you can use double backticks:
<code>``Code with `backticks` ``</code>  (mind the spaces preceding the final set of backticks)</p>
<p>GitHub\'s fenced code blocks are supported in canvas::</p>
<pre><code class="language-php">namespace App;

class Canvas extends Blog
{

/**
* Dreaming of a world without WordPress?
*
* @with  Canvas
*/
public function create()
{
// Make something awesome...
}
}</code></pre>
<p>You can also use waves (<code>~</code>) instead of back ticks (<code>`</code>):</p>
<pre><code class="language-php">print(\'Hello world!\')</code></pre>
<div class="section-divider"></div>
<h2>Lists</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn\'t matter what number you use, it will render sequentially</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<ul>
<li>Lists must be preceded by a blank line (or block element)</li>
<li>Unordered lists start each item with a <code>*</code></li>
<li><code>-</code> Works too</li>
<li>Indent a level to make a nested list
<ol>
<li>Ordered lists are supported.</li>
<li>Start each item (number-period-space) like <code>1</code></li>
<li>It doesn\'t matter what number you use, it will render sequentially</li>
</ol></li>
</ul>
<div class="section-divider"></div>
<h2>Block Quotes</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">&gt; Angle brackets `&gt;` are used for block quotes.
Technically not every line needs to start with a `&gt;` as long as
there are no empty lines between paragraphs.
&gt; Looks kinda ugly though.
&gt; &gt; Block quotes can be nested.
&gt; &gt; &gt; Multiple Levels
&gt;
&gt; Most markdown syntaxes work inside block quotes.</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<blockquote>
<p>Angle brackets <code>&gt;</code> are used for block quotes.
Technically not every line needs to start with a <code>&gt;</code> as long as
there are no empty lines between paragraphs.
Looks kinda ugly though.</p>
<blockquote>
<p>Block quotes can be nested.</p>
<blockquote>
<p>Multiple Levels</p>
</blockquote>
</blockquote>
<p>Most markdown syntaxes work inside block quotes.</p>
</blockquote>
<div class="section-divider"></div>
<h2>Horizontal Rules</h2>
<hr />
<p>If you type three asterisks <code>***</code>, you will get a horizontal rule. Three dashes <code>---</code> will make the same rule.</p>
<div class="section-divider"></div>
<h2>Task List Syntax</h2>
<hr />
<ol>
<li>[x] Support for rendering checkbox list syntax
<ul>
<li>[x] Support for nesting</li>
<li>[x] Support for ordered <em>and</em> unordered lists</li>
</ul></li>
<li>[ ] No support for clicking checkboxes directly in the HTML window</li>
</ol>
<div class="section-divider"></div>
<h2>Markdown Extra</h2>
<hr />
<p>Canvas supports <strong>Markdown Extra</strong>, which extends traditional <strong>Markdown</strong> syntax with some nice features. If you need some help or just want a refresher, read more about <a href="https://daringfireball.net/projects/markdown/syntax">Markdown syntax</a> and <a href="https://michelf.ca/projects/php-markdown/extra/">Markdown Extra</a>.</p>
<div class="section-divider"></div>
<h2>Hack On</h2>
<hr />
<p>That’s about it. The best way to be proficient in anything is to know what tools you have available to you. You\'re one step ahead of the game now. Happy coding!</p>',
                'page_image' => '/vendor/canvas/assets/images/mocha.jpg',
                'meta_description' => 'Let\'s get you up and running with Canvas!',
                'is_published' => 1,
                'layout' => 'canvas::frontend.blog.post',
                'created_at' => '2017-05-21 16:53:17',
                'updated_at' => '2017-05-21 16:53:17',
                'published_at' => '2017-05-21 16:53:17',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'slug' => 'new-shop-new-home-old-shoes',
                'title' => 'New Shop, New Home, Old Shoes',
                'subtitle' => 'Its all happening... I think?',
                'content_raw' => 'So not the newest news in my world but new none the less. I now rest my head in a live work studio, complete with 16 foot ceilings, concrete floors, and exposed pipes. Neat crevat I an the first person to acctually live here in this brand new building! So on with the shinannigains!

However my shoes are outdated and I want nice ones again.',
                'content_html' => '<p>So not the newest news in my world but new none the less. I now rest my head in a live work studio, complete with 16 foot ceilings, concrete floors, and exposed pipes. Neat crevat I an the first person to acctually live here in this brand new building! So on with the shinannigains!</p>
<p>However my shoes are outdated and I want nice ones again.</p>',
                'page_image' => '',
                'meta_description' => 'A new home and shop will be my paradise soon enough.',
                'is_published' => 1,
                'layout' => 'canvas::frontend.blog.post',
                'created_at' => '2017-05-21 20:08:27',
                'updated_at' => '2017-05-22 01:56:06',
                'published_at' => '2017-05-21 18:50:55',
            ),
        ));
        
        
    }
}
