{{-- Reusable FAQPage schema. Include with: @include('partials.schema-faq', ['faqs' => $page['faqs']]) --}}
@if(!empty($faqs))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $faq)
        {
            "@type": "Question",
            "name": {!! json_encode($faq['q']) !!},
            "acceptedAnswer": {
                "@type": "Answer",
                "text": {!! json_encode($faq['a']) !!}
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
