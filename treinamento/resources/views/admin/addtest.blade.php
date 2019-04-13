@extends('admin.administrator.modal')
@extends('admin.administrator.table')
@extends('admin.administrator.register')
@extends('admin.administrator.administratormenu')
@extends('templates.struct')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css')}}">
@endsection

@section('title')
    Teste
@endsection

@section('body')
    @section('tabletitle')
      <th scope="col">Nome</th>
      <th scope="col">Árae</th>
      <th scope="col">Cargo</th>
    @endsection

    @section('tablebody')
      <td>Teste1</td>
      <td>Área1</td>
      <td>Cargo1</td>
    @endsection
    @section('modalregister')
        <form action="#" method="POST">
                <div class="form-group">
                        <!--Informação do teste-->
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="desc">Descrição</label>
                            <input type="text" class="form-control" id="desc" name="des">
                        </div>
                    </div><br>
                        <!--Teste questão 1-->
                    <div class="row">
                        <div class="col">
                            <label for="ques1">Questão 1</label>
                            <input type="text" class="form-control" id="ques1" name="q1">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op1" name="o1">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op2" name="o2">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op3" name="o3">
                        </div>
                    </div>
                        <!--Teste questão 2-->
                    <div class="row">
                        <div class="col">
                            <label for="ques2">Questão 2</label>
                            <input type="text" class="form-control" id="ques2" name="q2">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op12" name="o12">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op22" name="o22">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op32" name="o32">
                        </div>
                    </div>

                        <!--Teste questão 3-->
                    <div class="row">
                        <div class="col">
                            <label for="ques3">Questão 3</label>
                            <input type="text" class="form-control" id="ques3" name="q3">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op13" name="o13">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op23" name="o23">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op33" name="o33">
                        </div>
                    </div>
                        <!--Teste questão 4-->
                    <div class="row">
                        <div class="col">
                            <label for="ques4">Questão 4</label>
                            <input type="text" class="form-control" id="ques4" name="q4">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op14" name="o14">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op24" name="o24">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op34" name="o34">
                        </div>
                    </div>
                        <!--Teste questão 5-->
                    <div class="row">
                        <div class="col">
                            <label for="ques5">Questão 5</label>
                            <input type="text" class="form-control" id="ques5" name="q5">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op15" name="o15">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op25" name="o25">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op35" name="o35">
                        </div>
                    </div>
                        <!--Teste questão 6-->
                    <div class="row">
                        <div class="col">
                            <label for="ques6">Questão 6</label>
                            <input type="text" class="form-control" id="ques6" name="q6">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op16" name="o16">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op26" name="o26">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op36" name="o36">
                        </div>
                    </div>
                        <!--Teste questão 7-->
                    <div class="row">
                        <div class="col">
                            <label for="ques7">Questão 7</label>
                            <input type="text" class="form-control" id="ques7" name="q7">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op17" name="o17">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op27" name="o27">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op37" name="o37">
                        </div>
                    </div>
                        <!--Teste questão 8-->
                    <div class="row">
                        <div class="col">
                            <label for="ques8">Questão 8</label>
                            <input type="text" class="form-control" id="ques8" name="q8">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op18" name="o18">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op28" name="o28">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op38" name="o38">
                        </div>
                    </div>
                        <!--Teste questão 9-->
                    <div class="row">
                        <div class="col">
                            <label for="ques9">Questão 9</label>
                            <input type="text" class="form-control" id="ques9" name="q9">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op19" name="o19">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op29" name="o29">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op39" name="o39">
                        </div>
                    </div>
                        <!--Teste questão 10-->
                    <div class="row">
                        <div class="col">
                            <label for="ques10">Questão 10</label>
                            <input type="text" class="form-control" id="ques10" name="q10">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op110" name="o110">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op210" name="o210">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op310" name="o310">
                        </div>
                    </div>
                        <!--Teste questão 11-->
                    <div class="row">
                        <div class="col">
                            <label for="ques11">Questão 11</label>
                            <input type="text" class="form-control" id="ques11" name="q11">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op111" name="o111">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op211" name="o211">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op311" name="o311">
                        </div>
                    </div>
                        <!--Teste questão 12-->
                    <div class="row">
                        <div class="col">
                            <label for="ques12">Questão 12</label>
                            <input type="text" class="form-control" id="ques12" name="q12">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op112" name="o112">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op212" name="o212">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op312" name="o312">
                        </div>
                    </div>
                        <!--Teste questão 13-->
                    <div class="row">
                        <div class="col">
                            <label for="ques13">Questão 13</label>
                            <input type="text" class="form-control" id="ques13" name="q13">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op113" name="o113">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op213" name="o213">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op313" name="o313">
                        </div>
                    </div>
                        <!--Teste questão 14-->
                    <div class="row">
                        <div class="col">
                            <label for="ques14">Questão 14</label>
                            <input type="text" class="form-control" id="ques14" name="q14">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op114" name="o114">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op214" name="o214">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op314" name="o314">
                        </div>
                    </div>
                        <!--Teste questão 15-->
                    <div class="row">
                        <div class="col">
                            <label for="ques15">Questão 15</label>
                            <input type="text" class="form-control" id="ques15" name="q15">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op115" name="o115">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op215" name="o215">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op315" name="o315">
                        </div>
                    </div>
                        <!--Teste questão 16-->
                    <div class="row">
                        <div class="col">
                            <label for="ques16">Questão 16</label>
                            <input type="text" class="form-control" id="ques16" name="q16">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op116" name="o116">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op216" name="o216">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op316" name="o316">
                        </div>
                    </div>
                        <!--Teste questão 17-->
                    <div class="row">
                        <div class="col">
                            <label for="ques17">Questão 17</label>
                            <input type="text" class="form-control" id="ques17" name="q17">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op117" name="o117">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op217" name="o217">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op317" name="o317">
                        </div>
                    </div>
                        <!--Teste questão 18-->
                    <div class="row">
                        <div class="col">
                            <label for="ques18">Questão 18</label>
                            <input type="text" class="form-control" id="ques18" name="q8">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op118" name="o118">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op218" name="o218">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op318" name="o318">
                        </div>
                    </div>
                        <!--Teste questão 19-->
                    <div class="row">
                        <div class="col">
                            <label for="ques19">Questão 19</label>
                            <input type="text" class="form-control" id="ques19" name="q19">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op119" name="o119">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op219" name="o219">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op319" name="o319">
                        </div>
                    </div>
                        <!--Teste questão 20-->
                    <div class="row">
                        <div class="col">
                            <label for="ques20">Questão 20</label>
                            <input type="text" class="form-control" id="ques20" name="q20">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 1</label>
                            <input type="text" class="form-control" id="op120" name="o120">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 2</label>
                            <input type="text" class="form-control" id="op220" name="o220">
                        </div>
                        <div class="col">
                            <label for="res1">Opção 3</label>
                            <input type="text" class="form-control" id="op320" name="o320">
                        </div>
                    </div>
        </form>
    @endsection
