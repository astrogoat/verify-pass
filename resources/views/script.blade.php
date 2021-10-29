@if(Astrogoat\VerifyPass\Settings\VerifyPassSettings::isEnabled())
    <script src="https://cdn.verifypass.com/seller/launcher.js?shop={{ Str::after(settings(Astrogoat\VerifyPass\Settings\VerifyPassSettings::class, 'shopify_store_url'), '//') }}"></script>
@endif
