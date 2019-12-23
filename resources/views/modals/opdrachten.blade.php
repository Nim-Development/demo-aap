<!-- CREATE Opdracht -->
<div class="modal fade" id="opdrachtCreate" tabindex="-1" role="dialog" aria-labelledby="opdrachtCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="opdrachtCreateLabel">Opdracht Toevoegen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('opdrachten.store') }}" method="post">
                @csrf
                <div class="form-group row">
                  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Naam</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" name="naam" placeholder="Opdracht naam">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Omschrijving</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="omschrijving" placeholder="Opdracht omschrijving">
                  </div>
                </div>

                {{-- Hidden opdracht values --}}
                <input type="hidden" name="cateraar_id" value="{{ $cateraar->id }}">
                <input type="hidden" name="oplever_datum" value="{{ now() }}">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
            <button type="submit" class="btn btn-primary">Aanmaken</button>
        </div>
    </form>
        </div>
    </div>
</div>


<!-- UPDATE Opdracht -->
{{-- <div class="modal fade" id="opdrachtUpdate" tabindex="-1" role="dialog" aria-labelledby="opdrachtUpdateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="opdrachtUpdateLabel">Opdracht Aanpassen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div> --}}