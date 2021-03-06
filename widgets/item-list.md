---
nav_order: 100
parent: Widgets
---
# Item List Widget
![Item list widget](../images/screenshots/widgets/item-list.jpg)

This widget using to store array of fields.

## Sample
```php
use Sanjab\Widgets\ItemListWidget;
use Sanjab\Widgets\TextWidget;
use Sanjab\Widgets\File\UppyWidget;

$this->widgets[] = ItemListWidget::create('gallery')
    ->addWidget(TextWidget::create('title')->required())
    ->addWidget(UppyWidget::image('image')->required());
```

You also should define `$casts` in you'r model.
```php
protected $casts = [
    'gallery' => 'array'
];
```

and result will would be something like this.
```php
[
  [
    "title" => "test 2",
    "image" => "image1.jpeg"
  ],
  [
    "title" => "test",
    "image" => "image2.jpeg"
  ]
]
```

You can use `addWidget` to add one widget or `addWidgets` to add array of widgets.
