# Blend is Beautifuul

This is a simple image viewer for my Are.na channel of found images called [Blend is Beautiful](https://www.are.na/laurel-schwulst/blend-is-beautiful). It's based on Damon Zucconi's [Atlas](http://atlas.damonzucconi.com) and using the [Are.na PHP API](https://github.com/arenahq/arena-php).

### Blend
+ index.php
+ this is always the splash page, or home page
+ always show just 4 random images from collection
+ <s>todo: ideally clicking on an image would on click one) take you to lightbox view, click two) take you to where that image existed in the overall catalog</s>

### Catalog
+ catalog.php
+ this always has thumbnails with pagination at top and bottom
+ each page will show 24 items per
+ *todo*: right now it starts at page 1 (oldest), but i would like it to start at the last page

### Lightbox
+ lightbox.php
+ image always centered
+ *todo*: if the title comes up as “untitled” i would like it to not display

### Other...
+ *todo* when i make the channel “private”, all the contents disappear. is there a way to make it private and still see the content?

+ *todo* eventually want to have two tabs within this site, one for videos and one for images. videos will have to be in a another channel.