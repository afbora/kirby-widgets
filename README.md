# Kirby Widgets

This repository has been archived since [Kirby 3.7](https://github.com/getkirby/kirby/releases/tag/3.7.0) supports stats section.

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
