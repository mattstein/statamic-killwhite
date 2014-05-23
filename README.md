# Statamic Whitespace Remover

Inspired by a similar Twig plugin, this plugin makes a `{{ killwhite }}` tag pair available that'll trim leading+trailing spaces, tabs, and newlines from anything inside it.

## Example

So if you've got some convoluted conditionals like this...

```
<title>
    {{ if title != 'Home' AND title != '' }}{{ title }} | {{ endif }}
    {{ if taxonomy_name }}{{ taxonomy_name|title }} | {{ endif }}
    {{ if get:page }}Page {{ get:page }} | {{ endif }}
    {{ _site_name }}{{ if title == 'Home' }}: {{ _site_tagline }}{{ endif }}
</title>
```

...you'll be annoyed at the resulting markup:

```
<title>
    Some Post |     

    Working Concept
</title>
```

But add a `{{ killwhite }}` tag to the mix...

```
<title>{{ killwhite }}
    {{ if title != 'Home' AND title != '' }}{{ title }} | {{ endif }}
    {{ if taxonomy_name }}{{ taxonomy_name|title }} | {{ endif }}
    {{ if get:page }}Page {{ get:page }} | {{ endif }}
    {{ _site_name }}{{ if title == 'Home' }}: {{ _site_tagline }}{{ endif }}
{{ /killwhite }}</title>
```

...and the resulting markup is much easier to look at:

```
<title>Some Post | Working Concept</title>
```

You might be able to use this more liberally for HTML minification, but it's probably not a great idea.