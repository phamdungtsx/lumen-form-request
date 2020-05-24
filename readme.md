# lumen-form-request
Laravel Form Request adaptation for Lumen framework

### How to install

**Lumen 5.6 +**

```
composer require phamdungtsx/lumen-form-request
```

* Add the service provider in bootstrap/app.php

```
$app->register(Phamdungtsx\Providers\FormRequestServiceProvider::class);
```

Next step is create your FormRequest and extends from Phamdungtsx/Requests/FormRequest
### Example

```
<?php

namespace App\Http\Requests;

use Phamdungtsx\Requests\FormRequest;

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

Enjoy!