@section('modalvisualization')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" value="" disabled>
    </div>
    <div class="row">
        <div class="col">
            <label for="desc">Descrição</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div><br>
        <!--Teste questão 1-->
    <div class="row">
        <div class="col">
            <label for="ques1">Questão 1</label>
            <input type="text" class="form-control" value="" disabled>                                          
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 2-->
    <div class="row">
        <div class="col">
            <label for="ques2">Questão 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>

        <!--Teste questão 3-->
    <div class="row">
        <div class="col">
            <label for="ques3">Questão 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 4-->
    <div class="row">
        <div class="col">
            <label for="ques4">Questão 4</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 5-->
    <div class="row">
        <div class="col">
            <label for="ques5">Questão 5</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 6-->
    <div class="row">
        <div class="col">
            <label for="ques6">Questão 6</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 7-->
    <div class="row">
        <div class="col">
            <label for="ques7">Questão 7</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 8-->
    <div class="row">
        <div class="col">
            <label for="ques8">Questão 8</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 9-->
    <div class="row">
        <div class="col">
            <label for="ques9">Questão 9</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 10-->
    <div class="row">
        <div class="col">
            <label for="ques10">Questão 10</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 11-->
    <div class="row">
        <div class="col">
            <label for="ques11">Questão 11</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 12-->
    <div class="row">
        <div class="col">
            <label for="ques12">Questão 12</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 13-->
    <div class="row">
        <div class="col">
            <label for="ques13">Questão 13</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 14-->
    <div class="row">
        <div class="col">
            <label for="ques14">Questão 14</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 15-->
    <div class="row">
        <div class="col">
            <label for="ques15">Questão 15</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 16-->
    <div class="row">
        <div class="col">
            <label for="ques16">Questão 16</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 17-->
    <div class="row">
        <div class="col">
            <label for="ques17">Questão 17</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 18-->
    <div class="row">
        <div class="col">
            <label for="ques18">Questão 18</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 19-->
    <div class="row">
        <div class="col">
            <label for="ques19">Questão 19</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
        <!--Teste questão 20-->
    <div class="row">
        <div class="col">
            <label for="ques20">Questão 20</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 1</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 2</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
        <div class="col">
            <label for="res1">Opção 3</label>
            <input type="text" class="form-control" value="" disabled>
        </div>
    </div>
