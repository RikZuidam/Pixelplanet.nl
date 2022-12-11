<!-- Test Knop -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Instellingen -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px);">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #F44336;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #fff; font-family: RobotoTitle;"><i class="fa-solid fa-life-ring"></i> RAPPORTEREN</h1>
            </div>
            <div class="modal-body" style="color: #fff; font-family: RobotoText;">
                <div class="alert alert-danger" role="alert">
                    <i class="fa-solid fa-chevron-right"></i> Rapporteer alleen bij een overtreding van onze Spelregels.<br>
                    <i class="fa-solid fa-chevron-right"></i> Geef een duidelijke uitleg van de situatie Ã©n overtreding.<br>
                    <i class="fa-solid fa-chevron-right"></i> Maak geen misbruik van het rapporteer-systeem.
                </div>

                <form class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" placeholder="Username" value="">
                    <label for="floatingInputValue" style="color: grey;">Gebruikersnaam</label>
                </form>
                <div style="padding: 5px;"></div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecteer de overtreding</option>
                    <option value="1">Pesterij, uitschelden en/of discriminatie</option>
                    <option value="2">Delen van (pornografische)beelden en/of uitingen</option>
                    <option value="3">Delen van (jouw) persoonlijke gegevens</option>
                    <option value="4">Maken van reclame voor andere websites/apps</option>
                    <option value="5">Vraagt naar andere contactmogelijkheden</option>
                    <option value="6">(Gedraagt zich als een) pedofiel</option>
                </select>
                <div style="padding: 5px;"></div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Beschrijf de situatie" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" style="color: grey;">Beschrijf de situatie</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Ik ga akkoord met het feit dat een Moderator mijn chatgeschiedenis kan inzien (m.b.t. deze speler).
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" style="width: 100%; height: 50px; background-color: #D2190B; border-color: #931107; font-family: RobotoTitle;">Moderator alarmeren</button>
            </div>
        </div>
    </div>
</div>