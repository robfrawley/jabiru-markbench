<?php

namespace Markbench\Profile;

use Markbench\ProfileInterface;

class GithubAndHtmlAttributesAndTextileProfile implements ProfileInterface
{

    /**
     * Returns the name of this profile
     *
     * @return mixed
     */
    public function getName()
    {
        return 'github-attrs-textile';
    }

    /**
     * Describe this profile
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Sample Gfm+HtmlAttrs+Textile content / 1000 times';
    }

    /**
     * Returns markdown content to test
     *
     * @return string
     */
    public function getContent()
    {
        return <<<EOF
GFM+Html Attributes {#id.class1.class2[role="main" align=right]}
================================================================

{[data-test=test]} *View the [source of this content](http://github.github.com/github-flavored-markdown/sample_content.html).*

{[data-test=test]} Let's get the whole "linebreak" thing out of the way. The next paragraph contains two phrases separated by a single newline character:

Roses are red
Violets are blue

{[data-test=test]} The next paragraph has the same phrases, but now they are separated by two spaces and a newline character:

Roses are red
Violets are blue

{[data-test=test]} Oh, and one thing I cannot stand is the mangling of words with multiple underscores in them like perform_complicated_task or do_this_and_do_that_and_another_thing.

A bit of the GitHub spice {#id01}
---------------------------------

{[data-test=test]} In addition to the changes in the previous section, certain references are auto-linked:

* SHA: be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* User@SHA ref: mojombo@be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* User/Project@SHA: mojombo/god@be6a8cc1c1ecfe9489fb51e4869af15a13fc2cd2
* \#Num: #1
* User/#Num: mojombo#1
* User/Project#Num: mojombo/god#1

{[data-test=test]} These are dangerous goodies though, and we need to make sure email addresses don't get mangled:

{[data-test=test]} My email addy is tom@github.com.

{[data-test=test]} Math is hard, let's go shopping {#id02}
---------------------------------------

In first grade I learned that 5 > 3 and 2 < 7. Maybe some arrows. 1 -> 2 -> 3. 9 <- 8 <- 7.

Triangles man! a^2 + b^2 = c^2

We all like making lists {#id03}
--------------------------------

{[data-test=test]} The above header should be an H2 tag. Now, for a list of fruits:

* Red Apples
* Purple Grapes
* Green Kiwifruits

{[data-test=test]} Let's get crazy:

1.  This is a list item with two paragraphs. Lorem ipsum dolor
    sit amet, consectetuer adipiscing elit. Aliquam hendrerit
    mi posuere lectus.

    Vestibulum enim wisi, viverra nec, fringilla in, laoreet
    vitae, risus. Donec sit amet nisl. Aliquam semper ipsum
    sit amet velit.

2.  Suspendisse id sem consectetuer libero luctus adipiscing.

What about some code **in** a list? That's insane, right?

1. In Ruby you can map like this:

        ['a', 'b'].map { |x| x.uppercase }

2. In Rails, you can do a shortcut:

        ['a', 'b'].map(&:uppercase)

{[data-test=test]} Some people seem to like definition lists

<dl>
  <dt>Lower cost</dt>
  <dd>The new version of this product costs significantly less than the previous one!</dd>
  <dt>Easier to use</dt>
  <dd>We've changed the product so that it's much easier to use!</dd>
</dl>

I am a robot {#id04}
--------------------

Maybe you want to print `robot` to the console 1000 times. Why not?

    def robot_invasion
      puts("robot " * 1000)
    end

You see, that was formatted as code because it's been indented by four spaces. {.someClass}

{#anId.andClass} How about we throw some angle braces and ampersands in there?

    <div class="footer">
        &copy; 2004 Foo Corporation
    </div>

Set in stone {#id05}
--------------------

Preformatted blocks are useful for ASCII art:

<pre>
             ,-.
    ,     ,-.   ,-.
   / \   (   )-(   )
   \ |  ,.>-(   )-<
    \|,' (   )-(   )
     Y ___`-'   `-'
     |/__/   `-'
     |
     |
     |    -hrr-
  ___|_____________
</pre>

Playing the blame game {#id06}
------------------------------

If you need to blame someone, the best way to do so is by quoting them:

> I, at any rate, am convinced that He does not throw dice.

Or perhaps someone a little less eloquent:

> I wish you'd have given me this written question ahead of time so I
> could plan for it... I'm sure something will pop into my head here in
> the midst of this press conference, with all the pressure of trying to
> come up with answer, but it hadn't yet...
>
> I don't want to sound like
> I have made no mistakes. I'm confident I have. I just haven't - you
> just put me under the spot here, and maybe I'm not as quick on my feet
> as I should be in coming up with one.

Table for two {#id07}
---------------------

<table>
  <tr>
    <th>ID</th><th>Name</th><th>Rank</th>
  </tr>
  <tr>
    <td>1</td><td>Tom Preston-Werner</td><td>Awesome</td>
  </tr>
  <tr>
    <td>2</td><td>Albert Einstein</td><td>Nearly as awesome</td>
  </tr>
</table>

Crazy linking action {#id08}
----------------------------

I get 10 times more traffic from [Google] [1] than from
[Yahoo] [2] or [MSN] [3].

  [1]: http://google.com/        "Google"
  [2]: http://search.yahoo.com/  "Yahoo Search"
  [3]: http://search.msn.com/    "MSN Search"

# HTML Attributes

Header {#id.class1.class2[role="main" align=right]}
======

### Header {#id}

### Header {.class}

{[aria-hidden=true]} Header
-----------

###### {[aria-hidden=true]} Header

{#id} Lorem ipsum dolor sit amet

{#id} Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Qui dicta minus molestiae vel
beatae natus eveniet ratione temporibus

{#id}
Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Qui dicta minus molestiae vel
beatae natus eveniet ratione temporibus

Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Qui dicta minus molestiae vel
beatae natus eveniet ratione temporibus {#id}

Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Qui dicta minus molestiae vel
beatae natus eveniet ratione temporibus
{#id}
EOF;

    }

    /**
     * @return mixed
     */
    public function getLoopCount()
    {
        return 2000;
    }

}