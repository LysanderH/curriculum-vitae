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

## Create translation files
1. Install [gettext](http://gnuwin32.sourceforge.net/packages/gettext.htm)
1. $ "C:\Program Files (x86)\GnuWin32\bin\xgettext.exe" -n  *.php
1. Translate with poEdit
1. $ "C:\Program Files (x86)\GnuWin32\bin\msgfmt.exe" 