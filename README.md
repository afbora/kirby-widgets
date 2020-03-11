# Kirby Widgets

[![Source](https://img.shields.io/badge/source-afbora/kirby-widgets-blue?style=flat-square)](https://github.com/afbora/kirby-widgets)
[![Download](https://img.shields.io/packagist/dt/afbora/kirby-widgets?style=flat-square)](https://github.com/afbora/kirby-widgets)
[![Open Issues](https://img.shields.io/github/issues-raw/afbora/kirby-widgets?style=flat-square)](https://github.com/afbora/kirby-widgets)
[![Last Commit](https://img.shields.io/github/last-commit/afbora/kirby-widgets?style=flat-square)](https://github.com/afbora/kirby-widgets)
[![Release](https://img.shields.io/github/v/release/afbora/kirby-widgets?style=flat-square)](https://github.com/afbora/kirby-widgets)
[![License](https://img.shields.io/github/license/afbora/kirby-widgets?style=flat-square)](https://github.com/afbora/kirby-widgets)

Shows the data you want to see in the Kirby 3 panel.

## Preview

![Kirby Builder Screenshot](https://raw.githubusercontent.com/afbora/kirby-widgets/master/preview.png)

## Installation

### Installation with composer

```ssh
composer require afbora/kirby-widgets
```

### Add as git submodule

```ssh
git submodule add https://github.com/afbora/kirby-widgets.git site/plugins/kirby-widgets
```

## Usage

```yaml
sections:
    widgetSalesToday:
        type: widget
        text:
            en: Today Sales
            tr: Bugünkü Satış Tutarı
        icon: smile
        query: site.orders.completedOrdersTotal(date("Y-m-d", strtotime("-1 day")))
        default: 0
        before: $
        after: USD
```
