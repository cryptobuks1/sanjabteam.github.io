---
nav_order: 100
parent: Widgets
---
# Text Widget
![Text widget](../images/screenshots/widgets/text.jpg)

A simple text input.

## Sample
```php
use Sanjab\Widgets\TextWidget;

$this->widgets[] = TextWidget::create('name', 'field Title')
    ->required()
    ->translation();
```