@endsection
@section('modalchange')
<form action="#" method="POST">
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="aname" name="anome">
</div>
<div class="row">
    <div class="col">
        <label for="desc">Descrição</label>
        <input type="text" class="form-control" id="adesc" name="ades">
    </div>
</div><br>
<div class="row">
    <div class="row">
    <div class="col">
        <label for="ques1">Questão 1</label>
        <input type="text" class="form-control" id="aques1" name="aq1">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop1" name="ao1">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop2" name="ao2">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop3" name="ao3">
    </div>
</div>
    <!--Teste questão 2-->
<div class="row">
    <div class="col">
        <label for="ques2">Questão 2</label>
        <input type="text" class="form-control" id="aques2" name="aq2">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop12" name="ao12">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop22" name="ao22">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop32" name="ao32">
    </div>
</div>

    <!--Teste questão 3-->
<div class="row">
    <div class="col">
        <label for="ques3">Questão 3</label>
        <input type="text" class="form-control" id="aques3" name="aq3">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop13" name="ao13">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop23" name="ao23">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop33" name="ao33">
    </div>
</div>
    <!--Teste questão 4-->
<div class="row">
    <div class="col">
        <label for="ques4">Questão 4</label>
        <input type="text" class="form-control" id="aques4" name="aq4">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop14" name="ao14">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop24" name="ao24">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop34" name="ao34">
    </div>
</div>
    <!--Teste questão 5-->
<div class="row">
    <div class="col">
        <label for="ques5">Questão 5</label>
        <input type="text" class="form-control" id="aques5" name="aq5">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop15" name="ao15">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop25" name="ao25">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop35" name="ao35">
    </div>
</div>
    <!--Teste questão 6-->
<div class="row">
    <div class="col">
        <label for="ques6">Questão 6</label>
        <input type="text" class="form-control" id="aques6" name="aq6">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop16" name="ao16">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop26" name="ao26">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop36" name="ao36">
    </div>
</div>
    <!--Teste questão 7-->
<div class="row">
    <div class="col">
        <label for="ques7">Questão 7</label>
        <input type="text" class="form-control" id="aques7" name="aq7">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop17" name="ao17">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop27" name="ao27">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop37" name="ao37">
    </div>
</div>
    <!--Teste questão 8-->
<div class="row">
    <div class="col">
        <label for="ques8">Questão 8</label>
        <input type="text" class="form-control" id="aques8" name="aq8">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop18" name="ao18">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop28" name="ao28">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop38" name="ao38">
    </div>
</div>
    <!--Teste questão 9-->
