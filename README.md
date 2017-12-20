# hanap
Laravel package API Result filtering, sorting &amp; searching.

## Installation

Require this package with composer.

```shell
composer require mannysoft/hanap
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

## Usage

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Mannysoft\Hanap\FilterTrait;
use Mannysoft\Hanap\FilterScope;

class Team extends Model
{
	use FilterTrait;

    protected $fillable = ['name'];

    protected $filters = ['status']; // field to filter ?status=active

    protected $sorts = ['name', 'status']; // fields to ?sort=name ?sort=-name ?sort=name,-status

    protected $searchableColumns = ['name']; // fields to search


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new FilterScope);
    }
}
```
