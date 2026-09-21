[![Checkbox Field for Kirby CMS](header.png)](https://kirby.hananils.de/plugins/checkbox-field)

Checkbox is a simple field that is a companion of the core toggle field. It offers a single checkbox with label and info text and can be used wherever a single option is required and the “on” and “off” metaphor of a toggle does not suit well.

## Introduction

Toggles – like [the core field](https://getkirby.com/docs/reference/panel/fields/toggle) – and checkboxes have a lot in common as they both allow users to change the state of a setting. The mental models behind both concepts are different though. While a toggle usually conveys an immediate action, switching a setting “on” or “off” like a lightbulb, ticking a checkbox does not imply an action but communicates consent or disconsent. “Do you agree to the terms of service?” Yes or no.

For all use cases where you don’t want to toggle a switch but what to represent a content choice, this field is for you.

> [!TIP]
> Do you think this should be a core field, too? [Go and tell the Kirby team!](https://feedback.getkirby.com/)

### Example

![](https://kirby.hananils.test/media/pages/plugins/checkbox-field/a33f0c42c3-1790000604/checkbox-field_screenshot.png)The field setup is minimal:

```
checkbox:
  type: checkbox
  label: I like ticking boxes
  info: You can untick the box again later if you changed your mind.
```

Please note that the label for this field is not displayed above the field but beside the checkbox itself. The label thus represents the option the editor checks or unchecks.

### Properties

- **autofocus:** Sets the focus on this field when the form loads. Only the first field with this label gets
- **default:** Default value which will be saved when a new page/​user/​file is created
- **disabled:** If `true`, the field is no longer editable and will not be saved
- **info:** Sets the info text next to the checkbox label.
- **label:** The field label can be set as string or associative array with translations
- **required:** If `true`, the field has to be filled in correctly to be saved.
- **translate:** trueIf `false`, the field will be disabled in non-default languages and cannot be translated. This is only relevant in multi-language setups.
- **when:** Conditions when the field will be shown (since 3.1.0)
- **width:** “1/1″The width of the field in the field grid, e. g. `1/1`, `1/2`, `1/3`, `1/4`, `2/3`, `3/4`

### Templating

Just like with the toggle field, a checkbox value can be converted to a proper boolean:

```php
$bool = $page->checkbox()->toBool();
```

And the field methods `isTrue` and `isFalse` can be used to validate a setting and:

```php
if ($page->checkbox()->isTrue()) {
  // do something
} 
```

## Installation

By default, plugins in Kirby reside in a special folder located at `/site/plugins`. Each plugin is installed in its proprietary subfolder. This installation can be handled in four different ways: you can either install them manually or manage them using Kirby CLI, Git submodules or Composer. You can install Checkbox Field either way and should choose the method suiting your project best.

Please note that all examples given here assume you are using the default plugin root. [If you changed your plugin root](https://getkirby.com/docs/reference/system/roots/plugins), e. g. with a custom folder setup, you’ll also have to adjust the paths given in this guide. For further information on how to manage plugins, please read the [official Kirby plugin introduction](https://getkirby.com/docs/guide/plugins/plugin-basics).

### Download

Download and copy this repository to `/site/plugins/checkbox-field`.

### Kirby CLI

```shell
kirby plugin:install hananils/kirby-checkbox-field
```

### Git submodule

```bash
git submodule add \
    https://github.com/hananils/kirby-checkbox-field.git \
    site/plugins/checkbox-field
```

### Composer

```shell
composer require hananils/kirby-checkbox-field
```

## Documentation

[![Find all documentation at kirby.hananils.de](footer.png)](https://kirby.hananils.de/plugins/checkbox-field)

Where possible, files contain inline annotations. For extended documentation, please visit our dedicated plugin site at [kirby.hananils.de/​plugins/​checkbox-field](https://kirby.hananils.de/plugins/checkbox-field).

### Reference

- [Fields](https://kirby.hananils.de/plugins/checkbox-field/fields)

## License

This plugin is provided freely under the [MIT license](https://kirby.hananils.de/plugins/checkbox-field/license) by [hana+nils · Büro für Gestaltung](https://kirby.hananils.de). We create visual designs for digital and analog media.