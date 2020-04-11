
Confirmation d'inscription exposition {{$expo->title}}

Votre Inscription
<table class='table'>
    <tr>
        <th>Cage:</th>
        <td>type: {{$reg->cage_type}}, nombre: {{$reg->cage_quantity}} 
            @if ($reg->cage_length)
                / longueur :  {{$reg->cage_length}}
            @endif 
        </td>
    </tr>
    <tr>
        <th>A coté de:</th>
        <td>{{$reg->beside ?: "-"}}</td>
    </tr>
</table>

<h3>Les chats inscrits sont:</h3>
<table class='table'>
    <tr>
        <th>Chat</th><th>Jugement Samedi</th><th>Jugement Dimanche</th>
    </tr>
    @foreach ($cat_regs as $cat_reg)
    <tr>
        <td>{{$cat_reg->cat->name}}({{$cat_reg->cat->race}})</td>
        <td>{{$cat_reg->category_day1}}</td>
        <td>{{$cat_reg->category_day2}}</td>
    </tr>
    @endforeach
</table>

<h4>Note:</h4>
<ul>
    <li>Il n'est pas possible de modifier votre inscription depuis cette interface.</li>
    <li>Vous allez recevoir une confirmation d'inscription dès que votre inscription sera finalisée.</li>
    <li>Pour toute correction, modification, etc.. merci de prendre contact par email avec <a href='mailto:ccg@bluewin.ch'>ccg@bluewin.ch</a></li>
</ul>
