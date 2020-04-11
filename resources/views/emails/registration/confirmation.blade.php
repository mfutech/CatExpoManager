@component('mail::message')
# Confirmation d'inscription exposition {{$expo->title}}

Votre Inscription

*Cages* : {{$reg->cage_quantity}} {{$reg->cage_type or ""}}
@if($reg->cage_length)
*longueur* : {{$reg->cage_length}}
@endif


*A coté de*: {{$reg->beside or "-"}}

Les chats inscrits sont:
@component('mail::table')
| *Chat*                  | *Jugement Samedi*      | *Jugement Dimanche*     |
|:------------------------|:-----------------------|:------------------------|
@foreach ($cat_regs as $cat_reg)
|{{$cat_reg->cat->name}}({{$cat_reg->cat->race}})|{{$cat_reg->category_day1}}|{{$cat_reg->category_day2}}|
@endforeach
@endcomponent

*Note:*
   * Il n'est pas possible de modifier votre inscription depuis cette interface.
   * Vous allez recevoir une confirmation d'inscription dès que votre inscription sera finalisée.
   * Pour toute correction, modification, etc.. merci de prendre contact par email avec ccg@bluewin.ch

@endcomponent