<div class="modal-body px-0">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">Commande NUM</label>
                <input class="form-control @error('num') is-invalid @enderror" id="num" name="num" type="text" value="{{ old('num', $commandes->num) }}" placeholder="Enter Commande num" />
                @error('num')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">Commande date</label>
                <input class="form-control @error('date') is-invalid @enderror" id="date" name="date" type="text" value="{{ old('date', $commandes->date) }}" placeholder="Enter Commande date" />
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div> --}}
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">Commande adresse_livraison</label>
                <input id="adresse_livraison" name="adresse_livraison" class="form-control" type="text" value="{{ old('adresse_livraison', $commandes->adresse_livraison) }}" placeholder="Enter Commande adresse_livraison" />
                @error('adresse_livraison')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="form-label" for="datetimepicker">Commande Date</label>
                <input class="form-control datetimepicker" id="date" name="date" type="text" value="{{ old('date', $commandes->date) }}" placeholder="dd/mm/yyyy hour : minute" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="modal-footer border-0 pt-6 px-0 pb-0">
    <button class="btn btn-link text-danger px-3 my-0" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
    <button class="btn btn-primary my-0" type="submit">{{ $button_label ?? 'Save' }}</button>
</div>
