<div class="modal-body px-0">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">Articale code</label>
                <input class="form-control @error('code') is-invalid @enderror" id="code" name="code" type="text" value="{{ old('code', $articles->code) }}" placeholder="Enter Artical code" />
                @error('code')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">Articale designation</label>
                <input class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" type="text" value="{{ old('designation', $articles->designation) }}" placeholder="Enter Artical designation" />
                @error('designation')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">prix_u</label>
                <input id="prix_u" name="prix_u" class="form-control" type="text" value="{{ old('prix_u', $articles->prix_u) }}" placeholder="Enter Articals prix_u" />
                @error('prix_u')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">rayon</label>
                <textarea class="form-control" id="rayon" name="rayon" rows="1" placeholder="rayon">{{ old('rayon', $articles->rayon) }}</textarea>
                @error('rayon')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-4">
                <label class="text-1000 fw-bold mb-2">ss_rayon</label>
                <textarea class="form-control" id="ss_rayon" name="ss_rayon" rows="1" placeholder="ss_rayon">{{ old('ss_rayon', $articles->ss_rayon) }}</textarea>
                @error('ss_rayon')
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
