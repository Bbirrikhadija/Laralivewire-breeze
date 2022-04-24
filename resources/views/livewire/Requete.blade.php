<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requetes') }}
        </h2>
    </x-slot>
     Q1 :  la liste des noms des agriculteurs
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question1 as $question)
            <tr>
                <th>{{$question['agr_nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
  Q2:  la liste des noms des parcelles dont la superficie est supérieure à 500
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question2 as $quest2)
            <tr>
                <th>{{$quest2["par_nom"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

    Q3:  les informations concernant les parcelles situées à Arith dont la 
    superficie est supérieure à 200 et inférieure à 500
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Lieu</th>
        </tr>
        </thead>
        <tbody>
            @foreach($question3 as $question)
            <tr>
                <th>{{$question["par_nom"]}}</th>
                <th>{{$question["emp_lieu"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    Q4:  la liste de toutes les parcelles avec le nom de leurs propriétaires
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Agr_Nom</th>
        </tr>
        </thead>
        <tbody>
            @foreach($question4 as $quest4)
            <tr>
                <th>{{$quest4["par_nom"]}}</th>
                <th>{{$quest4["agr_nom"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
   Q6: Intervention et le nom de la parcelle concernée
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Debut d'intervention:</th>
            <th scope="col">Nom de parcelle :</th>
        </tr>
        </thead>
        <tbody>
            @foreach($question6 as $quest6)
            <tr>
                <th>{{$quest6['int_debut']}}</th>
                <th>{{$quest6['par_nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
   
    Q7: 
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Debut d'intervention</th>
            <th scope="col">Nom de parcelle </th>
            <th scope="col"> Nom d'employe </th>
        </tr>
        </thead>
        <tbody>
            @foreach($question7 as $quest7)
            <tr>
                <th>{{$quest7['int_debut']}}</th>
                <th>{{$quest7['par_nom']}}</th>
                <th>{{$quest7['emp_nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    Q8:
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">les interventions</th>
    
        </tr>
        </thead>
        <tbody>
            @foreach($question8 as $quest8)
            <tr>
                <th>{{$quest8['int_debut']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    Q9:
    
    <ul>

        <li>La superficie totale des parcelles :{{$question9}} </li>

    </ul>
    Q10:
    
    <ul>

        <li><strong>Le nom de la plus grande parcelle : </strong>{{$question10}}</li>

    </ul>
    Q11:
    <ul>

        <li><strong>le nom de la plus petite parcelle :</strong> {{$question11}}</li>

    </ul>

</div>