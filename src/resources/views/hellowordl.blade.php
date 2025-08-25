<h1>{{ 'Hello World!' }}</h1>
<p>{{ 'Bem-vindo ao Laravel!' }}</p>
<a href="/">voltar para home do laravel</a>

@if(1>4) <!-- Códigos em diretivas do blade -->
 <p> a condicao e true</p>
@else
 <p> a condicao e false</p>
@endif

<p>{{$nome}}</p>
<p>{{$idade}}</p>
<p> o nome dele e {{$nome}} e tem {{$idade}} anos de idade e a profissao dele e {{$profissao}}</p>