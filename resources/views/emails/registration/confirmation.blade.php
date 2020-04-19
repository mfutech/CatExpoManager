@extends('emails.layout')

@section('header')
<h1>Confirmation d'inscription exposition {{$expo->title}}</h1>
@endsection

@section('content')
<h2>Votre Inscription</h2>

<table class="table" width="100%">
    <tr>
        <th>Nom:</th>
        <td>{{$user->firstname}} {{$user->lastname}}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <th>Adresse:</th>
        <td>{{$user->address}}<br />
            {{$user->CP_city}}<br />
            {{$user->country}}
        </td>
    </tr>
    <tr>
        <th>Tel:</th>
        <td>{{$user->phone}}</td>
    </tr>
    <tr>
        <th>Club:</th>
        <td>{{$user->affiliation}}</td>
    </tr>
    <tr>
        <th>Cages:</th>
        <td>{{$reg->cage_quantity}} {{$reg->cage_type}}
            @if($reg->cage_length)
            <br />longueur : {{$reg->cage_length}}
            @endif
        </td>
    </tr>
    <tr>
        <th>A coté de:</th>
        <td>{{$reg->beside}}</td>
    </tr>
</table>

<h2>Les chats inscrits sont ({{$cat_regs->count()}}):</h2>

<table class="table" width="100%">
    <tr>
        <th width="50%">Chat</th>
        <th width="25%">classe</th>
        <th width="25%"></th>
    </tr>
    @foreach ($cat_regs as $cat_reg)
    <tr>
        <td>{{$cat_reg->cat->name}}({{$cat_reg->cat->race}})</td>
        <td>{{$cat_reg->category_day1}}</td>
        <td>{{__("judgement.".$cat_reg->judgement_type)}}
            {{$cat_reg->worldcup ? " Participe Worldcup" : ""}}
        </td>
    </tr>
    @endforeach
</table>

<h4>Note:</h4>
<ul>
    <li>Il n'est pas possible de modifier votre inscription depuis cette interface.</li>
    <li>Vous allez recevoir une confirmation d'inscription dès que votre inscription sera finalisée.</li>
    <li>Pour toute correction, modification, etc.. merci de prendre contact par email avec ccg@bluewin.ch</li>
</ul>
@endsection
