@if(locale_count() > 1)
    <ul class="content-tabs-bar content-tabs-bar-sub">
        @foreach(config('translatable.locales') as $localeTab)
            @if($translation = $media->translateOrNew($localeTab))
                <li>
                    @if($translation->locale === $locale)
                        <span class="content-tab-flap active">{{ uppercase($translation->locale) }}</span>
                    @else
                        {!! link_to_route('reactor.documents.edit', uppercase($translation->locale), ['id' => $media->getKey(), 'locale' => $localeTab], ['class' => 'content-tab-flap']) !!}
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
@endif