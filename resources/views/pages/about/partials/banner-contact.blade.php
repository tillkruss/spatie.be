<p class="text-2xl mt-12 grid-rows gapx-16 gapy-4 | md:mt-16 md:grid-cols justify-start items-start" style="--cols: auto auto auto">
    <span>
        <a class="link link-black" href="mailto:info@spatie.be">info@spatie.be</a>
        <br>
        <a class="link link-black" href="https://twitter.com/intent/tweet?text=Dear+@spatie_be+…" target="_blank" rel="noreferrer noopener">@spatie_be</a>
        <br>
        <a class="link link-black" href="#tel">+32 3 292 56 79</a>
    </span>
    <a class="group block link link-black" href="https://goo.gl/maps/Qe39fmR5RTC2" target="_blank" rel="noreferrer noopener">
            Samberstraat 69D
            <br>
            2060 Antwerp <br>Belgium
            <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                {{ svg('icons/fas-map-marker-alt') }}
            </span>
        </span>
    </a>
    @isset($financialContacts)
        <span class="text-xs mt-2 leading-loose">
            <span class="w-8 inline-block text-grey">VAT</span> BE0809.387.596
            <br>
            {{-- IBAN nr spaced out for readability but selectable with double click. --}}
            <span class="w-8 inline-block text-grey">IBAN</span> BE66<span class=ml-1>3</span>631<span class=ml-1>2</span>787<span class=ml-1>5</span>443
            <br>
            <span class="w-8 inline-block text-grey">BIC</span> BBRUBEBB
        </span>
    @endisset
</p>
