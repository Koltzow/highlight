# Highlight
Highlight is a simple javascript for making adding mouse tracked element highlights.

# Basic setup
Include the script right before your `</body>`.

```html
<script src="highlight.js" type="text/javascript"></script>
```

Next we can add a new highlight by inputting an element class name and the path for the highlight image. 

```javascript
new Highlight('btn', 'highlight-solid.png');
```

You can also add multiple different highlights in the same document

```javascript
var highlight = new Highlight('btn', 'highlight-solid.png');
var highlight2 = new Highlight('input', 'highlight-light.png');
```

If you add new elements with the same class and you want to add highlights to them also just run…

```javascript
highlight.update();
```

That's it!

Included are 4 different highlights
* highlight-bright - A bright faded circle
* highlight-light - A translucent faded circle
* highlight-solid - A translucent solid circle
* highlight-cros - A simple cross for calibration