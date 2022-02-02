<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<footer class="d-flex flex-row justify-content-center align-items-center">

    <span class="mx-4">©Eder Queiroz</span>
    <span class="mx-4">Data: <?php
        $tz = new DateTimeZone('America/Sao_Paulo');
        $data = new DateTime(null, $tz);
        $dataformat = strftime('%d/%m/%Y', $data -> getTimestamp());

        echo $dataformat;
    ?></span>

</footer>