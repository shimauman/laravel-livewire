# Laravel Livewire
Use Livewire v2.x according to these below references.

## Reference
- [Livewire official docs : Installation](https://laravel-livewire.com/docs/2.x/installation)
- [Laravel readouble : Livewire 2.x クイックスタート](https://readouble.com/livewire/2.x/ja/quickstart.html)
- [REFFECT : Laravel8でLivewireの使い方を学ぶ](https://reffect.co.jp/laravel/laravel-livewire)

## Outputs
[![Image from Gyazo](https://i.gyazo.com/c9a36e1cf2823cae1a87d873eea05129.gif)](https://gyazo.com/c9a36e1cf2823cae1a87d873eea05129)

[![Image from Gyazo](https://i.gyazo.com/4a62a0f6d4894f560da70ee8c13d7077.gif)](https://gyazo.com/4a62a0f6d4894f560da70ee8c13d7077)

[![Image from Gyazo](https://i.gyazo.com/a2bbe7c4494e40cf2f20f34400ab730a.gif)](https://gyazo.com/a2bbe7c4494e40cf2f20f34400ab730a)

## Livewire Usage

### Version
- Livewire v2.x

### Install
```
$ composer require livewire/livewire
```

### Make Component
```
$ php artisan make:livewire counter
```
We can get
- `app/Http/Livewire/Counter.php`
- `resouces/views/livewire/counter.blade.php`

```php
namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }
}
```

### Render Component
```html
<head>
    ...
    @livewireStyles
</head>
<body>
    <livewire:counter />

    ...

    @livewireScripts
</body>
</html>
```
