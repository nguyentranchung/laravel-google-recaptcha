# Tích hợp Google reCAPTCHA v2 vào dự án Laravel

## Cài đặt

```bash
composer require nguyentranchung/laravel-google-recaptcha
```

## In view

```php
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha" data-sitekey="{{ config('google-recaptcha.key') }}"></div>
```

## In controller

```php

class PostController extends Controller
{
    public function store(Request $request)
    {
        $datas = $request->validate([
            // ...
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }
}
// hoặc ở trong FormRequest
class PostStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // ...
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
```
