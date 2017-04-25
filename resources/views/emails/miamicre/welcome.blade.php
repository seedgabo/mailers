@component('mail::message')
Ola, {{ $name }}
Aqui esta o seu ebook  sobre  imóveis comercias nos estados unidos totalmente grátis.

@component('mail::panel')
# [MIAMI CRE INVESTMENTS](http://miamicreinvestments.com/)
@endcomponent

@component('mail::button', ['url' => 'http://miamicreinvestments.com/wp-content/uploads/2016/06/CREEbook-Final.pdf'])
 Baixe Aqui
@endcomponent

Um grande abraço
Guilherme Aguiar
@endcomponent
