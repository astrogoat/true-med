@if(app(Astrogoat\TrueMed\Settings\TrueMedSettings::class)->enabled)
    <div id="truemed-instructions" icon-height="18" data-public-id="{{settings(Astrogoat\Postscript\Settings\PostscriptSettings::class, 'id')}}"></div>
@endif
