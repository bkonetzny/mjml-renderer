# MjmlRenderer

Render [MJML](https://mjml.io/) markup in PHP.

## Example
```php
require 'vendor/autoload.php';

$input = '<mjml>
  <mj-body>
    <mj-section>
      <mj-column>
        <mj-image width="100" src="/assets/img/logo-small.png"></mj-image>
        <mj-divider border-color="#F45E43"></mj-divider>
        <mj-text font-size="20px" color="#F45E43" font-family="helvetica">Hello World</mj-text>
      </mj-column>
    </mj-section>
  </mj-body>
</mjml>';

$mjml = new \bkonetzny\MjmlRenderer\Renderer();

echo $mjml->render($input);
```
