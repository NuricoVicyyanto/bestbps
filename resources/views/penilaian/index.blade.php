    <!-- resources/views/evaluation.blade.php -->

    @extends('layouts.index')

    @section('content')
        <div class="container mt-5 mb-5">
            <h1 class="mb-4 mt-4" style="text-align: center; color: #007bff;">Form Penilaian Pegawai 1</h1>
            <div class="row">
                <div class="col-md-8">

                    <div class="card p-4 mb-4" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #ffffff;">
                        <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                            <h4 style="text-align: center; margin-bottom: 0;">Form Penilaian</h4>
                        </div>
                        <div class="card-body">
                            <form id="evaluationForm">
                                <div class="form-group">
                                    <label for="selectPerson" style="font-weight: bold;">Pilih Orang yang Dinilai:</label>
                                    <select class="form-control" id="selectPerson" name="selectPerson">
                                        <option value="abdul">Abdul</option>
                                        <option value="putin">Putin</option>
                                        <option value="macron">Macron</option>
                                        <option value="trump">Trump</option>
                                        <option value="charles">Charles</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="serviceOriented" style="font-weight: bold;">Berorientasi Pelayanan: Komitmen
                                        memberikan pelayanan prima demi kepuasan masyarakat</label>
                                    <input type="range" class="form-control-range" id="serviceOriented"
                                        name="serviceOriented" min="1" max="10" value="5"
                                        style="width: 100%;">
                                    <span id="serviceOrientedValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="accountable" style="font-weight: bold;">Akuntabel: Bertanggung jawab atas
                                        kepercayaan yang diberikan</label>
                                    <input type="range" class="form-control-range" id="accountable" name="accountable"
                                        min="1" max="10" value="5" style="width: 100%;">
                                    <span id="accountableValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="competent" style="font-weight: bold;">Kompeten: Terus belajar dan
                                        mengembangkan
                                        kapabilitas</label>
                                    <input type="range" class="form-control-range" id="competent" name="competent"
                                        min="1" max="10" value="5" style="width: 100%;">
                                    <span id="competentValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="harmonious" style="font-weight: bold;">Harmonis: Saling peduli dan
                                        menghargai
                                        perbedaan</label>
                                    <input type="range" class="form-control-range" id="harmonious" name="harmonious"
                                        min="1" max="10" value="5" style="width: 100%;">
                                    <span id="harmoniousValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="loyal" style="font-weight: bold;">Loyal: Berdedikasi dan mengutamakan
                                        kepentingan Bangsa dan Negara</label>
                                    <input type="range" class="form-control-range" id="loyal" name="loyal"
                                        min="1" max="10" value="5" style="width: 100%;">
                                    <span id="loyalValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="adaptive" style="font-weight: bold;">Adaptif: Terus berinovasi dan antusias
                                        dalam menggerakkan serta menghadapi perubahan</label>
                                    <input type="range" class="form-control-range" id="adaptive" name="adaptive"
                                        min="1" max="10" value="5" style="width: 100%;">
                                    <span id="adaptiveValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="collaborative" style="font-weight: bold;">Kolaboratif: Membangun kerja
                                        sama
                                        yang sinergis</label>
                                    <input type="range" class="form-control-range" id="collaborative"
                                        name="collaborative" min="1" max="10" value="5"
                                        style="width: 100%;">
                                    <span id="collaborativeValue" style="font-weight: bold; margin-left: 10px;">5</span>
                                </div>
                                <div class="form-group">
                                    <label for="nilaiKJK" style="font-weight: bold;">Nilai KJK:</label>
                                    <select class="form-control" id="nilaiKJK" name="nilaiKJK" style="width: 100%;"
                                        required>
                                        <option value="30">0</option>
                                        <option value="25">1 - 5</option>
                                        <option value="20">6 - 10</option>
                                        <option value="15">11 - 15</option>
                                        <option value="10">16 - 30</option>
                                        <option value="5">31 - 120</option>
                                        <option value="0">121 - …</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rataRataHasilKerja" style="font-weight: bold;">Rata-rata Hasil
                                        Kerja:</label>
                                    <select class="form-control" id="rataRataHasilKerja" name="rataRataHasilKerja"
                                        style="width: 100%;" required>
                                        <option value="30">98 - 100</option>
                                        <option value="25">96 - 97</option>
                                        <option value="20">94 - 95</option>
                                        <option value="15">92 - 93</option>
                                        <option value="10">90 - 91</option>
                                        <option value="5">&lt; 90</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inovasi" style="font-weight: bold;">Inovasi:</label>
                                    <select class="form-control" id="inovasi" name="inovasi" style="width: 100%;"
                                        required>
                                        <option value="">Pilih nilai inovasi...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary" onclick="submitEvaluation()"
                                    style="margin-top: 10px;">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="result card mt-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #ffffff;">
                        <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                            <h4 style="text-align: center; margin-bottom: 0;">Hasil Penilaian</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="color: #007bff;">Hasil Penilaian:</h3>
                            <ul id="resultsList" class="list-group mb-3">
                                <!-- Hasil akan ditampilkan di sini -->
                            </ul>
                            <h4 style="font-weight: bold;">Total Nilai: <span id="totalScore">0</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ranking card mt-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #ffffff;">
                        <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                            <h4 style="text-align: center; margin-bottom: 0;">Ranking</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="color: #007bff;">Ranking:</h3>
                            <ul id="rankingList" class="list-group">
                                <!-- Ranking akan ditampilkan di sini -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let evaluations = {
                abdul: {
                    total: 0,
                    scores: {}
                },
                putin: {
                    total: 0,
                    scores: {}
                },
                macron: {
                    total: 0,
                    scores: {}
                },
                trump: {
                    total: 0,
                    scores: {}
                },
                charles: {
                    total: 0,
                    scores: {}
                },
            };

            function updateValue(inputId, spanId) {
                document.getElementById(inputId).addEventListener("input", function() {
                    document.getElementById(spanId).innerText = this.value;
                });
            }

            updateValue("serviceOriented", "serviceOrientedValue");
            updateValue("accountable", "accountableValue");
            updateValue("competent", "competentValue");
            updateValue("harmonious", "harmoniousValue");
            updateValue("loyal", "loyalValue");
            updateValue("adaptive", "adaptiveValue");
            updateValue("collaborative", "collaborativeValue");

            function submitEvaluation() {
                const person = document.getElementById("selectPerson").value;
                const serviceOriented = parseInt(document.getElementById("serviceOriented").value);
                const accountable = parseInt(document.getElementById("accountable").value);
                const competent = parseInt(document.getElementById("competent").value);
                const harmonious = parseInt(document.getElementById("harmonious").value);
                const loyal = parseInt(document.getElementById("loyal").value);
                const adaptive = parseInt(document.getElementById("adaptive").value);
                const collaborative = parseInt(document.getElementById("collaborative").value);
                const nilaiKJK = parseInt(document.getElementById("nilaiKJK").value);
                const rataRataHasilKerja = parseInt(document.getElementById("rataRataHasilKerja").value);
                const inovasi = parseInt(document.getElementById("inovasi").value);

                const totalScore = (
                    ((serviceOriented + accountable + competent + harmonious + loyal + adaptive + collaborative) / 70) * 30
                ) + nilaiKJK + rataRataHasilKerja + inovasi;

                evaluations[person].total = totalScore;
                evaluations[person].scores = {
                    // bobot 30%
                    serviceOriented,
                    accountable,
                    competent,
                    harmonious,
                    loyal,
                    adaptive,
                    collaborative,


                    // Rentang poin yang telah ditentukan untuk skala penilaian ini sangat bervariasi, dimulai dari 30 poin untuk skor terendah hingga 0 poin untuk skor tertinggi. Rentang poin dari 1 hingga 5 memberikan 25 poin, sementara rentang 6 hingga 10 memberikan 20 poin. Rentang 11 hingga 15 memberikan 15 poin, dan rentang 16 hingga 30 memberikan 10 poin. Rentang yang lebih tinggi, dari 31 hingga 120, memberikan 5 poin, sedangkan skor di atas 120 diberi nilai 0 poin. Sistem penilaian ini memberikan pengakuan yang lebih tinggi untuk skor yang lebih rendah, dengan nilai-nilai yang lebih tinggi mendapat poin yang lebih rendah dalam rentang poin yang telah ditentukan.
                    nilaiKJK,

                    // bobot 30 persen dengan skala nilai 1-100
                    rataRataHasilKerja,

                    // bobot 10% dengan skala nilai 1-10
                    inovasi
                };

                disableSelectedPerson(person);
                displayResults();
                displayRanking();
            }

            function disableSelectedPerson(person) {
                const selectPerson = document.getElementById("selectPerson");
                for (let i = 0; i < selectPerson.options.length; i++) {
                    if (selectPerson.options[i].value === person) {
                        selectPerson.options[i].disabled = true;
                        selectPerson.selectedIndex = -1; // Deselect the current selection
                        break;
                    }
                }
            }

            function displayResults() {
                const resultsList = document.getElementById("resultsList");
                resultsList.innerHTML = '';

                Object.keys(evaluations).forEach(person => {
                    if (evaluations[person].total > 0) {
                        resultsList.innerHTML += `
                        <li class="list-group-item">
                            ${person.charAt(0).toUpperCase() + person.slice(1)}: ${evaluations[person].total}
                            <ul>
                                <li>Berorientasi Pelayanan: ${evaluations[person].scores.serviceOriented}</li>
                                <li>Akuntabel: ${evaluations[person].scores.accountable}</li>
                                <li>Kompeten: ${evaluations[person].scores.competent}</li>
                                <li>Harmonis: ${evaluations[person].scores.harmonious}</li>
                                <li>Loyal: ${evaluations[person].scores.loyal}</li>
                                <li>Adaptif: ${evaluations[person].scores.adaptive}</li>
                                <li>Kolaboratif: ${evaluations[person].scores.collaborative}</li>
                                <li>Nilai KJK: ${evaluations[person].scores.nilaiKJK}</li>
                                <li>Rata-rata Hasil Kerja: ${evaluations[person].scores.rataRataHasilKerja}</li>
                                <li>Inovasi: ${evaluations[person].scores.inovasi}</li>
                            </ul>
                        </li>
                    `;
                    }
                });
            }

            function displayRanking() {
                const rankingList = document.getElementById("rankingList");
                rankingList.innerHTML = '';

                const rankedEvaluations = Object.keys(evaluations)
                    .map(person => ({
                        person,
                        total: evaluations[person].total
                    }))
                    .sort((a, b) => b.total - a.total);

                rankedEvaluations.forEach((evaluation, index) => {
                    if (evaluation.total > 0) {
                        rankingList.innerHTML += `
                        <li class="list-group-item">
                            Rank ${index + 1}: ${evaluation.person.charAt(0).toUpperCase() + evaluation.person.slice(1)} - ${evaluation.total}
                        </li>
                    `;
                    }
                });
            }
        </script>
    @endsection
