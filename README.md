# CV project

The main idea of this project is to copy an existing website and make some corrections if we think that it is necessary in order to make our cv out of the site.

## List of sections
* header
    * navigation
    * global (global-navigation)
* Main
    * presentation
        * headline
        * slider
        * overview
    * menu sticky menu
    * lifeline
    * knowledge
    * description
    * contact
        * map
        * form
    * works
* footer
    * extern
    * copyright

## SCSS Mixins (_helpers)

* clearfix($side)
* calculateRem($size)
* font-source-sans($size: false, $colour: false, $weight: false,  $lh: false)
* font-face($font-name, $file-name, $weight: normal, $style: normal)
* margin-auto
* pseudo($display: block, $pos: absolute, $content: '')
* flexbox($direction: false, $wrap: false, $justify-content: false, $align-items: false, $align-content: false)

## Javascript

* nojs
* slider

## Naming convention

* HTML : BEM
* JavaScript : Camelcase
* sass : cobol-case
* sass colors : [Name that color](http://chir.ag/projects/name-that-color/#6195ED)

### Bem namespaces

*    o-&nbsp;: Signify that something is an Object, and that it may be used in any number of unrelated contexts to the one you can currently see it in. Making modifications to these types of class could potentially have knock-on effects in a lot of other unrelated places. Tread carefully.
 *   c-&nbsp;: Signify that something is a Component. This is a concrete, implementation-specific piece of UI. All of the changes you make to its styles should be detectable in the context you’re currently looking at. Modifying these styles should be safe and have no side effects.
 *   u-&nbsp;: Signify that this class is a Utility class. It has a very specific role (often providing only one declaration) and should not be bound onto or changed. It can be reused and is not tied to any specific piece of UI. You will probably recognise this namespace from libraries and methodologies like SUIT.
 *   t-&nbsp;: Signify that a class is responsible for adding a Theme to a view. It lets us know that UI Components’ current cosmetic appearance may be due to the presence of a theme.
 *   s-&nbsp;: Signify that a class creates a new styling context or Scope. Similar to a Theme, but not necessarily cosmetic, these should be used sparingly—they can be open to abuse and lead to poor CSS if not used wisely.
 *   is-, has-&nbsp;: Signify that the piece of UI in question is currently styled a certain way because of a state or condition. This stateful namespace is gorgeous, and comes from SMACSS. It tells us that the DOM currently has a temporary, optional, or short-lived style applied to it due to a certain state being invoked.
 *   _&nbsp;: Signify that this class is the worst of the worst—a hack! Sometimes, although incredibly rarely, we need to add a class in our markup in order to force something to work. If we do this, we need to let others know that this class is less than ideal, and hopefully temporary (i.e. "do not bind onto this").
 *   js-&nbsp;: Signify that this piece of the DOM has some behaviour acting upon it, and that JavaScript binds onto it to provide that behaviour. If you’re not a developer working with JavaScript, leave these well alone.
 *   qa-&nbsp;: Signify that a QA or Test Engineering team is running an automated UI test which needs to find or bind onto these parts of the DOM. Like the JavaScript namespace, this basically just reserves hooks in the DOM for non-CSS purposes.

original on [css wizardry](https://csswizardry.com/2015/03/more-transparent-ui-code-with-namespaces/)

## Create translation files
1. Install [gettext](http://gnuwin32.sourceforge.net/packages/gettext.htm)
1. $ "C:\Program Files (x86)\GnuWin32\bin\xgettext.exe" -n  *.php
1. Translate with poEdit
1. $ "C:\Program Files (x86)\GnuWin32\bin\msgfmt.exe" 
