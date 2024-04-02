<div class="row my-3">
    <div class="col-12">
        <h4>Which guidebooks should this card appear on?
        </h4>
        <p>Note: Selecting a guidebook here will remove any other card of this type from
            that
            guidebook.</p>


        <div class="card b-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="row d-flex justify-content-between align-items-baseline">
                            <div class="col-8">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="border:none;border-bottom:1px solid #c4cdd5;background-color:white"><span
                                            class="mdi mdi-magnify fss-1"></span></span>
                                    <input type="text" class="form-control"
                                        id="searchInput"
                                        placeholder="Search / Filter guidebooks"
                                        style="border:none;border-bottom:1px solid #c4cdd5"
                                        aria-label="Search"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-check d-flex justify-content-center">
                                    <input class="form-check-input" type="checkbox"
                                        value="" id="selectAll">
                                    <label class="form-check-label" for="selectAll">
                                        Select All
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @foreach ($guidebooks as $item)
                    <div class="row guidebook">
                        <div class="col-12">
                                <div
                                    class="d-md-flex justify-content-between align-items-baseline">
                                    <div class="col-8">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div>
                                                    <span
                                                        class="mdi mdi-file-document-multiple fs-2"></span>
                                                </div>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-3">
                                                <h5 class="mb-1">
                                                    <a href="#!"
                                                        class="text-inherit">{{ $item->street_name }}</a>
                                                </h5>
                                                <p class="mb-0 fs-5 text-muted">
                                                    {{ $item->city }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check d-flex justify-content-center">
                                            <input class="form-check-input checkboxItem"
                                                type="checkbox"
                                                value="{{ $item->id }}">
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>