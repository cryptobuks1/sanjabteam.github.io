---
nav_order: 100
parent: Widgets
---
# Text Area Widget
![Textarea widget](../images/screenshots/widgets/textarea.jpg)

A simple textarea input.

## Sample
```php
use Sanjab\Widgets\TextAreaWidget;

$this->widgets[] = TextAreaWidget::create('name', 'field Title')
                            ->required()
                            ->translation();
```
## Properties

### rows
`type: int`

Rows attribute of textarea
