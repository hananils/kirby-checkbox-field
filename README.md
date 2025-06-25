![Kirby Checkbox Field](.github/title.png)

Checkbox is a simple field for Kirby that is a companion of the core toggle field. It offers a single checkbox with label and info text and can be used wherever a single option is required and the "on" and "off" metaphor of a toggle does not suit well.

> [!NOTE]
> Please check out the online documentation at [kirby.hananils.de/plugins/checkbox-field](https://kirby.hananils.de/plugins/checkbox-field) for further information.

# Introduction

Toggles – like [the core field](https://getkirby.com/docs/reference/panel/fields/toggle) – and checkboxes have a lot in common as they both allow users to change the state of a setting. The mental models behind both concepts are different though. While a toggle usually conveys an immediate action, switching a setting "on" or "off" like a lightbulb, ticking a checkbox does not imply an action but communicates consent or disconsent. "Do you agree to the terms of service?" Yes or no.

For all use cases where you don't want to toggle a switch but what to represent a content choice, this field is for you.

> [!TIP]  
> Do you think this should be a core field, too? [Go and tell the Kirby team!](https://feedback.getkirby.com/)

## Example

The field setup is minimal:

```
checkbox:
  type: checkbox
  label: I like ticking boxes
  info: You can untick the box again later if you changed your mind.
```

Please note that the label for this field is not displayed above the field but beside the checkbox itself. The label thus represents the option the editor checks or unchecks.

## Templating

Just like with the toggle field, a checkbox value can be converted to a proper boolean:

```php
$bool = $page->checkbox()->toBool();
```

And the field methods `isTrue` and `isFalse` can be used to validate a setting and:

```
if ($page->checkbox()->isTrue()) {
  // do something
}
```

## Installation

### Download

Download and copy this repository to `/site/plugins/checkbox-field`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-checkbox-field.git site/plugins/checkbox-field
```

### Composer

```
composer require hananils/kirby-checkbox-field
```

# License

This plugin is provided freely under the [MIT license](LICENSE.md) by [hana+nils · Büro für Gestaltung](https://hananils.de).  
We create visual designs for digital and analog media.
