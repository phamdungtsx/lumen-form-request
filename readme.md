Lumen Form Request
==========

## Description

A package that helps developer to segregate the validation logic from controller to a separate dedicated class. Lumen doesn't have any `FormRequest` class like Laravel. This will let you do that.


### Installation

```
composer require phamdungtsx/lumen-form-request
```

* Add the service provider in `bootstrap/app.php`

```
$app->register(Phamdungtsx\Form\FormRequestServiceProvider::class);
```

Next step is create your FormRequest and extends from `Phamdungtsx\Form\FormRequest`

### Example

```php
<?php

namespace App\Http\Requests;

use Phamdungtsx\Form\FormRequest;

class StoreDeviceRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'mac_address' => 'required|unique:devices,mac_address'
		];
	}
}
```
