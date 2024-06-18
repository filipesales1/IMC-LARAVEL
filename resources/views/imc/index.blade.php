<x-layout>


    <h1>IMC</h1>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">peso</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">altura</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>

    <label>RESULTADO</label><br>
    <label>imc: {{$resultado["imc"]}}</label><br>
    <label>Faixa: {{$resultado["faixa"]}}</label><br>
    <br><br><br>

</x-layout>