<div class="row">
    <div class="col">
        <label for="ques9">Questão 9</label>
        <input type="text" class="form-control" id="aques9" name="aq9">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop19" name="ao19">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop29" name="ao29">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop39" name="ao39">
    </div>
</div>
    <!--Teste questão 10-->
<div class="row">
    <div class="col">
        <label for="ques10">Questão 10</label>
        <input type="text" class="form-control" id="aques10" name="aq10">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop110" name="ao110">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop210" name="ao210">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop310" name="ao310">
    </div>
</div>
    <!--Teste questão 11-->
<div class="row">
    <div class="col">
        <label for="ques11">Questão 11</label>
        <input type="text" class="form-control" id="aques11" name="aq11">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop111" name="ao111">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop211" name="ao211">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop311" name="ao311">
    </div>
</div>
    <!--Teste questão 12-->
<div class="row">
    <div class="col">
        <label for="ques12">Questão 12</label>
        <input type="text" class="form-control" id="aques12" name="aq12">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop112" name="ao112">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop212" name="ao212">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop312" name="ao312">
    </div>
</div>
    <!--Teste questão 13-->
<div class="row">
    <div class="col">
        <label for="ques13">Questão 13</label>
        <input type="text" class="form-control" id="aques13" name="aq13">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop113" name="ao113">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop213" name="ao213">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop313" name="ao313">
    </div>
</div>
    <!--Teste questão 14-->
<div class="row">
    <div class="col">
        <label for="ques14">Questão 14</label>
        <input type="text" class="form-control" id="aques14" name="aq14">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop114" name="ao114">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop214" name="ao214">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop314" name="ao314">
    </div>
</div>
    <!--Teste questão 15-->
<div class="row">
    <div class="col">
        <label for="ques15">Questão 15</label>
        <input type="text" class="form-control" id="aques15" name="aq15">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop115" name="ao115">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop215" name="ao215">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop315" name="ao315">
    </div>
</div>
    <!--Teste questão 16-->
<div class="row">
    <div class="col">
        <label for="ques16">Questão 16</label>
        <input type="text" class="form-control" id="aques16" name="aq16">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop116" name="ao116">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop216" name="ao216">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop316" name="ao316">
    </div>
</div>
    <!--Teste questão 17-->
<div class="row">
    <div class="col">
        <label for="ques17">Questão 17</label>
        <input type="text" class="form-control" id="aques17" name="aq17">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop117" name="ao117">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop217" name="ao217">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop317" name="ao317">
    </div>
</div>
    <!--Teste questão 18-->
<div class="row">
    <div class="col">
        <label for="ques18">Questão 18</label>
        <input type="text" class="form-control" id="aques18" name="aq8">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop118" name="ao118">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop218" name="ao218">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop318" name="ao318">
    </div>
</div>
    <!--Teste questão 19-->
<div class="row">
    <div class="col">
        <label for="ques19">Questão 19</label>
        <input type="text" class="form-control" id="aques19" name="aq19">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop119" name="ao119">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop219" name="ao219">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop319" name="ao319">
    </div>
</div>
    <!--Teste questão 20-->
<div class="row">
    <div class="col">
        <label for="ques20">Questão 20</label>
        <input type="text" class="form-control" id="aques20" name="aq20">
    </div>
    <div class="col">
        <label for="res1">Opção 1</label>
        <input type="text" class="form-control" id="aop120" name="ao120">
    </div>
    <div class="col">
        <label for="res1">Opção 2</label>
        <input type="text" class="form-control" id="aop220" name="ao220">
    </div>
    <div class="col">
        <label for="res1">Opção 3</label>
        <input type="text" class="form-control" id="aop320" name="ao320">
    </div>
</div>
</form>
@endsection
<form method="POST" action="">
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content" style="margin-top: 200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="excluir">Excluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <h2 class="lead text-center" style="font-size: 15pt; font-weight: bold;">Tem certerza que deseja excluir?</h2>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-md" class="btn btn-success">Sim</button>
                      <button style="color: white;" class="btn btn-warning btn-md" class="btn btn-success">Não</button>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </form>
@endsection